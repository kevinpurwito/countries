<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    protected function getTable()
    {
        return config('kp_country.table_names.country', 'countries');
    }

    public function up()
    {
        $tableName = $this->getTable();

        if (! Schema::hasTable($tableName)) {
            Schema::create($tableName, function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name')->unique();
                $table->string('code', 3)->index(); // phone code, e.g. 62 for Indonesia
                $table->string('iso2', 2)->unique(); // ISO2 code, e.g. ID for Indonesia
                $table->string('iso3', 3)->unique(); // ISO3 code, e.g. IDN for Indonesia

                if (config('kp_country.popular_column', true)) {
                    // additional column to enable you to load and show popular countries first
                    $table->boolean('popular')->default(false);
                }

                if (config('kp_country.order_no_column', true)) {
                    // additional column to enable you to set which countries shown first
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
