<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{

    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        App\Section::truncate();
        
        
        App\Section::create([
            'title' => 'Over',
            'body' => 'PRJCT Amsterdam is een nieuw barokensemble rondom countertenor Maarten Engeltjes en is een combinatie van een vaste kern van uitmuntende, recent afgestudeerde en in Nederland woonachtige barokmusici die een eigen muzikale en vooraanstaande visie hebben, samen met vooraanstaande internationale barokmusici. Het ensemble wordt geleid door een concertmeester van internationale allure die per project gekozen wordt. Zo wordt een omgeving gecreëerd waarin jong en oud elkaar inspireren.

            Engeltjes is de nummer vijf van de meest gevraagde countertenoren ter wereld en studeerde cum laude af aan het Koninklijk Conservatorium in Den Haag, maar pas toen hij met de wereldtop mocht gaan zingen, ontdekte hij dat hij nog veel te leren had. Het kunstvakonderwijs kan in een dergelijk leerproces niet voorzien. Engeltjes wil daarom zijn naam en faam inzetten om jonge musici in een vroeg stadium de kans te bieden om samen met de wereldtop te musiceren , op een manier die past bij hun generatie.',
        ]);

        App\Section::create([
            'title' => 'Donaties',
            'body' => 'PRJCT Amsterdam kan uw steun goed gebruiken. Wilt u een donatie doen? Dan kunt u contact opnemen met maartenengeltjes@prjct.amsterdam met als onderwerp "donatie"',
        ]);

    }
}
