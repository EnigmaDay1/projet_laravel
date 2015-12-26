<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder {

    public function run()
    {
        // Décommentez cette ligne pour vider la table avant de la peupler/seeder
        DB::table('projects')->delete();

        $projects = array(
            ['id' => 1, 'user_id' => 1, 'name' => 'Project 1', 'slug' => 'project-1', 'description' => 'My first project', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'user_id' => 2, 'name' => 'Project 2', 'slug' => 'project-2', 'description' => 'My second project', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'user_id' => 3, 'name' => 'Project 3', 'slug' => 'project-3', 'description' => 'My third project', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Décommentez cette ligne pour lancer le seeder
        DB::table('projects')->insert($projects);
    }

}