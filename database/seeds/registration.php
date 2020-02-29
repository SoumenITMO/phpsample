<?php

use Illuminate\Database\Seeder;

class registration extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('registration')->insert([[
            'fname' => "Soumen",
            'lname' => "Banerjee",
			'phone' => "+91568978545",
			'address' => "Goa, Porvarim",
        ],[
            'fname' => "Neil",
            'lname' => "Patrick",
			'phone' => "+9188978545",
			'address' => "Goa, Panjim",
        ]]);
    }
}
