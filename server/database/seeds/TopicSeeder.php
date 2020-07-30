<?php

use Illuminate\Database\Seeder;
use App\Models\Topic;
use Illuminate\Support\Str;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::create([
        	'title' => Str::random(10),
        	'publish_flg' => 0,
        	'subject_id' => Str::random([1, 2, 3, 4, 5, 6])
        ])
    }
}
 