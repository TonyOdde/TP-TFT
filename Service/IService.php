<?php

namespace Service;

interface IService
{
    public function getOne(int $id) : object|null;

    public function getAll() : array;

    public function create(array $obj) : string;
}