<?php

use Phinx\Migration\AbstractMigration;

class CreateFilesTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $files = $this->table('files', ['id' => false, 'primary_key' => 'id']);
        $files
            ->addColumn('id',           'uuid')
            ->addColumn('owner_id',     'uuid')
            ->addColumn('project_id',   'uuid')
            ->addColumn('name',         'string')
            ->addColumn('updated_at',   'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('created_at',   'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->create();
    }
}
