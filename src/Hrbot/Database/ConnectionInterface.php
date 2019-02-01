<?php

namespace Hrbot\Database;

interface ConnectionInterface
{
    public function getConnection(): \PDO;
}
