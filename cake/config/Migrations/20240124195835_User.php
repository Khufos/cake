<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class User extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {

       $table = $this->table('users');
       $table->addColumn('firstname','string',['limit'=> 100,'null' => true]);
       $table->addColumn('lastName','string',['limit'=> 100,'null' => true]);
       $table->addColumn('email','string',['limit'=> 100,'null' => true]);
       $table->addColumn('password','string',['limit'=> 255, 'null' => false]);
       $table->addColumn('create_at','timestamp',['default'=>'CURRENT_TIMESTAMP']);
       $table->addColumn('update_at','timestamp',['default'=>'CURRENT_TIMESTAMP', 'update'=>'CURRENT_TIMESTAMP']);
       $table->addIndex('email',['unique'=> true]);
       $table->create();

    }
}
