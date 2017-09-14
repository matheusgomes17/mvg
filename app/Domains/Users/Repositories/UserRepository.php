<?php

namespace SKT\Domains\Users\Repositories;

use Illuminate\Database\Eloquent\Model;
use SKT\Domains\Users\Contracts\Repositories\UserRepository as UserRepositoyContract;
use SKT\Domains\Users\Models\User;
use SKT\Support\Domain\Repository;

/**
 * Class UserRepository
 * @package SKT\Domains\Users\Repositories
 */
class UserRepository extends Repository implements UserRepositoyContract
{
    protected $model = User::class;

    protected function fillModel(Model $model, array $data = [])
    {
        if (array_key_exists('password', $data)) {
            $data['password'] = bcrypt($data['password']);
        }

        parent::fillModel($model, $data);
    }
}