<?php
/**
 * Adds administration grid
 *
 * When this plugin is installed, `Newsletter example` panel appears in administration site.
 *
 */

namespace Plugin\NewsletterRegistration;


class AdminController extends \Ip\GridController
{

    protected  function config(){
        return array(
            'title' => 'Newsletter example',
            'table' => 'newsletterExample',
            'deleteWarning' => 'Are you sure?',
            'sortField' => 'personOrder',
            'createPosition' => 'top',
            'pageSize' => 25,
            'fields' => array(
                array(
                    'label' => 'Email',
                    'field' => 'Email',
                    'validators' => array('Required', 'Email'),
                )
            )
        );
    }

} 