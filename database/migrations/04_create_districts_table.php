<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictsTable extends Migration
{
    protected function getTable()
    {
        return config('kp_country.table_names.district', 'districts');
    }

    public function up()
    {
        $tableName = $this->getTable();

        if (! Schema::hasTable($tableName)) {
            Schema::create($tableName, function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->foreignId('country_id')->constrained()->onUpdate('CASCADE')->onDelete('CASCADE');
                $table->foreignId('province_id')->constrained()->onUpdate('CASCADE')->onDelete('CASCADE');
                $table->foreignId('city_id')->constrained()->onUpdate('CASCADE')->onDelete('CASCADE');
                $table->string('code', 8)->index()->nullable();
                $table->string('name');

                if (config('kp_country.ordinal_column', true)) {
                    // additional column to enable you to set which districts shown first
                    $table->unsignedSmallInteger('ordinal')->default(999);
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
