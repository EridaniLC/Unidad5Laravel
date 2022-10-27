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
        $reservation = new Reservation();
        $reservation->date = '2022-10-27';
        $reservation->price = 1895;
        $reservation->client_id = 1;
        $reservation->save();

        $reservation = new Reservation();
        $reservation->date = '2022-11-29';
        $reservation->price = 2020;
        $reservation->client_id = 2;
        $reservation->save();

        $reservation = new Reservation();
        $reservation->date = '2022-12-30';
        $reservation->price = 2021;
        $reservation->client_id = 3;
        $reservation->save();
    }
}
