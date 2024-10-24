<?php

namespace Service;

use Models\IDAO;
use Models\Origin;
use Models\OriginDAO;

class ServiceOrigin implements IService
{
    private IDAO $dao;

    public function __construct(){
        $this->dao = new OriginDAO();
    }

    public function getOne(int $id): Origin|null
    {
        return $this->dao->getById($id);
    }

    public function getAll(): array
    {
        return $this->dao->getAll();
    }
}