<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Http\Requests\CheckoutRequest;
use App\Http\Requests\ChooseRoomRequest;
use App\Models\Checkout;
use App\Models\User;
use App\Models\Room;
use App\Repositories\Interface\ReservationRepositoryInterface;

use Auth;
use Carbon\Carbon;

class CheckoutRoomReservationController extends Controller
{
    private $reservationRepository;
    public function __construct(ReservationRepositoryInterface $reservationRepository)
    {
        $this->reservationRepository = $reservationRepository;
    }
    public function chooseRoom(ChooseRoomRequest $request)
    {
        $stayFrom = $request->check_in;
        $stayUntil = $request->check_out;

        $occupiedRoomId = $this->getOccupiedRoomID($request->check_in, $request->check_out);

        $rooms = $this->reservationRepository->getUnocuppiedroom($request, $occupiedRoomId);
        $roomsCount = $this->reservationRepository->countUnocuppiedroom($request, $occupiedRoomId);

        return view('checkout.choose_room', compact(
            'rooms',
            'stayFrom',
            'stayUntil',
            'roomsCount'
        ));
    }

    private function getOccupiedRoomID($stayFrom, $stayUntil)
    {
        return Checkout::where([['check_in', '<=', $stayFrom], ['check_out', '>=', $stayUntil]])
            ->orWhere([['check_in', '>=', $stayFrom], ['check_in', '<=', $stayUntil]])
            ->orWhere([['check_out', '>=', $stayFrom], ['check_out', '<=', $stayUntil]])
            ->pluck('room_id');
    }

}
