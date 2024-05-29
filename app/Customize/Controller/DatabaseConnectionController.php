<?php

namespace Customize\Controller;

use Doctrine\DBAL\DriverManager;

trait DatabaseConnectionController
{
    protected function connection()
    {
        $connectionParams = [
            'dbname' => 'shop',
            'user' => 'root',
            'password' => '',
            'port' => '3307',
            'host' => 'localhost',
            'driver' => 'pdo_mysql',
        ];

        return DriverManager::getConnection($connectionParams);
    }
}
