<?php

use Illuminate\Database\Seeder;

class CollectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collections')->insert([
            ['name'=> 'Adèle Blanc-sec',           'main_image' => 'Adele_1100x500.jpg', 
             'main_caption' => 'sometext', 
             'thumb' => 'Adele_thumb.jpg', 
             'description' => 'Adèle Blanc-sec foregår i Paris i perioden fra 1911 og frem. Hovedpersonen, Adèle Blanc-sec, er skribent. Hun deltager i en række særdeles indviklede eventyr, der involverer spiritisme, genoplivede pterodaktyler, babylonske dæmonsekter og meget andet. Serien, der er skrevet og tegnet af Jacques Tardi, er nærmest en pastiche på gamle dages spændingsfortællinger, som for eksempel Jules Verne skrev dem. Plottet i en Adele-historie er som regel meget vanskeligt at gennemskue. Serien har et stort persongalleri, hvoraf flere også optræder i andre af Jacques Tardis serier. '],
             ['name'=> 'Agent 327',           'main_image' => 'Agent327_1100x500.jpg', 
             'main_caption' => 'sometext', 
             'thumb' => 'Agent327_thumb.jpg', 
             'description' => 'Agent 327, hvis virkelige navn er Hans Harkhoost, arbejder for den hollandske efterretningstjeneste. Opgaverne udstykkes af efterretningstjenestens Chef, der udelukkende kendes under det navn, og Agent 327 får ofte hjælp af den let naive og uheldige agentspire Bernhard, der, selvom han ofte kludrer i det, alligevel er med til at løse sagen i sidste ende. Sekretæren frk. Betsy er også ofte behjælpelig på den ene eller anden måde.
             Hans Harkhoosts ærkefjende er forbryderen Boris Kloris. Serien indeholder desuden et antal gennemgående bifigurer.
             Lodewijks tegnestil er cartoony og tydeligt inspireret af den klassiske fransk-belgiske skole (eksempelvis Splint & Co.), men han har sin egen stil, en smule skæv og fyldt med action. Historierne er fyldt med sjove gags og masser af referencer til Holland.  '],  
             ['name'=> 'Allan Falk',           'main_image' => 'AllanFalk_1100x500.jpg', 
             'main_caption' => 'sometext', 
             'thumb' => 'AllanFalk_thumb.jpg', 
             'description' => 'Fransk-belgisk spændingsserie om Allan Falk (Ric Hochet), der er ansat som journalist på bladet "Journal" i Paris. I serien bruger han sin tid på at opklare kriminalgåder med sin ven, kommissær Laval. Serien starter før end at Allan Falk får arbejde som journalist. I den første historie fra 1955 arbejder den unge Allan Falk som avisbud. 
             Historierne er ofte bygget op som gåder og mysterier, som Allan Falk skal løse. Af og til er der et overnaturligt element i historien, som Allan Falk altid finder en naturlig forklaring på. Han er så dygtig til opklaringsarbejdet, at forbryderne må lægge yderst udspekulerede og djævelske planer for at komme ham til livs. '],  
             ['name'=> 'Alix',           'main_image' => 'Alix_1100x500.jpg', 
             'main_caption' => 'sometext', 
             'thumb' => 'Alix_thumb.jpg', 
             'description' => 'Alix er en historisk serie skabt af Jacques Martin. 
             Handlingen i Alix er henlagt til tiden omkring år 50 f.Kr. Til hjælp i sit forsøg på at bekæmpe parterne og skabe fred i det romerske kejserrige har feltherren Crassus blandt andet en afdeling gallere, Alouette-legionen, der forgæves søger at vinde kampen. I nederlagets time flygter høvdingesønnen Alix fra sin galliske stamme, men bliver fanget af grækeren Arbaces, der fører ham til øen Rhodos, og Alix og Arbaces bliver fjender. Arbaces er Pompejus højre hånd, og sammen forbereder de et komplot mod Cæsar, men Alix krydser deres planer, hvilket Cæsar naturligvis er taknemmelig for. Alix bliver adopteret af en patricierfamilie i Rom og nyder Cæsars gunst. '],  
             ['name'=> 'Blake og Mortimer',           'main_image' => 'BlakeOgMortimer_1100x500.jpg', 
             'main_caption' => 'sometext', 
             'thumb' => 'BlakeOgMortimer_thumb.jpg', 
             'description' => 'Blake og Mortimer er skabt af Edgar P. Jacobs, der har skrevet og tegnet de første 12 album. Nr. 12 blev færdigtegnet af Bob de Moor efter Jacobs.
             Serien foregår i England, hvor vi følger de to hovedpersoner, professor Philip Angus Mortimer (med det røde fuldskæg) og kaptajn Francis Blake (med det lyse overskæg) på deres eventyr. Disse eventyr tager som oftest vores to helte verden rundt, i jagt efter fantastiske maskiner og sindssyge videnskabsmænd, for ikke at nævne deres ærkefjende, Olrik. '],  
             ['name'=> 'Blueberrys unge år',           'main_image' => 'BlueberrysUngeAar_1100x500.jpg', 
             'main_caption' => 'sometext', 
             'thumb' => 'BlueberrysUngeAar_thumb.jpg', 
             'description' => 'Serien Blueberrys unge år er en underserie af Blueberry og er en indirekte fortsættelse af serien Den unge Blueberry. Nummereringen i Frankrig er derfor fra nr. 4. Jean-Michel Charlier har skrevet nr. 1, 2 og begyndelsen af nr. 3, François Corteggiani har skrevet serien fra nr. 3, hvor han overtog efter Charliers død. Newzealænderen Colin Wilson har tegnet nr. 1-6. Fra nr. 7 er serien tegnet af Michel Blanc-Dumont. Interpresse har udgivet nr. 1-3, Carlsen Comics nr. 4-10. 
             Efter at Corteggiani og Blanc-Dumont overtog serien, ændrer den karakter og falder i kvalitet, så Carlsen Comics valgte at standse udgivelsen efter nr. 10. Donovan Comics fortsatte serien med nr. 11-16, hvorefter serien blev overtaget af Faraos Cigarer. '],  
             
             ['name'=> 'Bouncer',           'main_image' => 'Bouncer_1100x500.jpg', 
             'main_caption' => 'sometext', 
             'thumb' => 'Bouncer_thumb.jpg', 
             'description' => 'missing text'],  
             
             ['name'=> 'Den Unge Blueberry',           'main_image' => 'DenUngeBlueberry_1100x500.jpg', 
             'main_caption' => 'sometext', 
             'thumb' => 'DenUngeBlueberry_thumb.jpg', 
             'description' => 'Serien Den unge Blueberry er en underserie af Blueberry. Serien er skrevet af Jean-Michel Charlier og Jean Giraud og tegnet af Giraud. Udgivet i Danmark af Serieforlaget. Fortsætter som Blueberrys unge år. '],  

             ['name'=> 'Erik Hedspore',           'main_image' => 'ErikHedspore_1100x500.jpg', 
             'main_caption' => 'sometext', 
             'thumb' => 'ErikHedspore_thumb.jpg', 
             'description' => 'missing text'],

             ['name'=> 'Jeremiah',           'main_image' => 'Jeremiah_1100x500.jpg', 
             'main_caption' => 'sometext', 
             'thumb' => 'Jeremiah_thumb.jpg', 
             'description' => 'Hovedpersonerne er Jeremiah og Kurdy. Kurdys æsel, Esra, spiller en tilbagevendende rolle i de første album. Jeremiah og Kurdy indgår et venskab, efter at Jeremiahs landsby er blevet ødelagt. De rejser rundt i en voldelig og rå verden, fuld af forbrydere, klaner og religiøse fanatikere. De forsøger at holde hovedet oven vande gennem forskellige former for løsarbejde og forsøger at undgå at blive indblandet i lokale problemer. I en verden, hvor kun de stærkeste tæller, lykkes det ikke helt for de to venner at undgå dette.'],
            ['name'=> 'Lefranc' ,           'main_image' => 'Lefranc_1100x500.jpg', 
             'main_caption' => 'sometext', 
             'thumb' => 'Lefranc_thumb.jpg', 
             'description' => 'Serien foregår i Frankrig, hvor vi følger den unge reporter på hans fantastiske eventyr. Meget tidligt på sine oplevelser møder Lefranc den unge spejderdreng Jean "JeanJean" Le Gall, som han senere adopterer. Han møder også Axel Borg, der viser sig at blive hans ærkefjende, samt inspektør Renard. Både fortælle- og tegnestil minder meget om Blake og Mortimer. Forfatteren, Jacques Martin, blev på et tidspunkt endda anklaget for at have plagieret denne [1] og - i og med at Lefranc er en evigtung reporter - til dels også Tintin. Serien startede da også i seriemagasinet Tintin. De tre første album er egenhændigt skrevet og tegnet af Jacques Martin. Herefter overtager bl.a. Bob de Moor og senere Gilles Chaillet tegnearbejdet. I Danmark udkom serien første gang i 1967 i seriebladet Fart og tempo under navnet Stan Lefranc, og det blev til i alt to historier, se Fart og tempo-oversigt. Fra 1980 tog Carlsen Comics serien op og udgav de første 10 album i serien. Senere blev album 11 udgivet som hæfte i serien Tempo fra Egmont Serieforlaget. I 2015 genoptog Faraos Cigarer serien med de nyeste album i serien. '],
            ['name'=> 'Linda Og Valentin' , 'main_image' => 'LindaOgValentin_1100x500.jpg',
             'main_caption' => 'sometext', 
             'thumb' => 'LindaOgValentin_thumb.jpg', 
             'description' => 'Linda og Valentin - agenter i tid og rum (på fransk oprindelig Valérian, agent spatio-temporel, nu Valérian et Laureline) er en science fiction-serie, skrevet af Pierre Christin og tegnet af Jean-Claude Mézières, oprindelig skabt til og publiceret i det franske tegneserieblad Pilote. 
             Linda og Valentin er to rumtids-agenter for den jordiske organisation Rumtidstjenesten. Med deres rumskib kan de rejse til et hvilket som helst punkt i universet og i tiden. Gennem deres eventyr besøger de bl.a. både Jordens fortid og fremtid samt mange fjerne planeter og steder. 
             I løbet af de forskellige album i serien følger man en længere historie om de to agenter, som udvikler sig over flere album, men også små historier der i og for sig kan stå alene. '],
             ['name'=> 'Løjnant Blueberry',           'main_image' => 'Ltn_Blueberry_1100x500.jpg', 
             'main_caption' => 'sometext', 
             'thumb' => 'Ltn_Blueberry_thumb.jpg', 
             'description' => 'Hovedserien om Blueberry hedder Løjtnant Blueberry. Den startede under titlen Fort Navajo og skulle egentlig handle om fortet og forskellige personer, men snart blev Blueberry hovedfigur, og serien skiftede titel både i Frankrig og Danmark. 
             De andre serier om Blueberry er Den unge Blueberry, Blueberrys unge år og Marshal Blueberry. '],

             ['name'=> 'Metabaronernes Kaste',           'main_image' => 'MetabaronernesKaste_1100x500.jpg', 
             'main_caption' => 'sometext', 
             'thumb' => 'MetabaronernesKaste_thumb.jpg', 
             'description' => 'missing text'],

             ['name'=> 'Teknofædrene',           'main_image' => 'Teknofaedrene_1100x500.jpg', 
             'main_caption' => 'sometext', 
             'thumb' => 'Teknofaedrene_thumb.jpg', 
             'description' => 'missing text'],

             ['name'=> 'XIII',  'main_image' => 'XIII_1100x500.jpg', 
             'main_caption' => 'sometext', 
             'thumb' => 'XIII_thumb.jpg', 
             'description' => 'Hovedpersonerne er Jeremiah og Kurdy. Kurdys æsel, Esra, spiller en tilbagevendende rolle i de første album. Jeremiah og Kurdy indgår et venskab, efter at Jeremiahs landsby er blevet ødelagt. De rejser rundt i en voldelig og rå verden, fuld af forbrydere, klaner og religiøse fanatikere. De forsøger at holde hovedet oven vande gennem forskellige former for løsarbejde og forsøger at undgå at blive indblandet i lokale problemer. I en verden, hvor kun de stærkeste tæller, lykkes det ikke helt for de to venner at undgå dette.']
            
            
        ]);
    }
}
