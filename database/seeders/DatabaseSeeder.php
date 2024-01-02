<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Role;
use App\Models\Type;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = array(
            1 => array(
                'name' => 'Residential',
                'slug' => 'residential',
            ),
            2 => array(
                'name' => 'Land',
                'slug' => 'land',
            ),
            3 => array(
                'name' => 'Commercial',
                'slug' => 'commercial',
            ),
            4 => array(
                'name' => 'Industrial',
                'slug' => 'industrial',
            ),
            5 => array(
                'name' => 'Investment',
                'slug' => 'investment',
            ),
        );

        $types = array(
            1 => array(
                'name' => 'Rent',
            ),
            2 => array(
                'name' => 'Buy',
            ),
            3 => array(
                'name' => 'Sell',
            ),
        );

        $roles = array(
            1 => array(
                'name' => 'Standard',
            ),
            2 => array(
                'name' => 'Admin',
            ),
            3 => array(
                'name' => 'Overlord',
            ),
        );


        foreach($categories as $c) {
            Category::create([
                'name' => $c['name'],
                'slug' => $c['slug'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        foreach($types as $t) {
            Type::create([
                'name' => $t['name'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        foreach($roles as $r) {
            Role::create([
                'name' => $r['name'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        \App\Models\Listing::factory(10)->create();

    }
}
