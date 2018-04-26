<?php

use Illuminate\Database\Seeder;

use App\Poem;

class PoemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Poem::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few poems in our database:
        for ($i = 0; $i < 50; $i++) {
            Poem::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }
    }
}
