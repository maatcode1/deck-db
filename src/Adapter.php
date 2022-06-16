<?php

namespace Deck\Database;

use Laminas\Db\Adapter\AdapterInterface;
use Laminas\Db\Adapter\Driver;
use Laminas\Db\Adapter\Platform;

class Adapter
{
    protected AdapterInterface $adapter;

    public function setAdapter (AdapterInterface $adapter) {
        $this->adapter = $adapter;
    }


}