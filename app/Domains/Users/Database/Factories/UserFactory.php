<?php

namespace MVG\Domains\Users\Database\Factories;

use MVG\Domains\Users\Models\User;
use MVG\Support\Database\ModelFactory;

/**
 * Class UserFactory
 * @package MVG\Domains\Users\Database\Factories
 */
class UserFactory extends ModelFactory
{
    /**
     * @var
     */
    protected $model = User::class;

    /**
     * @return array
     */
    protected function fields()
    {
        static $password;

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => $password ?: $password = bcrypt('secret'),
            'remember_token' => str_random(10),
        ];
    }
}
