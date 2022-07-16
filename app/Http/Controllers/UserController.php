<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;

class UserController extends Controller
{
    public function fetchUserList()
    {
        $users = User::join('user_domicilio', 'users.id', '=', 'user_domicilio.user_id')
                    ->get();

        $userArray = array();
        foreach($users as $user) {
            $dbDate = Carbon::parse($user->fecha_nacimento);
            array_push($userArray, Carbon::now()->diffInYears($dbDate));
        }

        $totalUser = $users->map(function ($item, $key){

            $birthday = Carbon::parse($item->fecha_nacimento);
            $age = Carbon::now()->diffInYears($birthday);

            return [
                'id' => $item->id,
                'name' => $item->name,
                'email' => $item->email,
                'domicilio' => $item->domicilio,
                'numero_exterior' => $item->numero_exterior,
                'colonia' => $item->colonia,
                'cp' => $item->cp,
                'ciudad' => $item->ciudad,
                'fecha_nacimento' => $birthday->format('Y-m-d'),
                'email_verified_at' => $item->email_verified_at,
                'remember_token' => $item->remember_token,
                'created_at' => $item->created_at,
                'updated_at' => $item->updated_at,
                'edad' => $age
            ];
        });


        return response()->json($totalUser, 200);
    }
}
