<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $html = new Skill('HTML', 'lang', 'html5/html5-original-wordmark.svg');
        $css = new Skill('CSS', 'lang', 'css3/css3-original-wordmark.svg');
        $js = new Skill('JavaScript', 'lang', 'javascript/javascript-original.svg');
        $ts = new Skill('TypeScript', 'lang', 'typescript/typescript-original.svg');
        $sass = new Skill('SASS', 'lang', 'sass/sass-original.svg');
        $php = new Skill('PHP', 'lang', 'php/php-original.svg');
        $java = new Skill('Java', 'lang', 'java/java-original.svg');
        $html->save();
        $css->save();
        $js->save();
        $ts->save();
        $sass->save();
        $php->save();
        $java->save();

        $mysql = new Skill('MySQL', 'db', 'mysql/mysql-original-wordmark.svg');
        $postgresql = new Skill('PostgreSQL', 'db', 'postgresql/postgresql-original.svg');
        $mongodb = new Skill('MongoDB', 'db', 'mongodb/mongodb-original.svg');
        $mysql->save();
        $postgresql->save();
        $mongodb->save();

        $angular = new Skill('Angular', 'framework', 'angularjs/angularjs-original.svg');
        $vue = new Skill('VueJS', 'framework', 'vuejs/vuejs-original.svg');
        $laravel = new Skill('Laravel', 'framework', 'laravel/laravel-plain.svg');
        $expressJS = new Skill('ExpressJS', 'framework', 'express/express-original.svg');
        $jquery = new Skill('JQuery', 'framework', 'jquery/jquery-original-wordmark.svg');
        $tailwindcss = new Skill('TailwindCSS', 'framework', 'tailwindcss/tailwindcss-plain.svg');
        $angular->save();
        $vue->save();
        $laravel->save();
        $expressJS->save();
        $jquery->save();
        $tailwindcss->save();

        $git = new Skill('Git', 'dev', 'git/git-original.svg');
        $github = new Skill('GitHub', 'dev', 'github/github-original.svg');
        $docker = new Skill('Docker', 'dev', 'docker/docker-original.svg');
        $jenkins = new Skill('Jenkins', 'dev', 'jenkins/jenkins-original.svg');
        $git->save();
        $github->save();
        $docker->save();
        $jenkins->save();
    }
}
