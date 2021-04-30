<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductNodesTableSeeder::class);
        $this->call(WebsitesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoryLinksTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
    }
}
