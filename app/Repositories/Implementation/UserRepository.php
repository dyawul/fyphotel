<?php

namespace App\Repositories\Implementation;

use App\Models\Customer;
use App\Models\User;
use App\Repositories\Interface\UserRepositoryInterface;
use Illuminate\Support\Str;

class UserRepository implements UserRepositoryInterface
{
    public function get($request)
    {
        $users = User::with('user')->orderBy('id', 'DESC');

        if (!empty($request->q)) {
            $users = $users->where('name', 'Like', '%' . $request->q . '%')
                ->orWhere('id', 'Like', '%' . $request->q . '%');
        }

        $users = $users->paginate(8);
        $users->appends($request->all());
        return $users;
    }
    public function count($request)
    {
        $usersCount = Customer::with('user')->orderBy('id', 'DESC');

        if (!empty($request->q)) {
            $usersCount = $usersCount->where('name', 'Like', '%' . $request->q . '%')
                ->orWhere('id', 'Like', '%' . $request->q . '%');
        }

        $usersCount = $usersCount->count();
        return $usersCount;
    }
}