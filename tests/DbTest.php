<?php

namespace SON\Db;

class DbTest extends \PHPUnit\Framework\TestCase
{
    public function testTestarClasse()
    {
        $db = new Db;

        $this->assertInstanceOf('SON\Db\Db', $db);
    }
}