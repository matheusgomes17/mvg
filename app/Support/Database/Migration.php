<?php

namespace MVG\Support\Database;

use Illuminate\Database\Migrations\Migration as LaravelMigration;

/**
 * Abstract Class Migration
 * @package MVG\Support\Database
 */
abstract class Migration extends LaravelMigration
{
    /**
     * @var \Illuminate\Database\Schema\Builder
     */
    protected $schema;

    public function __construct()
    {
        $this->schema = app('db')->connection()->getSchemaBuilder();
    }

    /**
     * Run the migrations.
     */
    abstract function up();

    /**
     * Reverse the migrations.
     */
    abstract function down();
}