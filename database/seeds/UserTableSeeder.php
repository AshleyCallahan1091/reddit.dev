<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
	    $user1 = new App\User();
	    $user1->email = 'user1@codeup.com';
	    $user1->name = 'Randi';
	    $user1->password = Hash::make('password123');
	    $user1->save();

	    $user2 = new App\User();
	    $user2->email = 'user2@codeup.com';
	    $user2->name = 'Smashley';
	    $user2->password = Hash::make('password123');
	    $user2->save();

	    $user3 = new App\User();
	    $user3->email = 'user3@codeup.com';
	    $user3->name = 'Catherine';
	    $user3->password = Hash::make('password123');
	    $user3->save();

	    $user4 = new App\User();
	    $user4->email = 'user4@codeup.com';
	    $user4->name = 'David';
	    $user4->password = Hash::make('password123');
	    $user4->save();

	    $user5 = new App\User();
	    $user5->email = 'user5@codeup.com';
	    $user5->name = 'Paul';
	    $user5->password = Hash::make('password123');
	    $user5->save();

	    $user6 = new App\User();
	    $user6->email = 'user6@codeup.com';
	    $user6->name = 'Evan';
	    $user6->password = Hash::make('password123');
	    $user6->save();

	    $user7 = new App\User();
	    $user7->email = 'user7@codeup.com';
	    $user7->name = 'Steven';
	    $user7->password = Hash::make('password123');
	    $user7->save();

	    $user8 = new App\User();
	    $user8->email = 'user8@codeup.com';
	    $user8->name = 'Anna';
	    $user8->password = Hash::make('password123');
	    $user8->save();

	    $user9 = new App\User();
	    $user9->email = 'user9@codeup.com';
	    $user9->name = 'Clarissa';
	    $user9->password = Hash::make('password123');
	    $user9->save();

	    $user10 = new App\User();
	    $user10->email = 'user10@codeup.com';
	    $user10->name = 'Julia';
	    $user10->password = Hash::make('password123');
	    $user10->save();
	}
}