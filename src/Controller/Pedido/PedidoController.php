<?php

namespace App\Controller\Pedido;

use App\Entity\Cliente;
use App\Entity\OrderItem;
use App\Entity\Pedido;
use App\Factory\OrderFactory;
use App\Form\Pedido2Type;
use App\Form\PedidoTypeAdmin;
use App\Repository\ClienteRepository;
use App\Repository\EstadoRepository;
use App\Repository\OrderItemRepository;
use App\Repository\OrderRepository;
use App\Repository\PedidoRepository;
use App\Repository\ProductoRepository;
use App\Repository\StockRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @Route("/pedido")
 */
class PedidoController extends AbstractController
{
    /**
     * @Route("/", name="app_pedido_index", methods={"GET"})
     */
    public function index(PedidoRepository $pedidoRepository,ManagerRegistry $doctrine): Response
    {
        $email=$this->getUser()->getUserIdentifier();
        $cliente= $this->getDoctrine()->getRepository(Cliente::class)->findOneBy(['email' => $email]);
        $id=$cliente->getId();
        $pedid = $this->getDoctrine()->getRepository(Pedido::class)->findBy(['clientePedido' => $id]);
        $entityManager = $doctrine->getManager();
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            return $this->render('pedido/index.html.twig', [
                'pedidos' => $pedidoRepository->findAll(),
            ]);
        }else{
            return $this->render('cliente/showpedidos.html.twig', [
                'cliente' => $cliente,
                'pedido' => $pedid,

            ]);

        }
    }

    /**
     * @Route("/new", name="app_pedido_new", methods={"GET", "POST"})
     */
    public function new(Request $request, PedidoRepository $pedidoRepository,EstadoRepository $estadoRepository,OrderRepository $orderRepository,OrderItemRepository $orderItemRepository, ClienteRepository $clienteRepository,StockRepository $stockRepository,ManagerRegistry $doctrine): Response
    {
        $sesion=$request->getSession();
        $cart=$sesion->get('cart_id');
        $order=$orderRepository->findOneBy(['id'=>$cart]);
        $pedido=$pedidoRepository->findOneBy(['order'=>$order]);
        if(is_null($pedido)) {

            $pedido = new Pedido();
            $form = $this->createForm(Pedido2Type::class, $pedido);
            $form = $this->createFormBuilder($pedido)
                ->add('add', SubmitType::class, [
                    'label' => 'Confirmar pedido'])
                ->getForm();

            $ref = rand(00001, 99999);
            $refs = $this->getDoctrine()->getRepository(Pedido::class)->findBy(['referencia' => $ref]);
            $refexist = count($refs);
            if ($refexist == 0) {
                $pedido->setReferencia($ref);
            } else {
                $ref = rand(00001, 99999);
            }

            $pedido->setOrder($order);
            $pedidoOrden = $pedido->getOrder();
            $items = $orderItemRepository->findBy(['orderRef' => $pedidoOrden]);
            $total = $pedidoOrden->getTotal();
            $pedido->setTotal($total);
            foreach ($items as $item) {
                $product = $item->getProduct();
                $cant = $item->getQuantity();
                $product->setCantidadProducto($cant);
                $pedido->addProducto($product);
                $item->setPedido($pedido);

            };
           
            $estado = $estadoRepository->findOneBy(['estado' => 'Enviado']);
            $pedido->setCreatedAt(new \DateTime('now'));
            $email = $this->getUser()->getUserIdentifier();
            $cliente = $this->getDoctrine()->getRepository(Cliente::class)->findOneBy(['email' => $email]);
            $productos = $pedido->getProductos();
            $pedido->setClientePedido($cliente);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
				$cantItems=$request->get("cantidad");
                $totpedido=$request->get(  "pedidototal" );
                $itemsPedido=$pedido->getItems();
                $itemsPedido->clear();
                foreach ($productos as $prod){
                    foreach ($cantItems as $ci) {
                        $it=new OrderItem();
                        $it->setOrderRef($pedidoOrden);
                        $it->setQuantity($ci);
                        $it-> setProduct($prod);
                        $prod->setCantidadProducto($ci);
                        $itemsPedido->add($it);
                        $stock = $stockRepository->findOneBy(['producto' => $prod]);
                        $itCant = $prod->getCantidadProducto();
                        $stckCant = $stock->getCantidad();
                        $stckEnd = $stckCant - $itCant;
                        $stock->setCantidad($stckEnd);
                    }
                }
                $pedido->setEstado($estado);
                $tot=floatval($totpedido);
                $pedido->setTotal($tot);
                $id=$pedido->getId();
                $pedidoRepository->add($pedido, true);
                $request->getSession()->clear();
                return $this->redirectToRoute('app_pedido_index', [], Response::HTTP_SEE_OTHER);
            }

            return $this->renderForm('pedido/new.html.twig', [
                'pedido' => $pedido,
                'items' => $items,
                'order' => $order,
                'referencia' => $pedido->getReferencia(),
                'form' => $form,
            ]);
        }else{
            return $this->redirectToRoute('app_pedido_edit', array('id' => $pedido->getId()));

        }
    }

    /**
     * @Route("/{id}", name="app_pedido_show", methods={"GET"})
     * @param Pedido $pedido
     * @param $id
     * @param ClienteRepository $clienteRepository
     * @param $orderItemRepository
     * @return Response
     */
    public function show(Pedido $pedido, $id, ClienteRepository $clienteRepository,OrderItemRepository $orderItemRepository): Response
    {
        $cliente=$pedido->getClientePedido()->getId();
        $productos=$pedido->getProductos();
        $order =$pedido->getOrder();
        $items=$orderItemRepository->findBy(['orderRef'=>$order]);
        foreach ($items as $item) {
            $product = $item->getProduct();
            $cant = $item->getQuantity();
            $product->setCantidadProducto($cant);
        }


        $cliente=$clienteRepository->findOneBy(['id' => $cliente]);
        return $this->render('pedido/show.html.twig', [
            'pedido' => $pedido,
             'productos'=>$productos,
            'cliente'=>$cliente,

        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_pedido_edit", methods={"GET", "POST"})
     */
    public function edit( EntityManagerInterface $entityManager,Request $request, Pedido $pedido, PedidoRepository $pedidoRepository, EstadoRepository $estadoRepository, OrderRepository $orderRepository,OrderItemRepository $orderItemRepository,OrderFactory $orderFactory, ProductoRepository $productoRepository,StockRepository $stockRepository): Response
    {
         $pedido->setUpdatedAt(new \DateTime('now'));
        $estado=$pedido->getEstado();
        $enviadoCliente= $estadoRepository->findOneBy(['estado'=>'Enviado al cliente']);
        $envClt=$enviadoCliente->getEstado();
        $recibidoCliente= $estadoRepository->findOneBy(['estado'=>'Recibido por el cliente']);
        $recClt=$recibidoCliente->getEstado();
        $cliente=$pedido->getClientePedido();
        $productos = $productoRepository->findAll();
        $productPedido = $pedido->getProductos();
        $idOrd = $pedido->getOrder();
        $order = $orderRepository->findOneBy(['id' => $idOrd]);
        $items = $orderItemRepository->findBy(['orderRef' => $order]);
        foreach ($items as $item) {
            $product = $item->getProduct();
            $cant = $item->getQuantity();
            $product->setCantidadProducto($cant);
            $pedido->addItem($item);

        }
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
        {
            $form = $this->createForm(PedidoTypeAdmin::class, $pedido);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $pedidoRepository->add($pedido, true);
                $entityManager->persist($pedido);
                $entityManager->flush();
                return $this->redirectToRoute('app_pedido_index', [], Response::HTTP_SEE_OTHER);
            }

        }else{

           $form=$this->createFormBuilder($pedido)
               ->add('save',SubmitType::class,[
                   'label' => 'Actualizar  pedido'])
               ->getForm();
            $form->handleRequest($request);
            if(strcasecmp($estado, $envClt) == 0){
                $this->addFlash('warning', 'El pedido ya ha sido enviado.');
                return $this->redirectToRoute('app_pedido_index', [], Response::HTTP_SEE_OTHER);
            }else{
                if(strcasecmp($estado, $recClt) == 0){
                    $this->addFlash('warning', 'Usted ya ha recibido este pedido.');
                    return $this->redirectToRoute('app_pedido_index', [], Response::HTTP_SEE_OTHER);
                }


        }
        $itemsPedido=$pedido->getItems();
                if ($form->isSubmitted() && $form->isValid()) {
                    $itemnamesold[] = $request->get("itemm_oldname");
                    $totalpedidonew = $request->get("totalnew");
                    $totalpedidoitems = $request->get("totalold");
                    $productosPedido = $pedido->getProductos();
                    $itemcantold[] = $request->get("itemm_oldcant");
                    $prod_nameadd[] = $request->get("prod_nameadd");
                    $prod_cantadd[] = $request->get("prod_cantadd");
                    if (isset($itemnamesold)) {
                        if ($totalpedidonew != 0) {
                            $pedido->setTotal(floatval($totalpedidonew));
                        } else {
                            $pedido->setTotal(floatval($totalpedidoitems));
                        }

                        $productosPedido->clear();
                        $itemsPedido->clear();
                        foreach ($itemnamesold as $nombIt) {
                            $prodNew = $productoRepository->findBy(['name' => $nombIt]);
                            foreach ($itemcantold as $cantIt) {
                                foreach ($prodNew as $pa) {
                                    $stockProduct=$stockRepository->findOneBy(['producto' => $pa]);
                                    $pa->setCantidadProducto(intval($cantIt));
                                    $productopedido=$pa->getCantidadProducto();
                                    $oldStock=$stockProduct->getCantidad();
                                    $rest=$oldStock-$productopedido;
                                    $stockProduct->setCantidad($rest);
                                    $item = new OrderItem();
                                    $item->setProduct($pa);
                                    $item->setQuantity(intval($cantIt));
                                    $item->setOrderRef($order);
                                    $item->setPedido($pedido);
                                    $productosPedido->add($pa);
                                    $itemsPedido->add($item);
                                    $entityManager->persist($stockProduct);


                                }

                            }

                        }

                        foreach ($prod_nameadd as $nombpr) {
                            foreach ($prod_cantadd as $cantpr) {
                                $prodAdd = $productoRepository->findBy(['name' => $nombpr]);
                                foreach ($prodAdd as $pa) {
                                    $stockProduct=$stockRepository->findOneBy(['producto' => $pa]);
                                    $pa->setCantidadProducto(intval($cantpr));
                                    $productopedido=$pa->getCantidadProducto();
                                    $oldStock=$stockProduct->getCantidad();
                                    $rest=$oldStock-$productopedido;
                                    $stockProduct->setCantidad($rest);
                                    $pedido->addProducto($pa);
                                    $itemAdd = new OrderItem();
                                    $itemAdd->setProduct($pa);
                                    $itemAdd->setQuantity(intval($cantpr));
                                    $itemAdd->setOrderRef($order);
                                    $itemAdd->setPedido($pedido);
                                    $itemsPedido->add($itemAdd);
                                    $entityManager->persist($stockProduct);
                                }

                            }
                        }

                    }
                    $pedidoRepository->add($pedido, true);
                    $entityManager->persist($pedido);
                    $entityManager->flush();
                    return $this->redirectToRoute('app_pedido_index', [], Response::HTTP_SEE_OTHER);

                }
            }
        

        return $this->renderForm('pedido/edit.html.twig', [
            'pedido' => $pedido,
            'productPedido'=>$productPedido,
            'productos'=>$productos,
            'cliente'=>$cliente,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_pedido_delete", methods={"POST"})
     */
    public function delete(Request $request, Pedido $pedido, PedidoRepository $pedidoRepository,EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pedido->getId(), $request->request->get('_token'))) {
            $entityManager->remove($pedido);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_pedido_index', [], Response::HTTP_SEE_OTHER);
    }
}
