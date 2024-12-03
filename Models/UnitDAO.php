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

    public function create(array $obj): string
    {
        $sql = "INSERT INTO unit (name, cost, origin, url_img) VALUES (:name, :cost, :origin, :url_img)";
        $this->execRequest($sql, ['name' => $obj['name'], 'cost' => $obj['cost'], 'origin' => $obj['origin'], 'url_img' => $obj['url_img']]);
        return "Unité " . $obj['name'] . " ajouté";
    }

    public function delete(int $id): void
    {
        $sql = "DELETE FROM unit WHERE id = :id";
        $this->execRequest($sql, ['id' => $id]);
    }

    public function update(array $obj): void
    {
        $sql = "UPDATE unit SET name = :name, cost = :cost, url_img = :url, origin = :origin WHERE id = :id";
        $this->execRequest($sql, ['id' => $obj['id'], 'name' => $obj['name'], 'cost' => $obj['cost'], 'url' => $obj['url_img'], 'origin' => $obj['origin']]);
    }
}