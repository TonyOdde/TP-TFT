<?php

namespace Models;

use Models\BasePDODAO;

class OriginDAO extends BasePDODAO implements IDAO
{
    public function getById(int $idOrigin) : Origin|null
    {
        $sql = "SELECT * FROM origin WHERE id = :idOrigin";
        $req = $this->execRequest($sql, ['idOrigin' => $idOrigin]);
        $result = $req->fetchObject(Origin::class);
        if ($result === false){
            $result = null;
        }
        return $result;
    }

    public function getAll(): array
    {
        $sql = "SELECT * FROM origin";
        $rep = $this->execRequest($sql);
        $result = $rep->fetchAll(\PDO::FETCH_CLASS, Origin::class);
        return $result;
    }
}