<?php

namespace Models;

use Models\BasePDODAO;
use mysql_xdevapi\DatabaseObject;

class UnitDAO extends BasePDODAO implements IDAO
{
    public function getAll() : array
    {
        $sql = "SELECT * FROM unit";
        $rep = $this->execRequest($sql);
        $result = $rep->fetchAll(\PDO::FETCH_CLASS, Unit::class);
        return $result;
    }

    public function getById (int $idUnit) : Unit|null
    {
        $sql = "SELECT * FROM unit WHERE id = :idUnit";
        $rep = $this->execRequest($sql, ['idUnit' => $idUnit]);
        $result = $rep->fetchObject(Unit::class);
        if ($result === false){
            $result = null;
        }
        return $result;
    }
}