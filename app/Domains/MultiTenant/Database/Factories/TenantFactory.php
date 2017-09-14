<?php

namespace MVG\Domains\MultiTenant\Database\Factories;

use MVG\Domains\MultiTenant\Models\Tenant;
use MVG\Support\Database\ModelFactory;

/**
 * Class TenantFactory
 * @package MVG\Domains\MultiTenant\Database\Factories
 */
class TenantFactory extends ModelFactory
{
    /**
     * @var
     */
    protected $model = Tenant::class;

    /**
     * @return array
     */
    protected function fields()
    {
        return [
            //
        ];
    }
}
