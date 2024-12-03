<?php

namespace Models;

interface IDAO
{
    public function getAll() : array;

    public function getById(int $id) : object|null;

    public function create(array $obj) : string;

    public function delete(int $id) : void;

    public function update(array $obj) : void;
}