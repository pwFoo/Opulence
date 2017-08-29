<?php

/**
 * Opulence
 *
 * @link      https://www.opulencephp.com
 * @copyright Copyright (C) 2017 David Young
 * @license   https://github.com/opulencephp/Opulence/blob/master/LICENSE.md
 */

namespace Opulence\Tests\Databases\Migrations\Mocks;

use DateTime;
use Opulence\Databases\Migrations\Migration;

/**
 * Defines a mock migration
 */
class MigrationA extends Migration
{
    /**
     * @inheritdoc
     */
    public static function getCreationDate() : DateTime
    {
        return new DateTime('2017-08-13T12:00:00Z');
    }
}
