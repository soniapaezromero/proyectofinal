<?php

namespace App\Storage;

use App\Entity\Order;
use App\Repository\OrderRepository;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Class CartSessionStorage
 * @package App\Storage
 */
class CartSessionStorage
{
    /**
     * @var RequestStack
     */
    private $requestStack;

    /**
     * The cart repository.
     *
     * @var OrderRepository
     */
    private $cartRepository;

    /**
     * @var string
     */
    const CART_KEY_NAME = 'cart_id';

    /**
     * CartSessionStorage constructor.
     *
     * @param RequestStack $requestStack
     * @param OrderRepository $cartRepository
     */
    public function __construct(RequestStack $requestStack, OrderRepository $cartRepository)
    {
        $this->requestStack = $requestStack;
        $this->cartRepository = $cartRepository;
    }

    /**
     * Gets the cart in session.
     *
     * @return Order|null
     */
    public function getCart(): ?Order
    {
        return $this->cartRepository->findOneBy([
            'id' => $this->getCartId(),
            'status' => Order::STATUS_CART
        ]);
    }

    /**
     * Sets the cart in session.
     *
     * @param Order $cart
     */
    public function setCart(Order $cart): void
    {
        $this->requestStack->getSession()->set(self::CART_KEY_NAME, $cart->getId());
    }

    /**
     * Returns the cart id.
     *
     * @return int|null
     * @param Order $cart
     */
    private function getCartId(): ?int

    {
        // $order =$this->requestStack->getSession()->get('cart_id');
     //  if (is_null($order)) {
            return $this->requestStack->getSession()->get(self::CART_KEY_NAME);
       // }
      //  return $order->getId();
        }

}