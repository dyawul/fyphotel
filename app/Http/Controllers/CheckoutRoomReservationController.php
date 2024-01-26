<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\CheckoutRequest;
use App\Models\User;
use Auth;
use Carbon\Carbon;

class CheckoutRoomReservationController extends Controller
{
    public function chooseRoom(CheckoutRequest $request)
    {
        return view('checkout.choose_room');
    }

}
