<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Pudge',
                'address' => 'Calape',
                'phone' => '12345678910',
                'capitalization' => 100000,
                'loan' => 10000
            ],
            [
                'name' => 'Axe',
                'address' => 'Tubigon',
                'phone' => '10987654321',
                'capitalization' => 70000,
                'loan' => 40000
            ],
            [
                'name' => 'Drow',
                'address' => 'Clarin',
                'phone' => '90876543211',
                'capitalization' => 90000,
                'loan' => 35000
            ],
        ];
        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
