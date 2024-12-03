<?php

namespace Service;

use Models\IDAO;
use Models\Unit;
use Models\UnitDAO;

class ServiceUnit implements IService
{
    private IDAO $dao;

    public function __construct(){
        $this->dao = new UnitDAO();
    }

    public function getOne(int $id) : Unit|null
    {
        $result =  $this->dao->getById($id);
        $serviceOrigin = new ServiceOrigin();
        $origin = $serviceOrigin->getOne($result->getOrigin());
        $result->setNameOrigin($origin->getName());
        return $result;
    }

    public function getAll() : array
    {
        $listUnit = $this->dao->getAll();
        $serviceOrigin = new ServiceOrigin();
        foreach ($listUnit as $unit) {
            $idOrigin = $unit->getOrigin();
            $nameOrigin = $serviceOrigin->getOne($idOrigin)->getName();
            $unit->setNameOrigin($nameOrigin);
        }
        return $listUnit;
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