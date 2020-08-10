<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Sonata\AdminBundle\Form\Type\ModelType;
use App\Entity\Post;
use App\Entity\Category;
use App\Entity\Author;

class PostAdmin extends AbstractAdmin{
    
    protected function configureListFields(ListMapper $list) {
        $list->addIdentifier('title', TextType::class, [
            'label' => 'Título'
        ])
            ->add('category', null, [
                'label' => 'Categoria',
                'associated_property' => 'name'
            ])
            ->add('status', 'boolean', [
                'editable' => true
            ]);
    }
    
    protected function configureFormFields(FormMapper $form) {
        $form->add('category', ModelType::class, [
                    'class' => Category::class,
                    //'choice_label' => 'name',
                    'property' => 'name',
                    'multiple' => true,
                    //'expanded' => true
                ])
                ->add('author', ModelType::class, [
                    'class' => Author::class,
                    'property' => 'name',
                ])
                ->add('title', TextType::class)
                ->add('content', TextareaType::class)
                ->add('status', CheckboxType::class, [
                    'required' => false
                ]);
    }
    
    public function toString($object) {
        return $object instanceof Post ? $object->getTitle() : 'Postagem';
    }
}
