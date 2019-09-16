<?php

use Illuminate\Database\Seeder;

class ThreadsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('threads')->delete();
        
        \DB::table('threads')->insert(array (
            0 => 
            array (
                'id' => 18,
                'title' => 'Poboljšanje aktivnosti na predavanju',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'author_id' => 9,
                'created_at' => '2019-09-16 02:31:27',
                'updated_at' => '2019-09-16 02:31:27',
            ),
            1 => 
            array (
                'id' => 19,
                'title' => 'Razmjena studenata',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'author_id' => 9,
                'created_at' => '2019-09-16 02:32:17',
                'updated_at' => '2019-09-16 02:32:17',
            ),
            2 => 
            array (
                'id' => 20,
                'title' => 'Matematika 2',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'author_id' => 9,
                'created_at' => '2019-09-16 02:32:53',
                'updated_at' => '2019-09-16 02:32:53',
            ),
            3 => 
            array (
                'id' => 21,
                'title' => 'C ili C++ ?',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'author_id' => 9,
                'created_at' => '2019-09-16 02:33:35',
                'updated_at' => '2019-09-16 02:33:35',
            ),
            4 => 
            array (
                'id' => 22,
                'title' => 'Laravel 6.0',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'author_id' => 9,
                'created_at' => '2019-09-16 02:34:37',
                'updated_at' => '2019-09-16 02:34:37',
            ),
            5 => 
            array (
                'id' => 23,
                'title' => 'WEB programiranje',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'author_id' => 8,
                'created_at' => '2019-09-16 02:36:05',
                'updated_at' => '2019-09-16 02:36:05',
            ),
            6 => 
            array (
                'id' => 24,
                'title' => 'NodeJS',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'author_id' => 8,
                'created_at' => '2019-09-16 02:36:35',
                'updated_at' => '2019-09-16 02:36:35',
            ),
            7 => 
            array (
                'id' => 25,
                'title' => 'Najbolji framework za PHP programski jezik ?',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'author_id' => 8,
                'created_at' => '2019-09-16 02:37:56',
                'updated_at' => '2019-09-16 02:37:56',
            ),
        ));
        
        
    }
}