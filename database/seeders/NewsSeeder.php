<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'categories_id'=> 1,
            'image'=> "prueba.png",
            'title'=> "Apple, Google, and Microsoft will soon implement passwordless sign-in on all major platforms",
            'subtitle'=> "GitHub will require all code contributors to use two-factor authentication",
            'paragraph' => "In a joint effort, tech giants Apple, Google, and Microsoft announced Thursday morning that they have committed to building support for passwordless sign-in across all of the mobile, desktop, and browser platforms that they control in the coming year. Effectively, this means that passwordless authentication will come to all major device platforms in the not too distant future: Android and iOS mobile operating systems; Chrome, Edge, and Safari browsers; and the Windows and macOS desktop environments."
        ]);

        News::create([
            'categories_id'=> 2,
            'image'=> "prueba.png",
            'title'=> "GitHub will require all code contributors to use two-factor authentication",
            'subtitle'=> "Apple, Google, and Microsoft will soon implement passwordless",
            'paragraph' => "GitHub, the code hosting platform used by tens of millions of software developers around the world, announced today that all users who upload code to the site will need to enable one or more forms of two-factor authentication (2FA) by the end of 2023 in order to continue using the platform. The new policy was announced Wednesday in a blog post by GitHub’s chief security officer (CSO) Mike Hanley, which highlighted the Microsoft-owned platform’s role in protecting the integrity of the software development process in the face of threats created by bad actors taking over developers"
        ]);

        News::create([
            'categories_id'=> 3,
            'image'=> "prueba.png",
            'title'=> "Blizzard brings the chaos with new Warcraft mobile game",
            'subtitle'=> "GitHub will require all code contributors to use two-factor authentication",
            'paragraph' => "Warcraft Arclight Rumble is a free-to-play action strategy mobile game that seems like a traditional Warcraft strategy game with a cutesy, Hearthstone-looking tower defense twist. In it, players will choose from one of five types of leaders taken from Warcraft lore to command their troops or “minis” in battle. Players will be able to play in PvE and PvP modes, earning gold to deploy more powerful minions to complete objectives like defeating a raid boss."
        ]);

        News::create([
            'categories_id'=> 4,
            'image'=> "prueba.png",
            'subtitle'=> "GitHub will require all code contributors to use two-factor authentication",
            'title'=> "Genetic sequencing opens new doors — and concerns — for home health testing",
            'paragraph' => "At-home health testing company LetsGetChecked has acquired the genetic testing company Veritas Genetics and spinoff Veritas Intercontinental, it announced Tuesday. It’s the latest pivot for a direct-to-consumer genetics company, most of which have spent the past few years struggling to sell DNA test kits to consumers more and more concerned about genetic privacy. Partnering with an industry like home testing, which grew over the course of the COVID-19 pandemic, is one path forward. But that integration could risk conflicts of interest for patients if a company is incentivized to nudge consumers towards tests based on their genetic information, experts told The Verge. With all of these products on board at one company, genetic information — and its limitations — should be communicated very, very carefully."
        ]);
    }
}
