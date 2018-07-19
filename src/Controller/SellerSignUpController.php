<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\SellerSignUp;
use App\Form\SellerSignUpFormFactory;
use App\Service\PrmService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SellerSignUpController extends AbstractController
{
    /**
     * @var PrmService
     */
    protected $prmService;

    public function __construct(PrmService $prmService)
    {
        $this->prmService = $prmService;
    }

    public function index(Request $request, string $store): Response
    {
        $sellerSignUp = new SellerSignUp();

        $form = $this->createForm(
            SellerSignUpFormFactory::fromStore($store),
            $sellerSignUp
        );

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->prmService->createContact($sellerSignUp->getContact());
        }

        return $this->render(
            'sellerSignUp.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }
}
