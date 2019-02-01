<?php

namespace Hrbot\Configuration;

use Hrbot\Model\DatabaseConfig;

interface ConfigurationInterface
{
    public function getDatabaseConfig(): DatabaseConfig;
}
