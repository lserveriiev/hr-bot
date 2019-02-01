<?php

namespace Hrbot\Database;

interface QueryBuilderInterface
{
    public function fetchAll(string $query, array $params = []);
}
