<?php

declare(strict_types=1);

abstract class AbstractEntityManager
{
    protected DBManager $db;

    public function __construct()
    {
        $this->db = DBManager::getInstance();
    }
}
