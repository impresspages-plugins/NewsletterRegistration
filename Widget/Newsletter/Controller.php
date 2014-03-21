<?php

/**
 * Widget controller
 */

namespace Plugin\NewsletterRegistration\Widget\Newsletter;

class Controller extends \Ip\WidgetController
{
    public function generateHtml($revisionId, $widgetId, $instanceId, $data, $skin)
    {
        $form = \Plugin\NewsletterRegistration\Model::createForm();
        /**
         * Pass form object to a view file skin/default.php
         */
        $data['form'] = $form;

        return parent::generateHtml($revisionId, $widgetId, $instanceId, $data, $skin);
    }
}