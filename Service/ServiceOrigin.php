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

    public function create(array $obj): string
    {
        return $this->dao->create($obj);
    }

    public function delete(int $id): void
    {
        $this->dao->delete($id);
    }

    public function update(array $obj): void
    {
        $this->dao->update($obj);
    }
}