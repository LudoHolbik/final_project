<?php

use Illuminate\Database\Seeder;
use App\Place;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

         /*------------------
        BEST VIEWS CATEGORY
        -------------------*/

        Place::create([
            'name' => 'Metronome',
            'type'=> 'Best Views',
            'address' => 'Nábřeží Edvarda Beneše, 118 00 Praha 7',	 
            'description' =>'A favourite of visitors and locals alike, the top of the Letenske sady with the Metronome statue is great for two reasons: first, the views of the rivers are impressive; second, it\'s a great place to just come and hang out, have a drink or experience a little romantic moment with the one you love.',  	 
            'telephone' =>	 'n/a',
            'wifi' =>	 false,
            'opening_hours' =>	'0:00 - 24:00',	 
            'gps_lat' => 50.094618,	 
            'gps_lgt' => 14.416087,
        ]);
        
        Place::create([
            'name' => 'Prague Castle View',
            'type'=> 'Best Views',
            'address' => 'Hradčanské náměstí 15, Praha 1 - Hradčany, 110 00',	 
            'description' =>'Although it would be cool to recommend some totally unknown place for the spectacular view, the truth is the view from Prague Castle is simply the best. Yes, we mean the view from the terrace at Hradcanske namesti. And while you are at it, the views from garden right below the nearby Strahov monastery are pretty good too!',  	 
            'telephone' =>	 'n/a',
            'wifi' =>	 false,
            'opening_hours' =>	'0:00 - 24:00',	 
            'gps_lat' => 50.089283,	 
            'gps_lgt' => 14.398687,
        ]);

        Place::create([
            'name' => 'Riegrovy sady',
            'type'=> 'Best Views',
            'address' => 'Riegrovy sady 28, 120 00 Praha 2',	 
            'description' =>'A park between Prague 2 and Prague 3 is a buzzing place, particularly during the summer. This is where the locals come to hang out, walk their dogs or play Frisbee. It also happens to have one particular spot - a large meadow - from where you can overlook the skyline of Prague. It\'s the perfect place to lay down a blanket and enjoy the glass of wine as the sun sets.' ,  	 
            'telephone' =>	 'n/a',
            'wifi' =>	 false,
            'opening_hours' =>	'0:00 - 24:00',	 
            'gps_lat' => 50.080737,	 
            'gps_lgt' => 14.440081,
        ]);

        Place::create([
            'name' => 'Vysehrad',
            'type'=> 'Best Views',
            'address' => 'V Pevnosti 159/5b, 128 00 Praha 2',	 
            'description' =>'Get on the metro for a short ride or take one of the trams stopping at Vyton and walk up to the mythical Vysehrad hill. You will find not only great views overlooking the Vltava river, but also plenty of green spots for a Frisbee session or a picnic and a few spots selling beer to cool off.',  	 
            'telephone' =>	 'n/a',
            'wifi' =>	 false,
            'opening_hours' =>	'0:00 - 24:00',	 
            'gps_lat' => 50.062282,	 
            'gps_lgt' => 14.417118,
        ]);

        /*--------------------------------
        OUTDOOR & SUMMER HANGOUTS CATEGORY
        ---------------------------------*/

        Place::create([
            'name' => 'Stalin',
            'type'=> 'Outdoor & Summer Hangouts',
            'address' => 'Nábřeží Edvarda Beneše, 118 00 Praha 7',	 
            'description' =>'The terrace below Prague 7\'s metronome serves as a meeting point between late spring and early autumn. Open bars and regular programme - from occasional live gigs and DJ sets to night-time movie screenings - can be foound here. More detials on the programme can be found on Stalin\'s Facebook page. And why the name? Czechs are usually not very fond of their country\'s communist past, but there was once a giant statue of Stalin located on the top of the hill. The name stuck and continues to be used by locals.',  	 
            'telephone' =>	 'n/a',
            'wifi' =>	 false,
            'opening_hours' =>	'0:00 - 24:00',	 
            'gps_lat' => 50.094618,	 
            'gps_lgt' => 14.416087,
        ]);

        Place::create([
            'name' => 'Containall',
            'type'=> 'Outdoor & Summer Hangouts',
            'address' => 'Cihelná 548/4, 118 00 Malá Strana, Praha 1',	 
            'description' =>'A little comunity backyard is not only a pleasant kind of a bric-a-brac space but it is also attached to a rather special place: a small section of the riverbank popular with the local swans and very close to another hidden gem, Vojanovy sady, a beautiful garden hidden behind the walls of U Luzickeho seminare street.',  	 
            'telephone' =>	 'n/a',
            'wifi' =>	 false,
            'opening_hours' =>	'0:00 - 24:00',	 
            'gps_lat' => 50.0885669,	 
            'gps_lgt' => 14.4105339,
            /* Opened only for summer season */
        ]);

        Place::create([
            'name' => 'Letenske sady Beer Garden',
            'type'=> 'Outdoor & Summer Hangouts',
            'address' => 'Letenské sady, 170 00 Praha 7',	 
            'description' =>'One of the most beautiful Prague beer gardens offers not only beer and some food but also some incredible views over Prague. If you come during the day, you may also want to check out National Technical Museum (NTM), which can be found next to the beer garden - it\'s good fun for those who appreciate old planes, locomotives and historical cars.',  	 
            'telephone' =>	 '+421 233 378 200',
            'wifi' =>	 false,
            'opening_hours' =>	'11:00 - 23:00',	 
            'gps_lat' => 50.094618,	 
            'gps_lgt' => 14.416087,
        ]);

        Place::create([
            'name' => 'Naplavka',
            'type'=> 'Outdoor & Summer Hangouts',
            'address' => 'Rašínovo nábřeží, 120 00 Praha 2 - Nové Město',	 
            'description' =>'A popular outdoor hangout lined with little bars can be found on the riverside between three bridges, starting roughly at Jirasek bridge and ends at Vyton with Palacky bridge in between. Concerts or occasional parties are held here, chiefly at Bajkazyl bar, at the foot of Palacky bridge. A local farmer\'s market also takes place here every Saturday.',
            'wifi' =>	 false,
            'opening_hours' =>	'00:00 - 24:00',	 
            'gps_lat' => 50.0726586,	 
            'gps_lgt' => 14.4137964,
        ]);

        /*----------------------
        THE BEST PARKS CATEGORY
        ------------------------*/
              
        Place::create([
            'name' => 'Stromovka',
            'type'=> 'Outdoor & Summer Hangouts',
            'address' => 'Rašínovo nábřeží, 120 00 Praha 2 - Nové Město',	 
            'description' =>'The former hunting grounds in Prague 7 became a public park in the 19th century and has been serving the citizens of Prague ever since. It is perfect for those who want to wind down - an equally good place for walkers, joggers and dog owners. Due to its generous size, no group gets in the way of the other. There are several spots throughout the park to hold barbecues and a few spots with exercising equipement. Prague\'s planetarium is located at the very foot of the entrance to the park, very near the Vystaviste Holesovice tram stop.',
            'wifi' =>	 false,
            'opening_hours' =>	'00:00 - 24:00',	 
            'gps_lat' => 50.10679,	 
            'gps_lgt' => 14.420711,
        ]);

        Place::create([
            'name' => 'Havlickovy sady (Grebovka)',
            'type'=> 'Outdoor & Summer Hangouts',
            'address' => ' Havlíčkovy sady, 120 00 Praha 2',	 
            'description' =>'Glorious park stretches between the boroughs of Vinogrady and Vrsovice, and it is full of little suprising spots. It is a good place for resting as well as walking and running. It also offers one of the most exciting views over Prague 4 (Nusle) and Prague 10 (Vrsovice) from the yard behind Gröbe Villa, the park\'s dominant feature, which is situated in the middle of the park.',
            'wifi' =>	 false,
            'opening_hours' =>	'10:00 - 22:00',	 
            'gps_lat' => 50.0692556,	 
            'gps_lgt' => 14.4449528,
            
        ]);

        Place::create([
            'name' => 'Parukářka',
            'type'=> 'Outdoor & Summer Hangouts',
            'address' => 'Jeseniova 50, 130 00 Praha 3',	 
            'description' =>'This popular hill park in Žižkov is among my favourite spots to walk my dog, hang out or to smoke a joint with friends. You can find it tucked between Prokopova, Jesniova and Olšanská street, in an area that I consider to be the "real" Žižkov. Not only great for walks or occasional picnic, it also comes with some of the nicest views over Žižkov and Karlín.',
            'wifi' =>	 false,
            'opening_hours' =>	'00:00 - 24:00',	 
            'gps_lat' => 50.08475396,	 
            'gps_lgt' => 14.4616275,
           
        ]);

        Place::create([
            'name' => 'Vojanovy sady',
            'type'=> 'Outdoor & Summer Hangouts',
            'address' => 'U Lužického semináře, 118 00 Malá Strana - Praha 1',	 
            'description' =>'Right next to well-known Valdštejn Gardens, this park thankfully does not get as much attention as its more famous neighbour. Hidden behind the white walls, the grounds are a perfect quiet spot full of immaculately kept greenery and occasional art work. The regular peacock calls are the only thing that may disturb you in this otherwise serene retreat. Enter through a gate located along U lužického semináře street. ',
            'wifi' =>	 false,
            'opening_hours' =>	'08:00 - 19:00(summer), 08:00 - 17:00(winter)',	 
            'gps_lat' => 50.0882103,	 
            'gps_lgt' => 14.4084067,
           
        ]);


        /*----------------------
        HOTELS & HOSTLES, etc.
        ------------------------*/

        /* Add webpage ??????????????????????????????????
        dopln telefon !!!!!!!!!!!!!!!!!!!!!
        diakritika
        prague/praha

        price range ???
        */
        
        Place::create([
            'name' => 'Miss Sophie\'s & Sophie\'s Hostel',
            'type'=> 'Hotels & Hostels, etc.',
            'address' => 'Melounova 2-3, 120 00 Nové Město - Praha 2',	 
            'description' =>'Two cosy "sister" establishment can be found in one street facing each other. The original Miss Sophie\'s is one of the world\'s pioneers of the boutique hostel concept and continues to be innovative. With their friendly staff, spacious apartements, double rooms, cheerful communal areas and bars, as well as smaller dorms for friends who don\'t mind sharing, they are perfect option for those who still like the spirit of the hostel but are experienced (or old enough) to prefer something more comfortable.',
            'wifi' =>	 true,
            'opening_hours' =>	'00:00 - 24:00',	
            'telephone' =>	 '+420 246 032 621', 
            'gps_lat' => 50.0735058,	 
            'gps_lgt' => 14.4339936,
           
        ]);


        Place::create([
            'name' => 'Czech Inn',
            'type'=> 'Hotels & Hostels, etc.',
            'address' => 'Francouzská 76, 101 00 Praha 10',	 
            'description' =>'Set right in between the centre of Vinohrady and the very foot of bohemian Vršovice, Czech Inn is not only a boutique hostel - it is a warm and friendly place that not only offers a bed and a hot shower, but also some late night fun. Basement Bar, a popular venue, is housed, as the name suggest, in the hotel basement, and organizes many popular club nights and gigs. Great quirky budget hotel in unusual location!',
            'wifi' =>	 true,
            'opening_hours' =>	'00:00 - 24:00',	
            'telephone' =>	 '+420 267 267 612', 
            'gps_lat' => 50.0718899,	 
            'gps_lgt' => 14.4462616,

        ]);

        Place::create([
            'name' => 'Hotel Josef',
            'type'=> 'Hotels & Hostels, etc.',
            'address' => 'Rybná 20, 110 00 Staré Město - Praha 1',	 
            'description' =>'Josef was built by the famous local architect Eva Jiřičná. She is a fan of light, airy spaces and tonnes of glass, and Josef therefore has all of these attributes. So if hotels in the city centre seems cramped and dark, Josef is exact opposite. Its location is prime - right around the corner from Dlohá street!',
            'wifi' =>	 true,
            'opening_hours' =>	'00:00 - 24:00',	
            'telephone' =>	 '+420 221 700 111', 
            'gps_lat' => 50.0899973,	 
            'gps_lgt' => 14.4261057,

        ]);

        Place::create([
            'name' => 'Hunger Wall Residence',
            'type'=> 'Hotels & Hostels, etc.',
            'address' => 'Plaská 615/8, 150 00 Malá Strana - Praha 5',	 
            'description' =>'For those who want to stay in Prague for longer, the Hunger Wall is the perfect solution. This town house has several apartments for rent but with additional hotel-like services available, such as a regular laundry service. The apartements share the premises with lovely Café Lounge.',
            'wifi' =>	 true,
            'opening_hours' =>	'00:00 - 24:00',	
            'telephone' =>	 '+420 257 404 040', 
            'gps_lat' => 50.0807677,	 
            'gps_lgt' => 14.4056676,

        ]);

        Place::create([
            'name' => 'Port X',
            'type'=> 'Hotels & Hostels, etc.',
            'address' => 'V Přístavu 1586/2, 170 00 Praha 7 - Holešovice',	 
            'description' => 'This sleek, spacious, smart and bright houseboat was designed as a prototype to showcase an updated way of living. It now serves as a pop-up showroom, but it is also regulary available on AirBnB to guests who prefer a bit adventure, unexpected views and an unusual setting.',
            'wifi' =>	 false,
            'opening_hours' =>	'00:00 - 24:00',	
            'telephone' =>	 '+420 606 724 138', 
            'gps_lat' => 50.1069644,	 
            'gps_lgt' => 14.4561691,

        ]);

        Place::create([
            'name' => 'Sir Toby\'s',
            'type'=> 'Hotels & Hostels, etc.',
            'address' => 'Dělnická 1155/24, 170 00 Praha 7-Holešovice',	 
            'description' => 'The friendly Sir Toby\'s is a Prague hostel pioneer which opened its door for the first time in 1999. Growing slowly but steadily, it now occupies the whole building at Dělnická 24 in Holešovice, a former working-class district. The genius loci of this area adds extra value to the whole experience',
            'wifi' =>	 false,
            'opening_hours' =>	'00:00 - 24:00',	
            'telephone' =>	 '+420 246 032 610', 
            'gps_lat' => 50.1030689,	 
            'gps_lgt' => 14.4481150,

        ]);

        Place::create([
            'name' => 'The Nicholas Hotel Residence',
            'type'=> 'Hotels & Hostels, etc.',
            'address' => 'Malostranské nám. 5/28, 110 00 Praha-Malá Strana-Malá Strana',	 
            'description' => 'The friendly Sir Toby\'s is a Prague hostel pioneer which opened its door for the first time in 1999. Growing slowly but steadily, it now occupies the whole building at Dělnická 24 in Holešovice, a former working-class district. The genius loci of this area adds extra value to the whole experience',
            'wifi' =>	 false,
            'opening_hours' =>	'00:00 - 24:00',	
            'telephone' =>	 '+420 731 452 791', 
            'gps_lat' => 50.0880241,	 
            'gps_lgt' => 14.4040631,

        ]);
    }
}
