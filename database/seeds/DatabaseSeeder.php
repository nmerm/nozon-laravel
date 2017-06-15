<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Schema::disableForeignKeyConstraints();

            DB::table('utilisateurs')->truncate();
            DB::table('groupes')->truncate();
            DB::table('groupe_utilisateur')->truncate();
            DB::table('ressources')->truncate();
            DB::table('groupe_ressource')->truncate();
            DB::table('editions')->truncate();
            DB::table('equipes')->truncate();
            DB::table('medias')->truncate();
            DB::table('membres')->truncate();
            DB::table('presses')->truncate();
            DB::table('profils')->truncate();
            DB::table('publications')->truncate();
            DB::table('recompenses')->truncate();
            DB::table('sponsors')->truncate();
            DB::table('edition_sponsor')->truncate();

            $this->call(ACLSeeder::class);


            DB::table('editions')->insert([
                'annee' => '2016',
                'textePresentation' => "Bienvenue à tous, 2016 c' bien",
                'lieu' => 'Bora Bora',
                'dateConcours' => '2016-07-28',
                'texteConcours' => "Cette année, Hodrocontest accueille plus de cent-mille-milliards d'équipes, prêtes à se foutre sur la gueule à coup de télécommandes. On s'attend à de l'UFC. Ca promet!" ,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);

            DB::table('editions')->insert([
                'annee' => '2015',
                'textePresentation' => "Bienvenue à tous, 2015 c'est mieux",
                'lieu' => 'Bora Bora',
                'dateConcours' => '2015-06-05',
                'texteConcours' => "Cette année, Hodrocontest accueille plus de trois équipes, ce qui, par rapport à l'édition précédente, correspond au même nombre d'équipes, à peu près",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);


            DB::table('equipes')->insert([
                'nom' => 'TEAM HEIG-VD',
                'description' => 'On aime autant les bateaux que Kostic aime les enfants',
                'type' => 'principal',
                'edition_annee' => '2016',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);

            DB::table('equipes')->insert([
                'nom' => 'EAM HEIG-VD',
                'description' => 'En bateau, Simon',
                'type' => 'principal',
                'edition_annee' => '2015',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);


            DB::table('medias')->insert([
                'url' => 'https://www.google.ch/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&ved=0ahUKEwibr5u8-L3UAhXHVxoKHZHXA3EQjRwIBw&url=http%3A%2F%2Fwww.casafun.com%2Fimages_droles%2Fbateau_resto.htm&psig=AFQjCNHevUxKdBHb-2LB8eMCbFY95-cJ0g&ust=1497550492997746',
                'titre' => 'Un beau bateau',
                'description' => 'Ca bosse dur à hydrocontest',
                'type' => 'photo',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);

            DB::table('medias')->insert([
                'url' => 'https://www.google.ch/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwit_tnz-L3UAhWCWBoKHR6VCjoQjRwIBw&url=http%3A%2F%2Fhumourger.com%2Fbateau%2Findex2.html&psig=AFQjCNHevUxKdBHb-2LB8eMCbFY95-cJ0g&ust=1497550492997746',
                'titre' => 'site',
                'description' => "Quelle bonne surprise! Une équipe de gitan s'est jointe à la compétition!",
                'type' => 'photo',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);


            DB::table('membres')->insert([
                'nom' => 'Aeschimann ',
                'prenom' => 'Jonathan',
                'email' => 'jonathan_a@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);

            DB::table('membres')->insert([
                'nom' => 'Favre',
                'prenom' => 'Mathias',
                'email' => 'mathias@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('membres')->insert([
                'nom' => 'Coelho',
                'prenom' => 'Jonathan',
                'email' => 'jonathan_c@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('membres')->insert([
                'nom' => 'Gerber',
                'prenom' => 'Julien',
                'email' => 'julien@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('membres')->insert([
                'nom' => 'Bolomey',
                'prenom' => 'David',
                'email' => 'david@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('membres')->insert([
                'nom' => 'Duarte',
                'prenom' => 'Dani',
                'email' => 'dani@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('membres')->insert([
                'nom' => 'Fernandes',
                'prenom' => 'Dylan',
                'email' => 'dylan@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('membres')->insert([
                'nom' => 'Bolomey',
                'prenom' => 'David',
                'email' => 'david_bolomey@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('membres')->insert([
                'nom' => 'Enzen Villegas',
                'prenom' => 'Carla',
                'email' => 'carla@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('membres')->insert([
                'nom' => 'Lot',
                'prenom' => 'Antoine',
                'email' => 'antoine@hotmail.com',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);

            DB::table('presses')->insert([
                'url' => 'http://www.letelegramme.fr/finistere/hydrocontest-2016-l-ensta-bretagne-remporte-la-3e-edition-01-08-2016-11166928.php',
                'titre' => 'Le Télégramme',
                'description' => "HydroContest 2016. L'Ensta Bretagne remporte la 3e édition",
                'date' => '2016-08-01',
                'edition_annee' => '2016',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            DB::table('presses')->insert([
                'url' => 'http://www.presseocean.fr/actualite/nantes-lecole-centrale-remporte-lhydrocontest-31-07-2016-199732',
                'titre' => 'Presse Océan',
                'description' => "Nantes : L'école Centrale remporte l'Hydrocontest",
                'date' => '2016-07-31',
                'edition_annee' => '2016',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
      
            DB::table('presses')->insert([
                'url' => 'http://www.presseocean.fr/actualite/nantes-lecole-centrale-remporte-lhydrocontest-31-07-2016-199732',
                'titre' => 'lémanbleu',
                'description' => "UNE COMPÉTITION POUR RÉINVENTER LE TRANSPORT MARITIME",
                'date' => '2016-07-28',
                'edition_annee' => '2016',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            DB::table('presses')->insert([
                'url' => 'http://www.lefigaro.fr/sciences/2016/07/22/01008-20160722ARTFIG00231-et-si-des-etudiants-inventaient-les-bateaux-du-futur8230.php',
                'titre' => 'Le Figaro',
                'description' => "Et si des étudiants inventaient les bateaux du futur…",
                'date' => '2016-07-22',
                'edition_annee' => '2016',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            DB::table('presses')->insert([
                'url' => 'http://www.laliberte.ch/news-agence/detail/hydrocontest-l-epfl-remporte-une-des-trois-competitions/292457#.WUJBaGjyhPY',
                'titre' => 'LA LIBERTÉ',
                'description' => "Hydrocontest: l'EPFL remporte une des trois compétitions",
                'date' => '2015-07-19',
                'edition_annee' => '2015',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            DB::table('presses')->insert([
                'url' => 'http://www.arcinfo.ch/articles/lifestyle/techno-et-sciences/hydrocontest-les-bateaux-du-futur-concourent-a-lausanne-407817',
                'titre' => 'Arcinfo',
                'description' => "EFFICIENCE ÉNERGÉTIQUE - Seize équipes de scientifiques aguerris participent depuis ce mardi à la deuxième édition d'Hydrocontest à Lausanne sur le lac. 150 futurs ingénieurs composent des équipes qui ont développé ces bateaux du futur pendant des mois.",
                'date' => '2015-07-14',
                'edition_annee' => '2015',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);    
                 
            DB::table('profils')->insert([
                'fonction' => 'Enjailleur',
                'description' => 'Raconter un minimum de 3 blagues moyennes par tranche de 5 heures',
                'departement' => 'TIC',
                'anneeEtude' => '1',
                'membre_id' => '4',
                'equipe_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);

            DB::table('profils')->insert([
                'fonction' => 'Gars casse couille',
                'description' => "Rappeler périodiquement à mes camarades leur manque d'engagement" ,
                'departement' => 'Haute-Seine',
                'anneeEtude' => '798', 
                'membre_id' => '5',
                'equipe_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);

            DB::table('publications')->insert([
                'titre' => "SUCCÈS SUISSE ET FRANÇAIS LORS DE L’HYDROCONTEST 2016",
                'texte' => "Cette édition de l’HydroContest sera prête à accueillir les spectateurs pour les courses, mais proposera aussi une multitude d’activités pour tous.
                Le public aura la chance de tester des bateaux radiocommandés dans un bassin rattaché au ponton où les courses se dérouleront. 10 maquettes de bateaux à foils radiocommandés de 60 cm réalisées par Hydos et l'architecte naval Antoine Mainfray seront mis à disposition pour tester l’hydrodynamique et l’efficience énergétique de la technologie des foils.
                Les spectateurs auront aussi une possibilité de voir les phases finales de la compétition en paddle board. En effet, Fool Moon mettra à disposition 15 paddles pour vivre l’expérience HydroContest de façon optimale.",
                'edition_annee' => '2016',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('publications')->insert([
                'titre' => "SUCCÈS SUISSE ET FRANÇAIS LORS DE L’HYDROCONTEST 2016",
                'texte' => "Les hautes écoles suisses et françaises ont dominé l’édition 2016 de l’HydroContest. Dans la catégorie « bateaux légers », c’est Central Nantes qui s’impose, alors que la catégorie « bateaux lourds » a vu, contre toute attente, la victoire de l’ENSTA Bretagne – Paris-La-Villette. La « Long Distance Race » a été marquée par le triomphe de la Haute Ecole d'Ingénierie et d'Architecture (HEIA) de Fribourg.
                Travail acharné jusque tard dans la nuit, modifications de dernière minute, échange continu, les 250 étudiants de l’HydroContest ont tout donné pour peaufiner leurs bateaux lors de ces phases finales. Un florilège de prototypes aux formes très différentes les unes des autres s’est affronté dès jeudi donnant lieu à de très belles courses.",
                'edition_annee' => '2016',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('publications')->insert([
                'titre' => "Vainqueurs de l'édition 2016:",
                'texte' => "Trophée catégorie « Transport légers » : Central Nantes (France)

                Trophée catégorie « Transport de Masse » : ENSTA Bretagne – Paris-La-Villette (France)

                Trophée catégorie « Long Distance Race » : HEIA Fribourg (Suisse)

                Prix de l’innovation « Transports légers » : EPFL (Suisse)

                Prix de l’innovation « Transports de masse » : HEIG-VD (Suisse)

                Prix d’Eco Conception : EPFL (Suisse)

                Prix de communication : University of Southampton (Angleterre)

                Prix de l’esprit Hydrocontest : HEIA Fribourg (Suisse)",
                'edition_annee' => '2016',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);

            DB::table('publications')->insert([
                'titre' => "Transporter plus plus vite, en consommant moins d'énérgie",
                'texte' => "II s’agit d’une des problématiques actuelles et communes liées au développement industriel et technologique de notre ère. Avec 90% des échanges commerciaux opérés par la mer, le transport maritime est un enjeu économique et environnemental majeur. En effet, si le bateau reste le moyen de transport le plus écologique, en matière d’emissions de CO2 par tonne transportée, il représente tout de même la 5ème source de pollution mondiale.
                Face a une flotte en constante augmentation, la question de l’efficience énergétique de ces navires se pose comme une problématique à la fois centrale et qui conditionne la croissance de cette industrie.",
                'edition_annee' => '2015',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('publications')->insert([
                'titre' => 'HYDROCONTEST : C’EST PARTI POUR L’ÉDITION 2015',
                'texte' => "Les 16 équipes internationales d’étudiants ingénieurs et leurs prototypes de bateaux du futur entament demain les phases de qualification de l’HYDROCONTEST 2015. Rendez-vous du 14 au 19 juillet au village HYDROCONTEST situé à Lausanne aux Pyramides de Vidy pour suivre ce concours unique au monde et admirer les bateaux volants, innovants, performants et toujours plus efficients…
                Venues des  4 coins du globe, les équipes de 16 grandes écoles d’ingénieur sont arrivées en Suisse pour investir une semaine durant les rives du Léman. Dans leurs bagages ? Des prototypes d’embarcations conçus et construits par leurs soins à échelle réduite pour tenter d’imaginer les bateaux de demain, qui devront transporter plus, plus longtemps, en consommant le moins d’énergie possible, et prouver leur efficience en situation réelle pendant les courses qui les départageront.",
                'edition_annee' => '2015',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]); 
            
            
            DB::table('recompenses')->insert([
                'type' => 'Trophée "Best Comunication"',
                'description' => "Cette année, notre équipe de communication à remporté le trophée de la meilleur communication ! Nous somme très fier de ce prix car nous avons investi beaucoup de temps et de moyens afin de communiqué au mieux notre parcours durant cette édition.",
                'equipe_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                 ]);

            DB::table('recompenses')->insert([
                'type' => "Prix de l'innovation 'Transport de masse'",
                'description' => "Durant cette édition 2016, nous avons remporté le prix de l'innovation dans la catégorie 'Transports de masse'.",
                'equipe_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                 ]);
      
            DB::table('recompenses')->insert([
                'type' => 'Grand Prix - catégorie Transport de Masse (TM)',
                'description' => "Notre team est, également, arrivée en 2ème position du Grand Prix 'HYDROCONTEST', dans la catégorie Transport de Masse (TM), juste derrière a team EPFL. ",
                'equipe_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                 ]);
            

            DB::table('sponsors')->insert([
                'nom' => 'la Loterie Romande',
                'url' => 'www.loro.ch',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);

            DB::table('sponsors')->insert([
                'nom' => 'Canton de vaud',
                'url' => 'www.catering-services-migros.ch',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            
            DB::table('sponsors')->insert([
                'nom' => 'Migros Catering Services',
                'url' => 'www.vd.ch',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);

            DB::table('sponsors')->insert([
                'nom' => 'SIL Citycable.',
                'url' => 'www.citycable.ch',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);

            $this->call(ACLSeeder::class);
            
            Schema::enableForeignKeyConstraints();
    }
}
