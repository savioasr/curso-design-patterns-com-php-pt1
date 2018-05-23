<?php

namespace SON\Db\QueryBuilder;

class Sql implements Strategy
{
    public function table(string $table)
    {
        $this->table = $table;

        return $this;
    }

    public function select($collumns = "*")
    {
        if( is_array($collumns) ) {
            $collumns = implode(", ", $collumns);
        }

        $this->sql  = sprintf('SELECT %s FROM %s;', $collumns, $this->table);

        return $this;
    }

    public function getQuery()
    {
        return $this->sql;
    }
}