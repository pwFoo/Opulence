<?php

/**
 * Opulence
 *
 * @link      https://www.opulencephp.com
 * @copyright Copyright (C) 2019 David Young
 * @license   https://github.com/opulencephp/Opulence/blob/master/LICENSE.md
 */

declare(strict_types=1);

namespace Opulence\Databases\ConnectionPools;

use Opulence\Databases\Server;

/**
 * Defines a single server implementation of the connection pool, which can be used for basic, non-master/slave setups
 */
class SingleServerConnectionPool extends ConnectionPool
{
    /**
     * @inheritdoc
     */
    protected function setReadConnection(Server $preferredServer = null): void
    {
        if ($preferredServer !== null) {
            $this->readConnection = $this->getConnection('custom', $preferredServer);
        } else {
            $this->readConnection = $this->getConnection('master', $this->getMaster());
        }
    }

    /**
     * @inheritdoc
     */
    protected function setWriteConnection(Server $preferredServer = null): void
    {
        if ($preferredServer !== null) {
            $this->writeConnection = $this->getConnection('custom', $preferredServer);
        } else {
            $this->writeConnection = $this->getConnection('master', $this->getMaster());
        }
    }
}