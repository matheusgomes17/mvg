<?php

namespace MVG\Domains\Users\Database\Seeders;

use Illuminate\Database\Seeder;
use MVG\Domains\Users\Models\Account;

/**
 * Class AccountSeeder
 * @package MVG\Domains\Users\Seeders
 */
class AccountSeeder extends Seeder
{
    public function run()
    {
        factory(Account::class)->create(['tenant_id' => '1', 'user_id' => '1']);
        factory(Account::class)->create(['tenant_id' => '1', 'user_id' => '2']);
        factory(Account::class)->create(['tenant_id' => '2', 'user_id' => '3']);
        factory(Account::class)->create(['tenant_id' => '2', 'user_id' => '4']);
    }
}
