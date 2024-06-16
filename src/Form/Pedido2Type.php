<?php

namespace App\Form;

use App\Entity\Pedido;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Pedido2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
          //  ->add('referencia')
          //  ->add('createdAt')
          //  ->add('updatedAt')
         //   ->add('total')
        //    ->add('clientePedido')
         //   ->add('order')
         //   ->add('estado')
         //   ->add('productos')
          ->add('save',SubmitType::class,[
              'label' => 'Actualizar  pedido'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pedido::class,
        ]);
    }
}
