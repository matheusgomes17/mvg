<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->integerUnsigned(config('multitenant.tenants_collumn', 'tenant_id'));
            $table->foreign(config('multitenant.tenants_collumn', 'tenant_id'))
                    ->references(config('multitenant.tenants_reference', 'id'))
                    ->on(config('multitenant.tenants_table', 'tenants'));

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
