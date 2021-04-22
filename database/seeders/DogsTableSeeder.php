<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Dogs::truncate();

        \App\Models\Dogs::create(['name' => 'Joe', 'age' => 5 ]);
        \App\Models\Dogs::create(['name' => 'Jock', 'age' => 7 ]);
        \App\Models\Dogs::create(['name' => 'Jackie', 'age' => 2 ]);
        \App\Models\Dogs::create(['name' => 'Jane', 'age' => 9 ]);
    }
}
