<?php

use Illuminate\Database\Seeder;
use App\Missing;
use Faker\Generator as Faker;
class MissingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0;$i<10;$i++) {
            $missing = new Missing();
            $missing->birth_date=$faker->date('Y-m-d');
            $missing->name=$faker->word();
            $missing->img=$faker->url();
            $missing->years=$faker->numberBetween(10, 20);
            $missing->floatdiprova=$faker->numberBetween(10, 20) * 0.1;
            $missing->save();
        }
    }
}

// il risultato di questo test è che se vado a vedere cliccando su  FakerGenerator là trovo tutte le categorie che
// ha e che posso usare per riempire i campi,isbn password,a limite posso usare un provider esterno ma non ne vale la pena
