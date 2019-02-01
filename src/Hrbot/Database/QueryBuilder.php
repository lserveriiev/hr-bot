<?php

namespace Hrbot\Database;

class QueryBuilder implements QueryBuilderInterface
{
    private $connection;

    public function __construct(ConnectionInterface $connection)
    {
        $this->connection = $connection->getConnection();
    }

    public function fetchAll(string $query, array $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
}
