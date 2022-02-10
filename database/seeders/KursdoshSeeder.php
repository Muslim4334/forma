<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\kursdosh;
class KursdoshSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        kursdosh::factory(20)->create();
    }
}
