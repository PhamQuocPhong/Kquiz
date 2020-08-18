<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $this->truncateQuestions();
        $faker = Faker::create();

        foreach (range(1, 50) as $i) {
            DB::table('questions')->insert([
                [
                    'title' => $faker->name,
                    'subject_id' => Str::random([1, 2, 3, 4, 5, 6])
                ]
            ]);
        }
    }


    public function truncateQuestions()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('questions')->truncate();
        Schema::enableForeignKeyConstraints();
    }
}
 