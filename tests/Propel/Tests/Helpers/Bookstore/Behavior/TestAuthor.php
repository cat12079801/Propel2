<?php

/**
 * MIT License. This file is part of the Propel package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Propel\Tests\Helpers\Bookstore\Behavior;

use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Tests\Bookstore\Author;

class TestAuthor extends Author
{
    public function preInsert(?ConnectionInterface $con = null)
    {
        parent::preInsert($con);
        $this->setFirstName('PreInsertedFirstname');

        return true;
    }

    /**
     * @return void
     */
    public function postInsert(?ConnectionInterface $con = null): ?int
    {
        parent::postInsert($con);
        $this->setLastName('PostInsertedLastName');
    }

    public function preUpdate(?ConnectionInterface $con = null)
    {
        parent::preUpdate($con);
        $this->setFirstName('PreUpdatedFirstname');

        return true;
    }

    /**
     * @return void
     */
    public function postUpdate(?ConnectionInterface $con = null): ?int
    {
        parent::postUpdate($con);
        $this->setLastName('PostUpdatedLastName');
    }

    public function preSave(?ConnectionInterface $con = null)
    {
        parent::preSave($con);
        $this->setEmail('pre@save.com');

        return true;
    }

    /**
     * @return void
     */
    public function postSave(?ConnectionInterface $con = null): ?int
    {
        parent::postSave($con);
        $this->setAge(115);
    }

    public function preDelete(?ConnectionInterface $con = null): ?int
    {
        parent::preDelete($con);
        $this->setFirstName('Pre-Deleted');

        return true;
    }

    /**
     * @return void
     */
    public function postDelete(?ConnectionInterface $con = null): ?int
    {
        parent::postDelete($con);
        $this->setLastName('Post-Deleted');
    }
}
