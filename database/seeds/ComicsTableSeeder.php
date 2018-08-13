<?php

use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comics')->insert([

            ['title'=> 'Blueberrys Unge År',   'subtitle' => 'Missouris Dæmoner',  'frontpage' => 'BlueberrysUngeAar_01_Missouris_Daemoner.jpg',   'serie' => 'Blueberrys Unge År',
            'serienumber' => '1', 'writer' => 'Charlier','additional_writers' => '','artist' => 'Wilson','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '52','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen','publishing_year'=>'1985','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Blueberrys Unge År',   'subtitle' => 'Missouris Dæmoner',  'frontpage' => 'BlueberrysUngeAar_02_RaadselOverKansas.jpg',   'serie' => 'Blueberrys Unge År',
            'serienumber' => '2', 'writer' => 'Charlier','additional_writers' => '','artist' => 'Wilson','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '52','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen','publishing_year'=>'1988','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Blueberrys Unge År',   'subtitle' => 'Missouris Dæmoner',  'frontpage' => 'BlueberrysUngeAar_03_BagFjendensLinier.jpg',   'serie' => 'Blueberrys Unge År',
            'serienumber' => '3', 'writer' => 'Fancois Cortegiani','additional_writers' => '','artist' => 'Wilson','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '52','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen','publishing_year'=>'1990','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Blueberrys Unge År',   'subtitle' => 'Missouris Dæmoner',  'frontpage' => 'BlueberrysUngeAar_04_DenNaadeloeseJagt.jpg',   'serie' => 'Blueberrys Unge År',
            'serienumber' => '4', 'writer' => 'Fancois Cortegiani','additional_writers' => '','artist' => 'Wilson','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '52','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen','publishing_year'=>'1992','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Lefranc',   'subtitle' => 'Den Store Trussel',  'frontpage' => 'DenStoreTrussel.jpg',   'serie' => 'Lefranc',
            'serienumber' => '1', 'writer' => 'Jacques Martin','additional_writers' => '','artist' => 'Jacques Martin','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '68','size' => '','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'1980','major_release'=>'1','minor_release'=>'1'],
            ['title'=> 'Lefranc' ,  'subtitle' => 'Ildstormen',         'frontpage' => 'Ildstormen.jpg',        'serie' => 'Lefranc',
            'serienumber' => '2', 'writer' => 'Jacques Martin','additional_writers' => '','artist' => 'Jacques Martin','additional_artists' => '',
            'translator' => 'Ole Steen Hansen','letterer' => '','pages' => '68','size' => '','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'1980','major_release'=>'1','minor_release'=>'1'],
            ['title'=> 'Lefranc' ,  'subtitle' => 'Mysteriet Borg',     'frontpage' => 'MysterietBorg.jpg',     'serie' => 'Lefranc','serienumber' => '3', 
            'writer' => 'Jacques Martin','additional_writers' => '','artist' => 'Jacques Martin','additional_artists' => '','translator' => '','letterer' => '',
            'pages' => '68','size' => '','cover' => 'Softcover','coloring' => 'color','publisher'=>'Carlsen Comics','publishing_year'=>'1981','major_release'=>'1','minor_release'=>'1'],
            ['title'=> 'Lefranc',   'subtitle' => 'Ulvens Hule',        'frontpage' => 'UlvensHule.jpg',        'serie' => 'Lefranc','serienumber' => '4', 
            'writer' => 'Jacques Martin','additional_writers' => '','artist' => 'Jacques Martin','additional_artists' => 'Bob de Moor ','translator' => '','letterer' => '',
            'pages' => '68','size' => '','cover' => 'Softcover','coloring' => 'color','publisher'=>'Carlsen Comics','publishing_year'=>'1982','major_release'=>'1','minor_release'=>'1'],
            ['title'=> 'Lefranc' ,  'subtitle' => 'Porten Til Helvede', 'frontpage' => 'PortenTilHelvede.jpg',  'serie' => 'Lefranc','serienumber' => '5', 
            'writer' => 'Jacques Martin','additional_writers' => '','artist' => 'Gilles Chaillet','additional_artists' => '','translator' => '','letterer' => '',
            'pages' => '68','size' => '','cover' => 'Softcover','coloring' => 'color','publisher'=>'Carlsen Comics','publishing_year'=>'1982','major_release'=>'1','minor_release'=>'1'],
            ['title'=> 'Lefranc' ,  'subtitle' => 'Operation Thor',     'frontpage' => 'OperationThor.jpg',     'serie' => 'Lefranc','serienumber' => '6', 
            'writer' => 'Jacques Martin','additional_writers' => '','artist' => 'Gilles Chaillet','additional_artists' => '','translator' => 'Ole Steen Hansen','letterer' => '',
            'pages' => '68','size' => '','cover' => 'Softcover','coloring' => 'color','publisher'=>'Carlsen Comics','publishing_year'=>'1980','major_release'=>'1','minor_release'=>'1'],
            ['title'=> 'Lefranc',   'subtitle' => 'Oasen',              'frontpage' => 'Oasen.jpg',             'serie' => 'Lefranc', 'serienumber'=> '7', 
            'writer' => 'Jacques Martin','additional_writers' => '','artist' => 'Gilles Chaillet','additional_artists' => '','translator' => 'Ole Steen Hansen','letterer' => '',
            'pages' => '68','size' => '','cover' => 'Softcover','coloring' => 'color','publisher'=>'Carlsen Comics','publishing_year'=>'1983','major_release'=>'1','minor_release'=>'1'],
            ['title'=> 'Lefranc' ,  'subtitle' => 'Dommedagsvåbenet',   'frontpage' => 'Dommedagsvaabenet.jpg', 'serie' => 'Lefranc','serienumber' => '8', 
            'writer' => 'Jacques Martin','additional_writers' => '','artist' => 'Gilles Chaillet','additional_artists' => '','translator' => 'Ann Charlotte Michaelsen','letterer' => '',
            'pages' => '68','size' => '','cover' => 'Softcover','coloring' => 'color','publisher'=>'Carlsen Comics','publishing_year'=>'1984','major_release'=>'1','minor_release'=>'1'],
            ['title'=> 'Lefranc' ,  'subtitle' => 'Krypten',            'frontpage' => 'Krypten.jpg',           'serie' => 'Lefranc','serienumber' => '9', 
            'writer' => 'Jacques Martin','additional_writers' => '','artist' => 'Jacques Martin','additional_artists' => '','translator' => '','letterer' => '',
            'pages' => '68','size' => '','cover' => 'Softcover','coloring' => 'color','publisher'=>'Carlsen Comics','publishing_year'=>'1980','major_release'=>'1','minor_release'=>'1'],
            ['title'=> 'Lefranc',   'subtitle' => 'Apokalypsen',        'frontpage' => 'Apokalypsen.jpg',       'serie' => 'Lefranc','serienumber' => '10', 
            'writer' => 'Jacques Martin','additional_writers' => '','artist' => 'Jacques Martin','additional_artists' => '','translator' => '','letterer' => '',
            'pages' => '68','size' => '','cover' => 'Softcover','coloring' => 'color','publisher'=>'Carlsen Comics','publishing_year'=>'1980','major_release'=>'1','minor_release'=>'1'],
            ['title'=> 'Lefranc' ,  'subtitle' => 'Stalins Søn',        'frontpage' => 'StalinsSoen.jpg',       'serie' => 'Lefranc','serienumber' => '12', 
            'writer' => 'Thierry Robberecht ','additional_writers' => '','artist' => 'Régric ','additional_artists' => '','translator' => '','letterer' => '',
            'pages' => '68','size' => '','cover' => 'Softcover','coloring' => 'color','publisher'=>'Faraos Cigarer','publishing_year'=>'2015','major_release'=>'1','minor_release'=>'1'],
            ['title'=> 'Lefranc' ,  'subtitle' => 'Cuba Libre',         'frontpage' => 'CubaLibre.jpg',         'serie' => 'Lefranc','serienumber' => '13', 
            'writer' => 'Roger Seiter ','additional_writers' => '','artist' => 'Régric ','additional_artists' => '','translator' => '','letterer' => '',
            'pages' => '68','size' => '','cover' => 'Hardcover','coloring' => 'color','publisher'=>'Faraos Cigarer','publishing_year'=>'2016','major_release'=>'1','minor_release'=>'1'],
            ['title'=> 'Lefranc' ,  'subtitle' => 'Fuglemennesket',     'frontpage' => 'Fuglemennesket.jpg',    'serie' => 'Lefranc','serienumber' => '14', 
            'writer' => 'Roger Seiter ','additional_writers' => '','artist' => 'Régric ','additional_artists' => '','translator' => 'Per Vadmand','letterer' => '',
            'pages' => '68','size' => '','cover' => 'Hardcover','coloring' => 'color','publisher'=>'Faraos Cigarer','publishing_year'=>'2018','major_release'=>'1','minor_release'=>'1'],
            ['title'=> 'Lefranc' ,  'subtitle' => 'Målet',              'frontpage' => 'Maalet.jpg',            'serie' => 'Tempo','serienumber' => '10', 
            'writer' => 'Jacques Martin','additional_writers' => '','artist' => 'Gilles Chaillet','additional_artists' => '','translator' => '','letterer' => '',
            'pages' => '68','size' => '','cover' => 'Softcover','coloring' => 'color','publisher'=>'Egmont Serieforlaget','publishing_year'=>'2009','major_release'=>'1','minor_release'=>'1'],
            
            ['title'=> 'Linda og Valentin',   'subtitle' => 'Landet Uden Stjerner',  'frontpage' => 'LandetUdenStjerner_1Udg1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '1', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '52','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen If','publishing_year'=>'1975','major_release'=>'1','minor_release'=>'1'],
            
            ['title'=> 'Linda og Valentin',   'subtitle' => 'Velkommen Til Alflolol',  'frontpage' => 'VelkommenTilAlflolol_1Udg1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '2', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '52','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen If','publishing_year'=>'1975','major_release'=>'1','minor_release'=>'1'],
            
            ['title'=> 'Linda og Valentin',   'subtitle' => 'Herskernes Fugle',  'frontpage' => 'HerskernesFugle_1Udg1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '3', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '52','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen If','publishing_year'=>'1976','major_release'=>'1','minor_release'=>'1'],
            
            ['title'=> 'Linda og Valentin',   'subtitle' => 'Skyggernes Ambassador',  'frontpage' => 'SkyggernesAmbassador_1Udg1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '4', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '52','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen If','publishing_year'=>'1976','major_release'=>'1','minor_release'=>'1'],
            
            ['title'=> 'Linda og Valentin',   'subtitle' => 'De Tusind Planeters Imperium',  'frontpage' => 'DeTusindPlanetersImperium_2Udg1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '5', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '52','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen If','publishing_year'=>'1977','major_release'=>'2','minor_release'=>'1'],
            
            ['title'=> 'Linda og Valentin',   'subtitle' => 'I Den Falske Verden',  'frontpage' => 'IDenFalskeVerden_1Udg1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '6', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '52','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen If','publishing_year'=>'1977','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Linda og Valentin',   'subtitle' => 'Storbyen Der Druknede',  'frontpage' => 'StorbyenDerDruknede_2Udg1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '7', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '60','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen If','publishing_year'=>'1978','major_release'=>'2','minor_release'=>'1'],
            
            ['title'=> 'Linda og Valentin',   'subtitle' => 'Jævndøgnets Helte',  'frontpage' => 'JaevndoegnetsHelte_1Udg1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '8', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '52','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen If','publishing_year'=>'1979','major_release'=>'1','minor_release'=>'1'],
            
            ['title'=> 'Linda og Valentin',   'subtitle' => 'Metro Chatelet, Retning Cassiopeie',  'frontpage' => 'MetroChateletRetningCassiopeie_1Udg1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '9', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '52','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'1981','major_release'=>'1','minor_release'=>'1'],
            
            ['title'=> 'Linda og Valentin',   'subtitle' => 'Brooklyn Station, Endestation Kosmos',  'frontpage' => 'BrooklynStationEndestationKosmos_1Udg1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '10', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '52','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'1981','major_release'=>'2','minor_release'=>'1'],
            
            ['title'=> 'Linda og Valentin',   'subtitle' => 'Spøgelset Fra Inverloch',  'frontpage' => 'SpoegelsetFraInverloch_1Udg1opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '11', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '52','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'1984','major_release'=>'1','minor_release'=>'1'],
            
            ['title'=> 'Linda og Valentin',   'subtitle' => 'Tordenkilen Fra Hypsis',  'frontpage' => 'TordenkilenFraHypsis_1Udg1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '12', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '52','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'1985','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Linda og Valentin',   'subtitle' => 'Over Ukendte Grænser',  'frontpage' => 'OverUkendteGraenser_1Udg1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '13', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '68','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'1989','major_release'=>'2','minor_release'=>'1'],
            
            ['title'=> 'Linda og Valentin',   'subtitle' => 'De Levende Våben',  'frontpage' => 'DeLevendeVaeben_1Udg1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '14', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '60','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'1991','major_release'=>'1','minor_release'=>'1'],
            
            ['title'=> 'Linda og Valentin',   'subtitle' => 'Magtens Cirkler',  'frontpage' => 'MagtensCirkler_1Udg1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '15', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '68','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'1994','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Linda og Valentin',   'subtitle' => 'Ultrarummets Gidsler',  'frontpage' => 'UltrarummetsGidsler_1Udg1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '16', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '68','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'1997','major_release'=>'2','minor_release'=>'1'],
            
            ['title'=> 'Linda og Valentin',   'subtitle' => 'Hittebarnet Fra Stjernerne',  'frontpage' => 'HittebarnetFraStjernerne_1Udg1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '17', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '56','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'1998','major_release'=>'1','minor_release'=>'1'],
            
            ['title'=> 'Linda og Valentin',   'subtitle' => 'Gennem Usikre Tider',  'frontpage' => 'GennemUsikreTider_1Udg1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '18', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Jens Peder Agger','letterer' => '','pages' => '64','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2001','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Linda og Valentin',   'subtitle' => 'På Randen Af Det Store Intet',  'frontpage' => 'PaaRandenAfDetStoreIntet_1Udg1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '19', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Per Vadmand','letterer' => '','pages' => '52','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2004','major_release'=>'2','minor_release'=>'1'],
            
            ['title'=> 'Linda og Valentin',   'subtitle' => 'Stenenes Orden',  'frontpage' => 'StenenesOrden_1Udg1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '20', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Per Vadmand','letterer' => '','pages' => '52','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2007','major_release'=>'1','minor_release'=>'1'],
            
            ['title'=> 'Linda og Valentin',   'subtitle' => 'Tidsåbneren',  'frontpage' => 'TidsAbneren_1Ug1Opl.jpg',   'serie' => 'Linda og Valentin',
            'serienumber' => '21', 'writer' => 'Pierre Christin','additional_writers' => '','artist' => 'Jean-Claude Mézières','additional_artists' => ''
            ,'translator' => 'Per Vadmand','letterer' => '','pages' => '64','size' => '220 x 295','cover' => 'Softcover','coloring' => 'color',
            'publisher'=>'Cobolt','publishing_year'=>'2010','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Tintin i Congo',  'frontpage' => 'Tintin_Faksimile_01.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '1', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2005','major_release'=>'3','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Tintin i Amerika',  'frontpage' => 'Tintin_Faksimile_02.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '2', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2005','major_release'=>'2','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Faraos Cigarer',  'frontpage' => 'Tintin_Faksimile_03.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '3', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2006','major_release'=>'2','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Den Blå Lotus',  'frontpage' => 'Tintin_Faksimile_04.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '4', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2005','major_release'=>'2','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Det Knuste Øre',  'frontpage' => 'Tintin_Faksimile_05.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '5', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2006','major_release'=>'3','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Den Sorte Ø',  'frontpage' => 'Tintin_Faksimile_06.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '6', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2006','major_release'=>'3','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Ottokars Sceptor',  'frontpage' => 'Tintin_Faksimile_07.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '7', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2006','major_release'=>'2','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Krappen Med De Gyldne Klosakse',  'frontpage' => 'Tintin_Faksimile_08.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '8', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2006','major_release'=>'2','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Den Mystiske Stjerne',  'frontpage' => 'Tintin_Faksimile_09.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '9', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2006','major_release'=>'2','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Enhjørningens Hemmelighed',  'frontpage' => 'Tintin_Faksimile_10.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '10', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2006','major_release'=>'2','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Rackham Den Rødes Skat',  'frontpage' => 'Tintin_Faksimile_11.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '11', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2006','major_release'=>'2','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'De Syv Krystalkugler',  'frontpage' => 'Tintin_Faksimile_12.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '12', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2006','major_release'=>'2','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Soltemplet',  'frontpage' => 'Tintin_Faksimile_13.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '13', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2006','major_release'=>'2','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Landet Med Det Sorte Guld',  'frontpage' => 'Tintin_Faksimile_14.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '14', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2006','major_release'=>'2','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Mission Til Månen',  'frontpage' => 'Tintin_Faksimile_15.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '15', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2007','major_release'=>'2','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'De Første Skridt På Månen',  'frontpage' => 'Tintin_Faksimile_16.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '16', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2007','major_release'=>'2','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Tournesol Mysteriet',  'frontpage' => 'Tintin_Faksimile_17.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '17', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2007','major_release'=>'2','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Koks I Lasten',  'frontpage' => 'Tintin_Faksimile_18.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '18', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2007','major_release'=>'2','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Tintin I Tibet',  'frontpage' => 'Tintin_Faksimile_19.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '19', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2007','major_release'=>'2','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Castafoires Juveler',  'frontpage' => 'Tintin_Faksimile_20.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '20', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2007','major_release'=>'2','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Rute 714 Til Sydney',  'frontpage' => 'Tintin_Faksimile_21.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '21', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2007','major_release'=>'2','minor_release'=>'1'],

            ['title'=> 'Tintin Faksimile',   'subtitle' => 'Tintin Og Picaroerne',  'frontpage' => 'Tintin_Faksimile_22.jpg',   'serie' => 'Tintin Faksimile',
            'serienumber' => '22', 'writer' => 'Herge','additional_writers' => '','artist' => 'Herge','additional_artists' => ''
            ,'translator' => 'Niels Søndergaard','letterer' => '','pages' => '68','size' => '235 x 308','cover' => 'Hardcover','coloring' => 'color',
            'publisher'=>'Carlsen Comics','publishing_year'=>'2007','major_release'=>'2','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_1.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '1', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '52','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1966','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_2.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '2', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '52','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1966','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_3.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '3', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '52','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1966','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_4.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '4', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '52','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1966','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_5.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '5', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '52','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1966','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_6.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '6', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '52','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1966','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_7.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '7', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '52','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1966','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_8.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '8', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '52','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1966','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_9.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '9', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '68','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1966','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_10.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '10', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '52','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1966','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_11.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '11', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '52','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1967','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_12.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '12', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '52','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1967','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_13.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '13', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '52','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1967','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_14.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '14', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '52','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1967','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_15.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '15', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '52','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1967','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_16.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '16', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '52','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1967','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_17.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '17', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '52','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1967','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_18.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '18', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '52','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1967','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_19.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '19', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '52','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1967','major_release'=>'1','minor_release'=>'1'],

            ['title'=> 'Superman 1966-69',   'subtitle' => 'Superman 1966',  'frontpage' => 'Superman_1966-69_20.jpg',   'serie' => 'Superman 1966-69',
            'serienumber' => '20', 'writer' => '','additional_writers' => '','artist' => '','additional_artists' => ''
            ,'translator' => '','letterer' => '','pages' => '52','size' => '175 x 255','cover' => '','coloring' => 'sort/hvid',
            'publisher'=>'Interpresse A/S','publishing_year'=>'1967','major_release'=>'1','minor_release'=>'1'],
        
        ]);
    }
}
