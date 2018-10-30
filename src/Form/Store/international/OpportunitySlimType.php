<?php

declare(strict_types=1);

namespace App\Form\Store\international;

use App\Entity\Opportunity;
use App\Service\SellerSignUpService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;

class OpportunitySlimType extends AbstractType
{
    /**
     * @var SellerSignUpService
     */
    protected $sellerSignUpService;

    public function __construct(SellerSignUpService $sellerSignUpService)
    {
        $this->sellerSignUpService = $sellerSignUpService;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('opportunityCountries', ChoiceType::class, [
                'choices' => $this->sellerSignUpService->getOpportunityCountries(),
                'placeholder' => 'Choose an option',
                'expanded' => true,
                'multiple' => true,
                'constraints' => [
                    new Choice([
                        'choices' => array_values($this->sellerSignUpService->getOpportunityCountries()),
                        'multiple' => true,
                        'min' => 1,
                        'minMessage' => 'You need to select at least one country',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(
            [
                'data_class' => Opportunity::class,
                'store' => 'international',
            ]
        );
    }
}
