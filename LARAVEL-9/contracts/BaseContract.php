<?php

namespace App\Contracts;

interface BaseContract
{
    public function create(array $attributes);
    public function find(int $id);
    public function update(array $attributes, int $id);
    public function delete(int $id);
}
