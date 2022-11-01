<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $reservation = new Reservation();
        $reservation->date = '2022-11-30';
        $reservation->price = 1895.00;
        $reservation->client_id = 1;
        $reservation->save();

        $reservation = new Reservation();
        $reservation->date = '2022-12-01';
        $reservation->price = 1895.00;
        $reservation->client_id = 1;
        $reservation->save();

        $reservation = new Reservation();
        $reservation->date = '2022-05-19';
        $reservation->price = 2895.00;
        $reservation->client_id = 2;
        $reservation->save();
    }
}
