<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Rr;
use App\Item;
use Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        //--------Role Seeder-------//
        // DB::table('roles')->insert([
        //     [
        //         'name' => 'Employee'
        //     ],
        //     [
        //         'name' => 'Admin'
        //     ],
        //     [
        //         'name' => 'SuperUser'
        //     ],
        //     [
        //         'name' => 'Manager'
        //     ]
        // ]);

        // //--------Category Seeder-------//
        // DB::table('category')->insert([
        //     [
        //         'name' => 'Electrical Equipment'
        //     ],
        //     [
        //         'name' => 'Maintenance and Repair Supplies'
        //     ],
        //     [
        //         'name' => 'Vehicle Spare Parts'
        //     ],
        //     [
        //         'name' => 'Materials for Construction and Installation'
        //     ],
        //     [
        //         'name' => 'Safety Equipment'
        //     ],
        //     [
        //         'name' => 'IT Equipment'
        //     ],
        //     [
        //         'name' => 'Office Supplies and Miscellaneous Items'
        //     ]
        // ]);

        // //--------District Seeder-------//
        // DB::table('district')->insert([
        //     [
        //         'name' => 'Others'
        //     ],
        //     [
        //         'name' => 'District I'
        //     ],
        //     [
        //         'name' => 'District II'
        //     ],
        //     [
        //         'name' => 'District III'
        //     ],
        //     [
        //         'name' => 'District IV'
        //     ],
        //     [
        //         'name' => 'District V'
        //     ],
        //     [
        //         'name' => 'District VI'
        //     ],
        //     [
        //         'name' => 'District VII'
        //     ],
        //     [
        //         'name' => 'District VIII'
        //     ],
        // ]);

        // //--------Department Seeder-------//
        // DB::table('department')->insert([
        //     [
        //         'name' => 'Others'
        //     ],
        //     [
        //         'name' => 'OGM'
        //     ],
        //     [
        //         'name' => 'CPD'
        //     ],
        //     [
        //         'name' => 'FSD'
        //     ],
        //     [
        //         'name' => 'PGD'
        //     ],
        //     [
        //         'name' => 'ISD'
        //     ],
        //     [
        //         'name' => 'ASD'
        //     ],
        //     [
        //         'name' => 'IAD'
        //     ],
        //     [
        //         'name' => 'TSD'
        //     ],
        //     [
        //         'name' => 'BOD'
        //     ]
        // ]);

        // //--------Role Seeder-------//
        // DB::table('users')->insert([
        //     [
        //         'name' => 'SuperUser',
        //         'email' => 'whouse.superuser@gmail.com',
        //         'password' => bcrypt('ormeco.admin'),
        //         'role_id' => 3,
        //         'department_id' => 1,
        //         'district_id' => 1,
        //         'approved_at' =>  Carbon::now()
        //     ],
        // ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
