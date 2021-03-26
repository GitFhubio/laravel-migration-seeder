<?php

use Illuminate\Database\Seeder;
use App\Team;
use Faker\Generator as Faker;
class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0;$i<10;$i++) {
            $team = new Team();
            $team->name=$faker->name();
            $team->city=$faker->name();
            $team->colours=$faker->name();
            $team->stadium=$faker->name();
            $team->flag ='https://via.placeholder.com/90';
            $team->save();
        }
        // $team=new Team();
        // $team->name='Inter';
        // $team->colours='nerazzurri';
        // $team->city='Milano';
        // $team->stadium='San Siro';
        // $team->flag='https://images-na.ssl-images-amazon.com/images/I/61P-S6gu0CL._AC_SL1500_.jpg';
        // $team->save();

    //     $teams=[[
    //  'name'=>'Roma',
    //  'colours'=>'giallorossi',
    //  'city'=>'Roma',
    //  'stadium'=>'Olimpico',
    // //  'trophies'=>'18',
    // //  'foundation_date'=>'1908-03-08',
    //  'flag'=>'https://www.bandiere.it/uploads/2019-11-21/1200-0/citta-di-roma.jpg'
    // //  'fans'=>'80000',
    // //  'ridicolousness'=>'0'
    // ],
    //  [
    //     'name'=>'Juve',
    //     'colours'=>'bianconeri',
    //     'city'=>'Torino',
    //     'stadium'=>'Juventus Stadium',
    //     // 'trophies'=>'0',
    //     // 'foundation_date'=>'1897-03-08',
    //     'flag'=>'https://images-na.ssl-images-amazon.com/images/I/61P-S6gu0CL._AC_SL1500_.jpg'
    //     // 'fans'=>'90000',
    //     // 'ridicolousness'=>'10'
    //     ]];

    //     foreach ($teams as $team) {
    //         $team=new Team();
    //         $team->name=$team['name'];
    //         $team->colours=$team['colours'];
    //         $team->city=$team['city'];
    //         $team->stadium=$team['stadium'];
    //         // $team->trophies=$team['trophies'];
    //         // $team->foundation_date=$team['foundation_date'];
    //         $team->flag=$team['flag'];
    //         // $team->fans=$team['fans'];
    //         // $team->ridicolousness=$team['ridicolousness'];
    //         $team->save();
    //         // }
    //     }
    }
}
