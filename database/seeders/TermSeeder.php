<?php

namespace Database\Seeders;

use App\Models\Terms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Terms::create(['name'=>'Term 1']);
        Terms::create(['name'=>'Term 2']);
        Terms::create(['name'=>'Term 3']);
        Terms::create(['name'=>'Term 4']);
    }
}
