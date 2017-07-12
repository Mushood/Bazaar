<?php

namespace Bazaar\StoreBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ProductAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper ->add('title')
                    ->add('description')
                    ->add('price')
                    ->add('category')
          ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper ->add('title')
                        ->add('description')
                        ->add('price')
                        ->add('category')
          ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper ->addIdentifier('title')
                    ->addIdentifier('description')
                    ->addIdentifier('price')
                    ->addIdentifier('category')
          ;
    }
}
