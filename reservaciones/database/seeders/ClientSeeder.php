<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();

        $client->name = "Eridani Lucero";
        $client->phone_number = "6122345367";
        $client->email = "eridani@uabcs.mx";
        $client->save();


        $client = new Client();

        $client->name = "Nani Lucero";
        $client->phone_number = "6122345367";
        $client->email = "nani@uabcs.mx";
        $client->save();
    }
}











