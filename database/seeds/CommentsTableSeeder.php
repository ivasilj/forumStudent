<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 29,
                'body' => 'Slažem se',
                'user_id' => 9,
                'thread_id' => 18,
                'created_at' => '2019-09-16 02:31:39',
                'updated_at' => '2019-09-16 02:31:39',
            ),
            1 => 
            array (
                'id' => 30,
                'body' => 'Odlična ideja',
                'user_id' => 9,
                'thread_id' => 18,
                'created_at' => '2019-09-16 02:31:45',
                'updated_at' => '2019-09-16 02:31:45',
            ),
            2 => 
            array (
                'id' => 31,
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'user_id' => 9,
                'thread_id' => 20,
                'created_at' => '2019-09-16 02:33:04',
                'updated_at' => '2019-09-16 02:33:04',
            ),
            3 => 
            array (
                'id' => 32,
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'user_id' => 9,
                'thread_id' => 19,
                'created_at' => '2019-09-16 02:34:04',
                'updated_at' => '2019-09-16 02:34:04',
            ),
            4 => 
            array (
                'id' => 33,
                'body' => 'Nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'user_id' => 9,
                'thread_id' => 20,
                'created_at' => '2019-09-16 02:34:53',
                'updated_at' => '2019-09-16 02:34:53',
            ),
            5 => 
            array (
                'id' => 34,
                'body' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'user_id' => 8,
                'thread_id' => 22,
                'created_at' => '2019-09-16 02:35:25',
                'updated_at' => '2019-09-16 02:35:25',
            ),
            6 => 
            array (
                'id' => 35,
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'user_id' => 8,
                'thread_id' => 18,
                'created_at' => '2019-09-16 02:35:39',
                'updated_at' => '2019-09-16 02:35:39',
            ),
            7 => 
            array (
                'id' => 36,
                'body' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'user_id' => 8,
                'thread_id' => 23,
                'created_at' => '2019-09-16 02:36:12',
                'updated_at' => '2019-09-16 02:36:12',
            ),
            8 => 
            array (
                'id' => 37,
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'user_id' => 8,
                'thread_id' => 19,
                'created_at' => '2019-09-16 02:36:44',
                'updated_at' => '2019-09-16 02:36:44',
            ),
            9 => 
            array (
                'id' => 38,
                'body' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'user_id' => 8,
                'thread_id' => 20,
                'created_at' => '2019-09-16 02:37:00',
                'updated_at' => '2019-09-16 02:37:00',
            ),
            10 => 
            array (
                'id' => 39,
                'body' => 'Vel eros donec ac odio tempor orci dapibus ultrices in. Euismod in pellentesque massa placerat.',
                'user_id' => 9,
                'thread_id' => 25,
                'created_at' => '2019-09-16 02:38:29',
                'updated_at' => '2019-09-16 02:38:29',
            ),
            11 => 
            array (
                'id' => 40,
                'body' => 'Consectetur adipiscing elit duis tristique sollicitudin. Fringilla est ullamcorper eget nulla',
                'user_id' => 9,
                'thread_id' => 25,
                'created_at' => '2019-09-16 02:38:41',
                'updated_at' => '2019-09-16 02:38:41',
            ),
            12 => 
            array (
                'id' => 41,
                'body' => 'Consectetur adipiscing elit duis tristique sollicitudin. Fringilla est ullamcorper eget nulla',
                'user_id' => 9,
                'thread_id' => 23,
                'created_at' => '2019-09-16 02:38:52',
                'updated_at' => '2019-09-16 02:38:52',
            ),
        ));
        
        
    }
}