<?php
/**
 * Load JavaScript file.
 */
namespace Plugin\NewsletterRegistration;


class Event
{
    public static function ipBeforeController()
    {
        ipAddJs('assets/newsletter.js');
    }

}
