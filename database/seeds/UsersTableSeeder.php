<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 8,
                'name' => 'Ivan Ivanić',
                'email' => 'test@test.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$d5ZwESKBKjpEFVPOke9slea2Zfr/b6w3YP092lYP3FDH8eWvpOF3e',
                'college_id' => 1,
                'remember_token' => 'flXG5XA64JmQDrgdaP7fk3SXD0DLop4Sd415zHwZCFlMrV5b5pieNtZZWYzo',
                'created_at' => '2019-09-16 02:28:23',
                'updated_at' => '2019-09-16 02:28:23',
            ),
            1 => 
            array (
                'id' => 9,
                'name' => 'Filip Filipović',
                'email' => 'test2@test.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5mGiuxFm9PiTzQR6yOSpueECP6AWKhlUHKpIEB23zQs/JMXd4fRgi',
                'college_id' => 2,
                'remember_token' => 'PSOhIUC10w80gzPjk8dg1PJdjaM6688bYQQZgyfDjOKQosbkAiHr0cwn48jc',
                'created_at' => '2019-09-16 02:29:44',
                'updated_at' => '2019-09-16 02:29:44',
            ),
        ));
        
        
    }
}