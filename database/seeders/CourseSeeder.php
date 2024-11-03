<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Category;
use App\Models\Writer;
use Faker\Factory as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $dataScience = Category::firstOrCreate(['name' => 'Data Science']);
        $networkSecurity = Category::firstOrCreate(['name' => 'Network Security']);

        $writer1 = Writer::firstOrCreate(['name' => 'Raka Putra Wicaksono']);
        $writer2 = Writer::firstOrCreate(['name' => 'Bia Mecca Annisa']);
        $writer3 = Writer::firstOrCreate(['name' => 'Abi Firmansyah']);

        Course::create([
            'category_id' => $dataScience->id,
            'writer_id' => $writer1->id,
            'title' => 'Machine Learning',
            'description' => $faker->paragraph(10),
            'image' => 'images/machine_learning.jpg', 
        ]);

        Course::create([
            'category_id' => $dataScience->id,
            'writer_id' => $writer2->id,
            'title' => 'Deep Learning',
            'description' => $faker->paragraph(10),
            'image' => 'images/deep_learning.jpg', 
        ]);

        Course::create([
            'category_id' => $dataScience->id,
            'writer_id' => $writer3->id,
            'title' => 'Natural Language Processing',
            'description' => $faker->paragraph(10),
            'image' => 'images/nlp.jpg', 
        ]);

        Course::create([
            'category_id' => $networkSecurity->id,
            'writer_id' => $writer1->id,
            'title' => 'Software Security',
            'description' => $faker->paragraph(10),
            'image' => 'images/software_security.jpg', 
        ]);

        Course::create([
            'category_id' => $networkSecurity->id,
            'writer_id' => $writer2->id,
            'title' => 'Network Administration',
            'description' => $faker->paragraph(10),
            'image' => 'images/network_administration.jpg', 
        ]);

        Course::create([
            'category_id' => $networkSecurity->id,
            'writer_id' => $writer3->id,
            'title' => 'Popular Network Technology',
            'description' => $faker->paragraph(10),
            'image' => 'images/popular_network_technology.jpg', 
        ]);
    }
}
