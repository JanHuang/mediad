<?php

use FastD\Model\Migration;
use Phinx\Db\Table;

class Medias extends Migration
{
    /**
     * @return Table
     */
    public function setUp()
    {
        $table = $this->table('medias');

        $table
            ->addColumn('title', 'string')
            ->addColumn('path', 'string', ['limit' => 200])
            ->addColumn('size', 'integer')
            ->addColumn('type', 'string')
            ->addColumn('created', 'datetime')
            ->addColumn('updated', 'datetime')
        ;

        return $table;
    }
    
    /**
     * The table preinstall dataset.
     *
     * @return mixed
     */
    public function dataSet(Table $table)
    {

    }
}