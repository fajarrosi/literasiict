<?php

use Illuminate\Database\Seeder;

class JawabanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Jawaban::create([
       'display' => 'Sangat Tidak Baik',
       'level' => '0',
		]);

		App\Jawaban::create([
       'display' => 'Tidak Baik',
       'level' => '1',
		]);

		App\Jawaban::create([
       'display' => 'Kurang Baik',
       'level' => '2',
		]);

		App\Jawaban::create([
       'display' => 'Baik',
       'level' => '3',
		]);

		App\Jawaban::create([
       'display' => 'Sangat Baik',
       'level' => '4',
		]);
    }
}
