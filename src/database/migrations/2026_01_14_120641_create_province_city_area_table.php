<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use support\Db;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Db::schema()->create('province_city_area', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('')->comment('省市县名称');
            $table->string('parent_id')->default(0)->comment('父级id');
            $table->enum('type', ['province', 'city', 'area', 'street'])->default('province')->comment('类型');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Db::schema()->dropIfExists('province_city_area');
    }
};
