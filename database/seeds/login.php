<?php

use Illuminate\Database\Seeder;

class login extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('login')->insert([[
            'email' => "soumenbanerjeenik@gmail.com",
            'username' => "soumen1234",
			'password' => md5("hello12345")
        ],[
            'email' => "neilneail@gmail.com",
            'username' => "testhello0000",
			'password' => md5("hello12345")
        ]]);
    }
}
