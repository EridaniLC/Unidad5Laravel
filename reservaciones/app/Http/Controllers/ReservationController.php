<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {                                            
        return Reservation::with('client')->get();
    }

    public function show($id)
    {                                            
        return Reservation::with('client')->find($id);
    }
}
