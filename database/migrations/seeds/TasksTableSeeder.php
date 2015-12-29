<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder {

    public function run()
    {
        // Décommentez cette ligne pour vider la table avant de la peupler/seeder
        DB::table('tasks')->delete();

        $tasks = array(
            ['id' => 1, 'name' => '1 jus de fruits', 'slug' => '1_jus_de_fruits', 'project_id' => 1, 'completed' => false, 'date' => '16/01/2016', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => '2 pizza', 'slug' => '2_pizza', 'project_id' => 1, 'completed' => false, 'date' => '16/01/2016', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => '3 tomates', 'slug' => '3_tomates', 'project_id' => 1, 'completed' => false, 'date' => '16/01/2016', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => '4 citrons', 'slug' => '4_citrons', 'project_id' => 1, 'completed' => true, 'date' => '12/01/2016', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Inception', 'slug' => 'inception', 'project_id' => 2, 'completed' => true, 'date' => '12/12/2016', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'Gladiator', 'slug' => 'gladiator', 'project_id' => 2, 'completed' => true, 'date' => '13/01/2016', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'Anonymous', 'slug' => 'anonymous', 'project_id' => 2, 'completed' => false, 'date' => '16/01/2016', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Décommentez cette ligne pour lancer le seeder
        DB::table('tasks')->insert($tasks);
    }

}