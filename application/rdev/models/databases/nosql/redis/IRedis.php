<?php
/**
 * Copyright (C) 2014 David Young
 *
 * Defines the interface for Redis classes to implement
 */
namespace RDev\Models\Databases\NoSQL\Redis;

interface IRedis
{
    /**
     * Deletes all the keys that match the input patterns
     * If you know the specific key(s) to delete, call RDevPHPRedis' delete command instead because this method is computationally expensive
     *
     * @param array|string The key pattern or list of key patterns to delete
     * @return bool True if successful, otherwise false
     */
    public function deleteKeyPatterns($keyPatterns);

    /**
     * Gets the server connected to by this Redis instance
     *
     * @return Server The server used by the Redis instance
     */
    public function getServer();

    /**
     * Gets the type mapper used by this Redis instance
     *
     * @return TypeMapper The type mapper used by this Redis instance
     */
    public function getTypeMapper();
} 