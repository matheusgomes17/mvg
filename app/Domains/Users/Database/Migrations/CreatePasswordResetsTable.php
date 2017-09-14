<?php

namespace MVG\Domains\Users\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use MVG\Support\Database\Migration;

/**
 * Class CreatePasswordResetsTable
 * @package MVG\Domains\Users\Database\Migrations
 */
class CreatePasswordResetsTable extends Migration
{
    public function up()
    {
        $this->schema->create(config('users.password_resets_table', 'password_resets'), function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    public function down()
    {
        $this->schema->drop(config('users.password_resets_table', 'password_resets'));
    }
}
