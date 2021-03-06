<?php

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
        $this->call([
                UsersTableSeeder::class,
                RolesTableSeeder::class,
                UsersRolesTableSeeder::class,
                SalesAreaTableSeeder::class,
                BrandsTableSeeder::class,
                CategoriesTableSeeder::class,
                SuppliesTableSeeder::class,
                NewsTableSeeder::class,
                EventsTableSeeder::class,
                ApplyingGroupsTableSeeder::class,
                ProductsTableSeeder::class,
                ClientsTableSeeder::class,
                ObjectsTableSeeder::class,
                ImagesTableSeeder::class,
                BranchRolesTableSeeder::class,
                BranchTableSeeder::class,
                ClientsDiscountsTableSeeder::class,
                BrandsExchangeTableSeeder::class,
                ProductsSaleTableSeeder::class
            ]
            );
    }
}
