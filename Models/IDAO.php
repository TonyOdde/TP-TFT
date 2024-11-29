<?php

namespace Models;

interface IDAO
{
    public function getAll() : array;

    public function getById(int $id) : object|null;

    public function create(array $obj) : string;
}