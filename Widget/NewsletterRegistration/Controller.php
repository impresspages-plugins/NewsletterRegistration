<?php

/**
 * Widget controller
 */

namespace Plugin\NewsletterRegistration\Widget\NewsletterRegistration;

class Controller extends \Ip\WidgetController
{
    public function generateHtml($revisionId, $widgetId, $data, $skin)
    {
        $form = \Plugin\NewsletterRegistration\Model::createForm();

        // Pass form object to a view file skin/default.php
        $data['form'] = $form;

        return parent::generateHtml($revisionId, $widgetId, $data, $skin);
    }
}
