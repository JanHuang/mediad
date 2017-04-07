
<?php

use FastD\Model\Migration;
use Phinx\Db\Table;

class Driver extends Migration
{
    /**
     * @return Table
     */
    public function setUp()
    {
        $table = $this->table('drivers');

        $table
            ->addColumn('title', 'string', ['limit' => 60])
            ->addColumn('app_key', 'string', ['limit' => 100])
            ->addColumn('app_secret', 'string', ['limit' => 100])
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