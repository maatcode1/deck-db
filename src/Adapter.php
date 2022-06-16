<?php

namespace Deck\Db;

class Adapter
{
    protected $adapter;

    public function setAdapter ($adapter) {
        $this->adapter = $adapter;
    }

}