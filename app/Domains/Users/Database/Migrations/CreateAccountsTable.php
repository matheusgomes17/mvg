<?php

namespace MVG\Domains\Users\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use MVG\Support\Database\Migration;

/**
 * Class CreateAccountsTable
 * @package MVG\Domains\Users\Database\Migrations
 */
class CreateAccountsTable extends Migration
{
    public function up()
    {
        $this->schema->create(config('users.accounts.table'), function (Blueprint $table) {

            $table->unsignedInteger(config('multitenant.foreign_key', 'tenant_id'));
            $table->foreign(config('multitenant.foreign_key', 'tenant_id'))
                    ->references(config('multitenant.reference', 'id'))
                    ->on(config('multitenant.tenants_table', 'tenants'));

            $table->unsignedInteger(config('users.foreign_key', 'user_id'));
            $table->foreign(config('users.foreign_key', 'user_id'))
                    ->references(config('multitenant.reference', 'id'))
                    ->on(config('users.table', 'users'));
        });
    }

    public function down()
    {
        $this->schema->drop(config('users.accounts.table'));
    }
}
