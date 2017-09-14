<?php

namespace MVG\Domains\Users\Database\Factories;

use MVG\Domains\Users\Models\Account;
use MVG\Support\Database\ModelFactory;

/**
 * Class AccountFactory
 * @package MVG\Domains\Users\Database\Factories
 */
class AccountFactory extends ModelFactory
{
    /**
     * @var
     */
    protected $model = Account::class;

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
