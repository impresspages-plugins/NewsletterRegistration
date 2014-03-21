<?php

namespace Plugin\NewsletterRegistration\Setup;

class Worker extends \Ip\SetupWorker
{

    // Create SQL table when installing the plugin
    public function activate()
    {
        $sql = '
        CREATE TABLE IF NOT EXISTS
           ' . ipTable('newsletterExample') . '
        (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `personOrder` double,
        `Email` varchar(255) ,
        PRIMARY KEY (`id`)
        )';
        ipDb()->execute($sql);

    }

    // Delete SQL table when uninstalling the plugin
    public function deactivate()
    {
        $sql = '
        DROP TABLE IF NOT EXISTS
           ' . ipTable('newsletterExample') ;

        ipDb()->execute($sql);
    }

    public function remove()
    {

    }

}
