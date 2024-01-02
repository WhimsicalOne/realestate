<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }
}

// INSERT INTO `categories` (`id`, `name`, `description`, `image_url`, `created_at`, `updated_at`) VALUES
// (1, 'Residential', NULL, 'images/categories/default.png', '2023-12-30 01:09:17', '2023-12-30 01:09:17'),
// (2, 'Land', NULL, 'images/categories/default.png', '2023-12-30 01:09:17', '2023-12-30 01:09:17'),
// (3, 'Commercial', '', 'images/categories/default.png', '2023-12-30 01:09:17', '2023-12-30 01:09:17'),
// (4, 'Industrial', NULL, 'images/categories/default.png', '2023-12-30 01:09:17', '2023-12-30 01:09:17'),
// (5, 'Investment', NULL, 'images/categories/default.png', '2023-12-30 01:09:17', '2023-12-30 01:09:17');
