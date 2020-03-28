<?php

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
        // Users
        DB::table('users')->insert([
            'name' => 'gebruiker',
            'email' => 'gebruiker@gmail.com',
            'password' => Hash::make('123456'),
            'created_at' => Null,
            'updated_at' => Null
        ]);
        
        // Projects

        DB::table('projects')->insert([
            'titel' => 'Popkoor Zwart op Wit',
            'year' => 2018,
            'url' => 'http://www.popkoorzwartopwit.be/',
            'small-descr' => 'Zwart op Wit is een gemengd popkoor waar het accent ligt op plezier bij het samenzingen',
            'descr' => 'Zwart op Wit is een gemengd popkoor waar het accent ligt op plezier bij het samenzingen.

            Ons koor is toegankelijk voor iedereen vanaf 18 jaar, of je nu noten kan lezen of niet.
            
            Zolang je graag en toonvast zingt, ben je bij ons welkom. Ervaring is geen vereiste, passie daarentegen wel.
            
            Het zingen in groep is en blijft onze focus. Het zijn onze enthousiaste koorleden die Zwart op Wit leven inblazen! Hun inbreng is voor ons heel belangrijk, enkel zo is 1+1 meer dan 2.
            
            Onder professionele begeleiding willen we als koor groeien door ook bewust aandacht te hebben voor de zang-en ademtechniek en de basisprincipes van notenleer.
            Samen tasten we de mogelijkheden van meerstemmigheid af en laten opening voor enkele solomomenten.
            
             
            
            Music acts like a magic key, to which the most tightly closed hearts open.
            
            – Maria von Trapp
            
             
            
            Onze energie en vreugde bij het samen aanleren en oefenen van de popliedjes willen we graag af en toe delen met de buitenwereld.
            Verschillende luistermomenten zullen worden georganiseerd.
            
            Kortom: samen met plezier zingen en doelgericht naar iets toe werken terwijl we ons niveau verhogen!
            
            Repetities voor popkoor Zwart op Wit gaan elke maandag door in het Castelhof (Molenstraat 102, 1700 Dilbeek) van 20u tot 22u.
            Zich inschrijven voor Popkoor Zwart op Wit of een gratis proefles volgen kan door een mailtje te sturen naar popkoordilbeek@gmail.com
            
            Zwart op Wit zangplezier!',
            'technology' => 'Wordpress'
        ]);
    }
}
