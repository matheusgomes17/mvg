<?php

namespace MVG\Domains\Users\Database\Seeders;

use Illuminate\Database\Seeder;
use MVG\Domains\Users\Models\User;

/**
 * Class UserSeeder
 * @package MVG\Domains\Users\Seeders
 */
class UserSeeder extends Seeder
{
    public function run()
    {
        factory(User::class)->create(['tenant_id' => '1', 'account_id' => '1']);
        factory(User::class)->create(['tenant_id' => '1', 'account_id' => '2']);
        factory(User::class)->create(['tenant_id' => '2', 'account_id' => '3']);
        factory(User::class)->create(['tenant_id' => '2', 'account_id' => '4']);
    }
}
