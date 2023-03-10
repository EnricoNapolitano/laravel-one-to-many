<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Project;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i<10; $i++){
            $project = new Project();
            $project->title = $faker->text(50);
            $project->content = $faker->paragraphs(30, true);
            // $project->image = $faker->imageUrl(960, 540);
            $project->slug = Str::slug($project->title, '-');
            $project->save();
        }
    }
}
