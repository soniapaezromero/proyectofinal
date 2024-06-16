<?php

namespace App\Controller\Novedades;

use App\Entity\Novedades;
use App\Form\NovedadesType;
use App\Repository\NovedadesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/novedades")
 */
class NovedadesController extends AbstractController
{
    /**
     * @Route("/", name="app_novedades_index", methods={"GET"})
     */
    public function index(NovedadesRepository $novedadesRepository): Response
    {
        return $this->render('novedades/index.html.twig', [
            'novedades' => $novedadesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_novedades_new", methods={"GET", "POST"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function new(Request $request, NovedadesRepository $novedadesRepository): Response
    {
        $novedade = new Novedades();
        $form = $this->createForm(NovedadesType::class, $novedade);
        $form->handleRequest($request);
        $novedade->setCreatedAt(new \DateTime('now'));
        $novedade->setUpdatedAt(new \DateTime('now'));
        if ($form->isSubmitted() && $form->isValid()) {
            $novedadesRepository->add($novedade, true);

            return $this->redirectToRoute('app_novedades_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('novedades/new.html.twig', [
            'novedade' => $novedade,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_novedades_show", methods={"GET"})
     */
    public function show(Novedades $novedade): Response
    {
        return $this->render('novedades/show.html.twig', [
            'novedade' => $novedade,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_novedades_edit", methods={"GET", "POST"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function edit(Request $request, Novedades $novedade, NovedadesRepository $novedadesRepository): Response
    {
        $form = $this->createForm(NovedadesType::class, $novedade);
        $form->handleRequest($request);
        $novedade->setUpdatedAt(new \DateTime('now'));
        if ($form->isSubmitted() && $form->isValid()) {
            $novedadesRepository->add($novedade, true);

            return $this->redirectToRoute('app_novedades_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('novedades/edit.html.twig', [
            'novedade' => $novedade,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_novedades_delete", methods={"POST"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function delete(Request $request, Novedades $novedade, NovedadesRepository $novedadesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$novedade->getId(), $request->request->get('_token'))) {
            $novedadesRepository->remove($novedade, true);
        }

        return $this->redirectToRoute('app_novedades_index', [], Response::HTTP_SEE_OTHER);
    }
}
