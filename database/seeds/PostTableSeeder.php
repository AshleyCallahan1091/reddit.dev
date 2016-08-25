<?php

use Illuminate\Database\Seeder;
use App\User;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
	    $post1 = new App\Post();
	    $post1->title = 'Blogging is fun!';
	    $post1->url = 'mcsmashdesigns.tumblr.com';
	    $post1->content = 'Blogging helps keep me organized and motivated to continue studying the art of web development.';
	    $post1->created_by = User::all()->random()->id;
	    $post1->save();

	    $post2 = new App\Post();
	    $post2->title = 'Instagram is awesome.';
	    $post2->url = 'instagram.com/mcsmashdesigns/';
	    $post2->content = 'Pictures of studyspaces and notebooks also keeps me motivated to keep trying and continue being organized.';
	    $post2->created_by = User::all()->random()->id;
	    $post2->save();

	    $post3 = new App\Post();
	    $post3->title = 'Pinterest is a godsend.';
	    $post3->url = 'https://www.pinterest.com/mcsmashdesigns/';
	    $post3->content = 'Pinterest, like Instagram, helps me find motivational pictures to help me throughout the day.';
	    $post3->created_by = User::all()->random()->id;
	    $post3->save();

	    $post4 = new App\Post();
	    $post4->title = 'Starbucks = Life';
	    $post4->url = 'starbucks.com';
	    $post4->content = 'Sometimes, the only thing that keeps me going is copious amounts of caffeine...and pumpkin loaf. Please do not get me started on pumpkin loaf.';
	    $post4->created_by = User::all()->random()->id;
	    $post4->save();

	    $post5 = new App\Post();
	    $post5->title = 'Fall is almost here!';
	    $post5->url = 'instagram.com/mcsmashdesigns/';
	    $post5->content = 'You bet I will be spamming Instagram with pictures of fall and apple orchards. But not pumpkin spice lattes. I have class.';
	    $post5->created_by = User::all()->random()->id;
	    $post5->save();

	    $post6 = new App\Post();
	    $post6->title = 'And then winter!';
	    $post6->url = 'instagram.com/mcsmashdesigns/';
	    $post6->content = 'Omigosh I cannot wait for winter and peppermint and scarves and gloves and winter coats...even though this is Texas and I will only get to dress in cozy clothes for a day or two before it will be summer weather again.';
	    $post6->created_by = User::all()->random()->id;
	    $post6->save();

	    $post7 = new App\Post();
	    $post7->title = 'No offense to summer...';
	    $post7->url = 'instagram.com/mcsmashdesigns/';
	    $post7->content = 'But summer is the absolute worst. It is just hot and gross and sweaty...nothing magical about feeling like you walked through a swimming pool just to get to your car twenty feet away.';
	    $post7->created_by = User::all()->random()->id;
	    $post7->save();

	    $post8 = new App\Post();
	    $post8->title = 'Spring though...';
	    $post8->url = 'instagram.com/mcsmashdesigns/';
	    $post8->content = 'Spring is magical. Flowers blooming, butterflies flittering about...my favorite is waking up to the sounds of birds chirping or light rainfall. So peaceful and romantic.';
	    $post8->created_by = User::all()->random()->id;
	    $post8->save();

	    $post9 = new App\Post();
	    $post9->title = 'Random acts of kindness';
	    $post9->url = 'instagram.com/mcsmashdesigns/';
	    $post9->content = 'So I was waiting in line at Starbucks and once I got to the window to pay, I was so surprised when the barista said my drink was already paid for! Totally made my day and I paid it forward by paying for the guy a couple cars behind me since the guy behind me was already paid for too!';
	    $post9->created_by = User::all()->random()->id;
	    $post9->save();

	    $post10 = new App\Post();
	    $post10->title = 'Declan is just too cute!';
	    $post10->url = 'instagram.com/mcsmashdesigns/';
	    $post10->content = 'He has learned the art of high fives and giggles uncontrollably when someone gives him a high five!';
	    $post10->created_by = User::all()->random()->id;
	    $post10->save();
	}
}