<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('company_name');
            $table->string('tax_number');
            $table->decimal('amount');
            $table->integer('status')->comment('1-Tamamlanmamış | 2-Başarılı | 3-Başarısız')->default(1);
            $table->uuid()->default(Str::uuid())->nullable()->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('process');
    }
};
