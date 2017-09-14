<?php

namespace MVG\Domains\MultiTenant\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use MVG\Support\Database\Migration;

/**
 * Class CreateTenantsTable
 * @package MVG\Domains\MultiTenant\Database\Migrations
 */
class CreateTenantsTable extends Migration
{
    public function up()
    {
        $this->schema->create(config('multitenant.table'), function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            
        });
    }

    public function down()
    {
        $this->schema->drop(config('multitenant.table'));
    }
}
