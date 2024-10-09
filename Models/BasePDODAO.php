<?php

namespace Models;

use PDO;
use PDOStatement;
use Config\Config;

abstract class BasePDODAO
{
    private PDO $bd;

    public function __construct(){
        $this->bd = $this->getDB();
    }

    protected function execRequest(string $sql, array $params = null)
    {
        try {
            $stmt = $this->getDB()->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS, static::class);
            if ($params === null) {
                $stmt->execute();
            } else {
                $stmt->execute($params);
            }
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode());
        }
        return $stmt;
    }

    private function getDB() : PDO
    {
        $this->db = new PDO(Config::get('dsn'), Config::get('user'), Config::get('pass'));
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $this->db;
    }
}