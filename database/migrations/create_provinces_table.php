<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvincesTable extends Migration
{
    protected function getTable()
    {
        return config('kp_country.table_names.province', 'provinces');
    }

    public function up()
    {
        $tableName = $this->getTable();

        if (! Schema::hasTable($tableName)) {
            Schema::create($tableName, function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->foreignId('country_id')->constrained();
                $table->string('code', 10)->unique();
                $table->string('name')->index();

                if (config('kp_country.order_no_column', true)) {
                    // additional column to enable you to set which provinces shown first
                    $table->unsignedSmallInteger('order_no')->default(999);
                }

                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists($this->getTable());
    }
}
