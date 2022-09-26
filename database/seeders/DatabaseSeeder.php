<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();


//        Listing::create([
//            'title'=>'Laravel Senior Developer',
//            'tags'=>'laravel,javascript',
//            'company'=>'Acme Corp',
//            'location'=>'Bostona',
//            'email'=>'email@emaas.com',
//            'website'=>'https://acme.com',
//            'description'=>'loremasdasddbjas bh asdja bsdn
//           asdasdasdasdasdqcsd  efwefw sdd wcwd ccd'
//        ]);
//        Listing::create([
//            'title'=>'Laravasdel Senior Developer',
//            'tags'=>'laraasdvel,javascript',
//            'company'=>'Acmasde Corp',
//            'location'=>'Boasdstona',
//            'email'=>'emaiasdl@emaas.com',
//            'website'=>'https://acasdme.com',
//            'description'=>'loremasdaczxcsddbjas bh asdja bsdn
//           asdasdasdasdasdqcsd  efwefw sdd wcwd ccd'
//        ]);
//        Listing::create([
//            'title'=>'Laravxcvel Senior Developer',
//            'tags'=>'laracvbvel,javascript',
//            'company'=>'Abvccme Corp',
//            'location'=>'Bosbcvtona',
//            'email'=>'emaivcl@emaas.com',
//            'website'=>'https://acmecx.com',
//            'description'=>'loremabvcbsdasddbjas bh asdja bsdn
//           asdasdasdasdasdqcsd  efwefw sdd wcwd ccd'
//        ]);
//        Listing::create([
//            'title'=>'Larav456el Senior Developer',
//            'tags'=>'lara75vel,javascript',
//            'company'=>'Acm8e Corp',
//            'location'=>'Bo4stona',
//            'email'=>'em2ail@emaas.com',
//            'website'=>'https://ac5me.com',
//            'description'=>'loremasd7asddbjas bh asdja bsdn
//           asdasdasdasdasdqcsd  efwefw sdd wcwd ccd'
//        ]);
//        Listing::create([
//            'title'=>'Lar0avel Senior Developer',
//            'tags'=>'larave0l,javascript',
//            'company'=>'Acm0e Corp',
//            'location'=>'Bo0stona',
//            'email'=>'email0@emaas.com',
//            'website'=>'https://acm0e.com',
//            'description'=>'loremasdasd0dbjas bh asdja bsdn
//           asdasdasdasdasdqcsd  efwefw sdd wcwd ccd'
//        ]);
    }
}
