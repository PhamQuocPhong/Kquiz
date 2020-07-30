<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;
use Illuminate\Support\Str;


class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Subject::create([
			'name' => 'Toán',
			'description' => 'Môn toán'
		]);

		Subject::create([
			'name' => 'Lí',
			'description' => 'Môn vật lí'
		]);

		Subject::create([
			'name' => 'Hóa',
			'description' => 'Môn hóa học'
		]);
		Subject::create([
			'name' => 'Anh',
			'description' => 'Môn tiếng anh'
		]);
		Subject::create([
			'name' => 'Sinh',
			'description' => 'Môn sinh học'
		]);
		Subject::create([
			'name' => 'Sử',
			'description' => 'Môn lịch sử'
		]);
    }
}
