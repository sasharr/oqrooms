<?php

namespace CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Class: PageAdmin.php
 *
 * @author    Odessa Team (odessateam@ab-soft.net)
 * @category  Ringcentral
 * @copyright Copyright (c) 2012-2016, RingCentral, Inc (http://www.ringcentral.com)
 *
 * @version $Id:$
 */
class PageAdmin extends  Admin
{
    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title', 'text', [
                'label' => 'название',
            ])
           ->add('description', 'sonata_simple_formatter_type', [
                'format' => 'richhtml',
                'label'  => 'Описание'
            ]);
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('title');
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('title');
    }
}