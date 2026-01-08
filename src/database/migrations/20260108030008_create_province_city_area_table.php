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
        $table->addColumn('name','string',['default'=>'','comment'=>'名称'])
            ->addColumn('parent_id', 'string', ['default' => 0, 'comment' => '父级id'])
            ->addColumn('type', 'enum', ['values' => ['province', 'city', 'area'], 'default' => 'province', 'comment' => '类型'])
            ->create();
    }
}
