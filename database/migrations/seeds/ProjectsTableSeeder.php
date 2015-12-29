<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder {

    public function run()
    {
        // Décommentez cette ligne pour vider la table avant de la peupler/seeder
        DB::table('projects')->delete();

        $projects = array(
            ['id' => 1, 'user_id' => 1, 'name' => 'Liste de courses', 'slug' => 'liste_de_courses', 'description' => 'à acheter au Carrefour', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'user_id' => 2, 'name' => 'Liste de films', 'slug' => 'liste_de_films', 'description' => 'à voir bientôt', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'user_id' => 3, 'name' => 'Liste de naissance', 'slug' => 'liste_de_naissance', 'description' => 'pour le petit Leo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Décommentez cette ligne pour lancer le seeder
        DB::table('projects')->insert($projects);
    }

}