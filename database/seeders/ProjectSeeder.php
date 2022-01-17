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
        /* $travel_agency = new Project('Travel Agency', '', 'https://github.com/IvaanTorres/daw-travel-agency', 1, 1, Date::createFromFormat('Y-m-d', '2021-06-07'));
          $travel_agency->description = "Final project developed in team - 1º DAW
Sol Experience consists in creating packs and experiences for every user who wants to travel to Málaga.
It has its own admin menu, logging & role system and also, it creates a PDF ticket when a pack is purchased.
Achivement: I learned how to use Java on desktop apps. Also I learned how to load content dynamically using MySQL with it.";
        $todo_app = new Project('TO-DO App', '', 'https://github.com/IvaanTorres/todo-app', 1, 0, Date::createFromFormat('Y-m-d', '2021-12-09'));
          $todo_app->description = "I developed a simple TO-DO app with the goal of starting to learn VueJS 3, my first Front-End Framework.
It uses TypeScript and Options API.
Due to the fact I wanted to focus on VueJS, I used JSON-Server as back-end.

Achivement: I learned how a SPA and VueJS works using components, passing data between child-parent & parent-child, etc.
Moreover, I got the idea of using types on VueJS thanks to TypeScript.";
        $sass_framework = new Project('CSS Framework', '', 'https://github.com/IvaanTorres/css-framework', 1, 1, Date::createFromFormat('Y-m-d', '2021-12-16'));
          $sass_framework->description = "I made this CSS Framework with the objective of learning how SASS & BEM Methodology work together.
I'm updating this project constantly, adding new features everytime.

Achivement: I learned how SASS works using variables, conditions, loops, functions and mixins.
Also, I appreciate the use of BEM for CSS classes. I already know how to name them without making a mess.";
        $php_vanilla_framework = new Project('PHP Framework', '', 'https://github.com/IvaanTorres/php-framework', 1, 0, Date::createFromFormat('Y-m-d', '2021-11-05'));
          $php_vanilla_framework->description = "I've created a personalized framework on PHP Vanilla which is based on MVC and has its own routing system.
It uses different external libraries such us:
- League/plates
- Nikic/fast-route
- Vlucas/phpdotenv

Achivement: Thanks to this project I know how to use PHP correctly (MVC). Before, I used it embedded in HTML.
Also, thanks to it, Laravel wasn't that complicated to learn due to the fact I created a complete framework based on it.";
        $web_portfolio = new Project('Web Portfolio', '', 'https://github.com/IvaanTorres/portfolio-v1', 1, 1, Date::createFromFormat('Y-m-d', '2022-01-05'));
          $web_portfolio->description = "I developed this web portfolio in order to show my progress in web development.
In this project I decided to use Laravel as Back-End to offer all projects and skills.
On the other hand, I used Laravel Mix (VueJS 3 Composition API + TypeScript + TailwindCSS + PostCSS) as Front-End.

Achivement: I learned how to convert Laravel into a Full-Stack Framework. It can be useful for small projects.
On the other hand, I decided to use TailwindCSS in order to learn and see how easy it's to style.
This project has been my first approach to Composition API with VueJS 3.";
        $smr_php_forum = new Project('PHP Forum', '', 'https://github.com/IvaanTorres/smr-php-forum', 1, 0, Date::createFromFormat('Y-m-d', '2020-01-16'));
          $smr_php_forum->description = "Travel Earth is a simple project developed personally in 2019 with the objective of starting to learn PHP and the use of JQuery library.
Since I was learning on my own, at that time, I thought it would be great the idea to develop the app in that way, using PHP embedded instead of an API REST using MVC, MySQLi instead of PDO and using SESSIONS instead of JWT.
Even though, I think it helped me to understand the goal of the language and the fantastic idea of dynamically change the web retrieving data from the database.

Achivement: Thanks to this project, I learned how can I use PHP to develop a dynamic website.
It has been my first approach to PHP and MySQL.";

        $todo_app->save();
        $travel_agency->save();
        $sass_framework->save();
        $php_vanilla_framework->save();
        $web_portfolio->save();
        $smr_php_forum->save(); */
    }
}
