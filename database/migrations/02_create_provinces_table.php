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
                $table->foreignId('country_id')->constrained()->onUpdate('CASCADE')->onDelete('CASCADE');
                $table->string('code', 5)->index()->nullable(); // Kode Kemendagri, ex: 31 for Jakarta
                $table->string('iso2', 5)->unique(); // ISO 3166-2:ID code, ex: ID-JK for Jakarta
                $table->string('name');

                if (config('kp_country.ordinal_column', true)) {
                    // additional column to enable you to set which provinces shown first
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
