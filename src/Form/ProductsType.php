<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Products;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('imageFile', VichImageType::class, [
            'label'=>'Image du produit(PNG or JPG)',
            'required' => false,
            'allow_delete' => false,
            'download_uri' => false,
            'imagine_pattern'=>'squared_thumbnail_medium'
        ])
            ->add('name')
            ->add('price')
            ->add('description')
            // ->add('categorie',EntityType::class,[
            //     'class'=>Category::class,
            //     'multiple'=>true,
            //     'choice_label'=>'name',
            //     'expanded'=>true
            // ])
            // ->add('createdAt')
            // ->add('updatedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
