<?php

namespace SON\Db\Builder;

class SqlDirector implements DirectorInterface
{
    protected $builder;

    public function __construct(BuilderInterface $builder = null)
    {
        $this->builder = $builder;
    }

    public function getSqlAll()
    {
        $this->builder->setTable('users');

        return $this->builder->getAllString();
    }
}