<?php

declare(strict_types=1);

namespace App\Form\Store\co;

use App\Service\ParameterService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdditionalInfoType extends AbstractType
{
    /**
     * @var ParameterService
     */
    protected $parameterService;

    public function __construct(ParameterService $parameterService)
    {
        $this->parameterService = $parameterService;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $store = $options['store'];

        $builder
            ->add(
                'cutoffDates',
                TextType::class,
                [
                    'label' => 'CUTOFF_DATES_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide cutoffDates',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide cutoffDates',
                    ],
                    'help' => 'DATES_CAPTION',
                ]
            )
            ->add(
                'orderNumbers',
                TextType::class,
                [
                    'label' => 'ORDER_NUMBERS_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide orderNumbers',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide orderNumbers',
                    ],
                    'help' => 'ORDER_NUMBERS_CAPTION',
                ]
            )
            ->add(
                'amounts',
                TextType::class,
                [
                    'label' => 'AMOUNTS_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide amounts',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide amounts',
                    ],
                    'help' => 'AMOUNTS_CAPTION',
                ]
            )
            ->add(
                'idNumber',
                TextType::class,
                [
                    'label' => 'ID_NUMBER_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide idNumber',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide idNumber',
                    ],
                ]
            )
            ->add(
                'legalName',
                TextType::class,
                [
                    'label' => 'LEGAL_NAME_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide legalName',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide legalName',
                    ],
                ]
            )
            ->add(
                'billingNumbers',
                TextType::class,
                [
                    'label' => 'BILLING_NUMBERS_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide billingNumbers',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide billingNumbers',
                    ],
                    'help' => 'BILLING_NUMBERS_CAPTION',
                ]
            )
            ->add(
                'billingDates',
                TextType::class,
                [
                    'label' => 'BILLING_DATES_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide billingDates',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide billingDates',
                    ],
                    'help' => 'DATES_CAPTION',
                ]
            )
            ->add(
                'trackingNumber',
                TextType::class,
                [
                    'label' => 'TRACKING_NUMBER_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide trackingNumber',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide trackingNumber',
                    ],
                ]
            )
            ->add(
                'phone',
                TextType::class,
                [
                    'label' => 'PHONE_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide phone',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide phone',
                    ],
                ]
            )
            ->add(
                'reason',
                TextType::class,
                [
                    'label' => 'REASON_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide reason',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide reason',
                    ],
                ]
            )
            ->add(
                'bankAccountNumber',
                TextType::class,
                [
                    'label' => 'BANK_ACCOUNT_NUMBER_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide bankAccountNumber',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide bankAccountNumber',
                    ],
                ]
            )
            ->add(
                'shippingCompany',
                ChoiceType::class,
                [
                    'label' => 'SHIPPING_COMPANY_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide shippingCompany',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide shippingCompany',
                    ],
                    'choices' => $this->parameterService->getShippingCompanyChoices($store),
                    'empty_data' => null,
                    'placeholder' => 'Choose an option',
                ]
            )
            ->add(
                'personInCharge',
                TextType::class,
                [
                    'label' => 'PERSON_IN_CHARGE_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide personInCharge',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide personInCharge',
                    ],
                ]
            )
            ->add(
                'warehouseAddress',
                TextType::class,
                [
                    'label' => 'WAREHOUSE_ADDRESS_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide warehouseAddress',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide warehouseAddress',
                    ],
                ]
            )
            ->add(
                'supplies',
                TextType::class,
                [
                    'label' => 'SUPPLIES_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide supplies',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide supplies',
                    ],
                    'help' => 'SUPPLIES_CAPTION',
                ]
            )
            ->add(
                'packagingType',
                ChoiceType::class,
                [
                    'label' => 'PACKAGING_TYPE_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide packagingType',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide packagingType',
                    ],
                    'choices' => $this->parameterService->getPackagingTypeChoices($store),
                    'empty_data' => null,
                    'placeholder' => 'Choose an option',
                ]
            )
            ->add(
                'packageQty',
                TextType::class,
                [
                    'label' => 'PACKAGE_QTY_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide packageQty',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide packageQty',
                    ],
                ]
            )
            ->add(
                'packageSize',
                TextType::class,
                [
                    'label' => 'PACKAGE_SIZE_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide packageSize',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide packageSize',
                    ],
                ]
            )
            ->add(
                'packageWeight',
                TextType::class,
                [
                    'label' => 'PACKAGE_WEIGHT_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide packageWeight',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide packageWeight',
                    ],
                ]
            )
            ->add(
                'origin',
                ChoiceType::class,
                [
                    'label' => 'ORIGIN_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide origin',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide origin',
                    ],
                    'choices' => $this->parameterService->getOriginChoices($store),
                    'empty_data' => null,
                    'placeholder' => 'Choose an option',
                ]
            )
            ->add(
                'sku',
                TextType::class,
                [
                    'label' => 'SKU_LABEL',
                    'attr' => [
                        'class' => 'additionalField hide sku',
                    ],
                    'label_attr' => [
                        'class' => 'additionalField hide sku',
                    ],
                    'help' => 'SKU_CAPTION',
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(
            [
                'store' => 'co',
            ]
        );
    }
}