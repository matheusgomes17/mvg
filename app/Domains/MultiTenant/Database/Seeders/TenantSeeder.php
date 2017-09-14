<?php

namespace MVG\Domains\MultiTenant\Database\Seeders;

use Illuminate\Database\Seeder;
use MVG\Domains\MultiTenant\Models\Tenant;

/**
 * Class TenantSeeder
 * @package MVG\Domains\MultiTenant\Seeders
 */
class TenantSeeder extends Seeder
{
    public function run()
    {
        factory(Tenant::class, 2)->create();
    }
}
