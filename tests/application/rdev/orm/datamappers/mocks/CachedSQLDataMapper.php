<?php
/**
 * Copyright (C) 2014 David Young
 *
 * Mocks the cached SQL data mapper for use in tests
 */
namespace RDev\Tests\ORM\DataMappers\Mocks;
use RDev\Databases\SQL;
use RDev\ORM\DataMappers;

class CachedSQLDataMapper extends DataMappers\CachedSQLDataMapper
{
    public function __construct()
    {
        $this->cacheDataMapper = new CacheDataMapper();
        $this->sqlDataMapper = new SQLDataMapper();
    }

    /**
     * {@inheritdoc}
     */
    public function getAll()
    {
        return $this->read("getAll");
    }

    /**
     * {@inheritdoc}
     */
    public function getById($id)
    {
        return $this->read("getById", [$id]);
    }

    /**
     * @return SQLDataMapper
     */
    public function getCacheDataMapperForTests()
    {
        return $this->cacheDataMapper;
    }

    /**
     * @return SQLDataMapper
     */
    public function getSQLDataMapperForTests()
    {
        return $this->sqlDataMapper;
    }

    /**
     * {@inheritdoc}
     */
    public function loadEntity(array $hash)
    {
        // Don't do anything
    }

    /**
     * {@inheritdoc}
     */
    protected function setCacheDataMapper($cache)
    {
        $this->cacheDataMapper = new CacheDataMapper();
    }

    /**
     * {@inheritdoc}
     */
    protected function setSQLDataMapper(SQL\ConnectionPool $connectionPool)
    {
        $this->sqlDataMapper = new SQLDataMapper();
    }
} 