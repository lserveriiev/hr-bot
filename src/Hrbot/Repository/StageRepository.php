<?php

namespace Hrbot\Repository;

use Hrbot\Database\QueryBuilderInterface;

class StageRepository implements StageRepositoryInterface
{
    private $tableName = 'stage';
    private $tableClientName = 'client';

    private $queryBuilder;

    public function __construct(QueryBuilderInterface $queryBuilder)
    {
        $this->queryBuilder = $queryBuilder;
    }

    public function getCountClients(): array
    {
        $query = <<<SQL
  SELECT s.title, COUNT(c.stage_id) AS `value`
  FROM {$this->tableName} s
  INNER JOIN {$this->tableClientName} c ON c.stage_id=s.id
  GROUP BY c.stage_id 
  ORDER BY s.order
SQL;

        $result = $this->queryBuilder->fetchAll($query);

        return $result === false
            ? []
            : $result;
    }
}
