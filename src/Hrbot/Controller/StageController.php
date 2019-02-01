<?php

namespace Hrbot\Controller;

use Hrbot\Repository\StageRepositoryInterface;

class StageController
{
    private $repository;

    public function __construct(StageRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getStatistic(): array
    {
        return $this->repository->getCountClients();
    }
}
