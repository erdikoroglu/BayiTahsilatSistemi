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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('tax_number')->unique();
            $table->string('logo_code')->unique();
            $table->string('address')->nullable();
            $table->string('pay_logo')->nullable();
            $table->string('receipt_logo')->nullable();
            $table->string('company_name');
            $table->boolean('admin')->default(false);
            $table->boolean('installment')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->uuid()->default(\Ramsey\Uuid\Uuid::uuid4())->nullable()->unique();
            $table->rememberToken();
            $table->timestamps();
        });

        $anka = new \App\Models\User();
        $anka->name = "Oğuzhan Çoşkun";
        $anka->email = "tahsilat1@ankamuh.com";
        $anka->phone = "0216 616 1616";
        $anka->company_name = "Anka Mühendislik";
        $anka->tax_number = "0690342046";
        $anka->admin = true;
        $anka->installment = true;
        $anka->logo_code = "000.000.000";
        $anka->address = "Ferhatpaşa / Ataşehir";
        $anka->password = bcrypt("123123123");
        $anka->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
