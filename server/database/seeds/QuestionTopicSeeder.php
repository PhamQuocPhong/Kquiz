<?php

use Illuminate\Database\Seeder;
use App\Models\QuestionTopic;
use Illuminate\Support\Str;

class QuestionTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {   
    //     $this->truncateQuestionTopics();
    //     $faker = Faker::create();

    //     foreach (range(1, 50) as $i) {
    //         DB::table('question_topics')->insert([
    //             [
    //                 'topic_id' => $i,
    //                 'question_id' => $i * ,
    //                 'user_create' => 1
    //             ]
    //         ]);
    //     }
    // }


    // public function truncateQuestionTopics()
    // {
    //     Schema::disableForeignKeyConstraints();
    //     DB::table('question_topics')->truncate();
    //     Schema::enableForeignKeyConstraints();
    // }
}
