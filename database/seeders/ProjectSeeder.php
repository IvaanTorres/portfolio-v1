<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Facades\Date;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travel_agency = new Project('Travel Agency', 'desc', 'https://github.com/IvaanTorres/daw-travel-agency', 1, 1, new Date(1));
        $todo_app = new Project('TO-DO App', 'desc', 'https://github.com/IvaanTorres/todo-app', 0, 1, new Date(1));
        $todo_app->save();
        $travel_agency->save();
    }
}
