<?php

namespace SON\Db\QueryBuilder;

interface Strategy
{
    public function table(string $table);

    public function select($collumns = "*");

    public function getQuery();

}