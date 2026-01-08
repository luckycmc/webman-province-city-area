<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateProvinceCityAreaTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table('province_city_area');
        $table->addColumn('name', 'string', ['comment' => '名称', 'default' => ''])
            ->addColumn('parent_id', 'integer', ['comment' => '父级ID', 'default' => 0])
            ->addColumn('type', 'enum', ['values' => ['province', 'city', 'area'], 'comment' => '类型', 'default' => 'province'])
            ->create();
    }
}
