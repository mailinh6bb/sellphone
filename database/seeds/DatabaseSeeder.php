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
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);      
        $this->call(ProductTableSeeder::class);
        $this->call(Product_detailTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(SlideTableSeeder::class);
        $this->call(UserRoleSeederTable::class);
        $this->call(RolePermissionSeederTable::class);

    }
}
