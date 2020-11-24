<?php

namespace Database\Seeders;

use App\Models\DocumentationPage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DocumentationPage::factory()
            ->times(10)
            ->hasSections(7)
            ->create();
    }
}
