<?php
/**
 * Load JavaScript file.
 */
namespace Plugin\NewsletterRegistration;


class Event
{
    // This method is launched before loading the controller
    // You can add JS and CSS files here.
    public static function ipBeforeController()
    {
        ipAddJs('assets/newsletter.js');
    }

}
