
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