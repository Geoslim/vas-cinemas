<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        DB::table('cinemas')->insert([
            'name' => 'Victoria Island',
            'slug' => Str::slug('Victoria Island', '-'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('cinemas')->insert([
            'name' => 'Ibeju Lekki',
            'slug' => Str::slug('Ibeju Lekki', '-'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('cinemas')->insert([
            'name' => 'Ojodu Berger',
            'slug' => Str::slug('Ojodu Berger', '-'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('show_times')->insert([
            'showtime' => '11:45 am',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('show_times')->insert([
            'showtime' => '12:30 pm',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('show_times')->insert([
            'showtime' => '11:45 pm',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('show_times')->insert([
            'showtime' => '1:50 pm',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('show_times')->insert([
            'showtime' => '2:00 pm',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('show_times')->insert([
            'showtime' => '3:35 pm',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('show_times')->insert([
            'showtime' => '4:45 pm',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('show_times')->insert([
            'showtime' => '5:30 pm',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('show_times')->insert([
            'showtime' => '6:45 pm',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('show_times')->insert([
            'showtime' => '7:05 pm',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('show_times')->insert([
            'showtime' => '8:00 pm',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
