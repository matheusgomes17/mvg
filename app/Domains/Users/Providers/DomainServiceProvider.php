<?php

namespace MVG\Domains\Users\Providers;

use MVG\Support\Domain\ServiceProvider;
use MVG\Domains\Users\Contracts\Repositories\UserRepository as UserRepositoryContract;
use MVG\Domains\Users\Database\Factories\AccountFactory;
use MVG\Domains\Users\Database\Factories\UserFactory;
use MVG\Domains\Users\Database\Migrations\CreateAccountsTable;
use MVG\Domains\Users\Database\Migrations\CreateUsersTable;
use MVG\Domains\Users\Database\Seeders\AccountSeeder;
use MVG\Domains\Users\Database\Seeders\UserSeeder;
use MVG\Domains\Users\Repositories\UserRepository;

class DomainServiceProvider extends ServiceProvider
{
    /**
     * @var string Domain "alias"
     */
    protected $alias = 'user';

    /**
     * @var bool Enable translations
     */
    protected $hasTranslations = true;

    /**
     * @var array Bind contracts to implementations
     */
    protected $bindings = [
        UserRepositoryContract::class => UserRepository::class
    ];

    /**
     * @var array Migrations of this domains
     */
    protected $migrations = [
        CreateAccountsTable::class,
        CreateUsersTable::class,
    ];

    /**
     * @var array Some Seeders
     */
    protected $seeders = [
        AccountSeeder::class,
        UserSeeder::class,
    ];

    /**
     * @var array Model factories
     */
    protected $factories = [
        AccountFactory::class,
        UserFactory::class,
    ];
}
