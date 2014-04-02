<?php

namespace Plugin\NewsletterRegistration\Setup;

class Worker extends \Ip\SetupWorker
{

    /**
     * Create SQL table on plugin activation
     */
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

    public function deactivate()
    {
    }

    public function remove()
    {
        $sql = '
        DROP TABLE IF EXISTS
           ' . ipTable('newsletterExample') ;

        ipDb()->execute($sql);
    }

}

