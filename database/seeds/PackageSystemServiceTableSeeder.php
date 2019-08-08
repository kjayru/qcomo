<?php

use Illuminate\Database\Seeder;
use App\PackageSystemService;

class PackageSystemServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PackageSystemService::create([
            'system_service_id' => 1,
            'package_id' => 1
        ]);
        PackageSystemService::create([
            'system_service_id' => 2,
            'package_id' => 1
        ]);
        PackageSystemService::create([
            'system_service_id' => 3,
            'package_id' => 1
        ]);
        PackageSystemService::create([
            'system_service_id' => 4,
            'package_id' => 1
        ]);

        PackageSystemService::create([
            'system_service_id' => 1,
            'package_id' => 2
        ]);
        PackageSystemService::create([
            'system_service_id' => 2,
            'package_id' => 2
        ]);
        PackageSystemService::create([
            'system_service_id' => 3,
            'package_id' => 2
        ]);

        PackageSystemService::create([
            'system_service_id' => 1,
            'package_id' => 3
        ]);
        PackageSystemService::create([
            'system_service_id' => 2,
            'package_id' => 3
        ]);

        PackageSystemService::create([
            'system_service_id' => 1,
            'package_id' => 4
        ]);

    }
}
