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

    public function create(array $obj): string
    {
        $sql = "INSERT INTO origin (name) VALUES (:name)";
        $this->execRequest($sql, ['name' => $obj['name']]);
        return "Origine " . $obj['name'] . " ajouté";
    }

    public function delete(int $id): void
    {
        $sql = "DELETE FROM origin WHERE id = :id";
        $this->execRequest($sql, ['id' => $id]);
    }

    public function update(array $obj): void
    {
        $sql = "UPDATE origin SET name = :name WHERE id = :id";
        $this->execRequest($sql, ['id' => $obj['id'], 'name' => $obj['name']]);
    }
}