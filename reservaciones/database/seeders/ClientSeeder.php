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

        $client->name="Eridani Lucero";
        $client->phone_number = "6121940196";
        $client->email="eridani@gmail.com";
        $client->save();

        $client = new Client();

        $client->name="Nani Cota";
        $client->phone_number = "6121940194";
        $client->email="nani@gmail.com";
        $client->save();
    }
}
