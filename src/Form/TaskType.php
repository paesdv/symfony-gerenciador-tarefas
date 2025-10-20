<?php
// src/Form/TaskType.php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('description', TextType::class, [
                'label' => 'Descrição', // Traduzido
                'attr' => ['class' => 'form-control'] // Adiciona classe bootstrap
            ])
            ->add('isDone', CheckboxType::class, [
                'label' => 'Concluída?', // Traduzido
                'required' => false,
                'attr' => ['class' => 'form-check-input'] // Adiciona classe bootstrap
            ])
            // O campo 'createdAt' foi removido, pois não deve ser editado pelo usuário.
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }
}
