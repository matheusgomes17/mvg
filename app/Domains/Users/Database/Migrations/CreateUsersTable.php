<?php

namespace MVG\Domains\Users\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use MVG\Support\Database\Migration;

/**
 * Class CreateUsersTable
 * @package MVG\Domains\Users\Database\Migrations
 */
class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->schema->create(config('users.table', 'users'), function (Blueprint $table) {
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->unsignedInteger(config('multitenant.foreign_key', 'tenant_id'));
            $table->foreign(config('multitenant.foreign_key', 'tenant_id'))
                    ->references(config('multitenant.reference', 'id'))
                    ->on(config('multitenant.table', 'tenants'))
                    ->onDelete('cascade');

            $table->unsignedInteger(config('users.accounts.foreign_key', 'user_id'));
            $table->foreign(config('users.accounts.foreign_key', 'user_id'))
                    ->references(config('users.accounts.reference', 'id'))
                    ->on(config('users.accounts.table', 'users'))
                    ->onDelete('cascade');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->schema->drop(config('users.table', 'users'));
    }
}
