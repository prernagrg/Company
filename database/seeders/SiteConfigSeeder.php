<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $SiteConfig = [
            ['site_key' => 'site_map', 'site_value' => 'Pokhara','created_at'=>now(),'updated_at'=>now()],
            ['site_key' => 'map_url', 'site_value' => 'https://maps.app.goo.gl/4zCJoEK9oganTb8E8', 'created_at'=>now(),'updated_at'=>now()],
            ['site_key' => 'location', 'site_value' => 'Pokhara,Nepal','created_at'=>now(),'updated_at'=>now()],
            ['site_key' => 'email', 'site_value' => 'admin@gmail.com','created_at'=>now(),'updated_at'=>now()],
            ['site_key' => 'phone', 'site_value' => '9800000000','created_at'=>now(),'updated_at'=>now()],
        ];
         // Insert data into the database
         DB::table('site_configs')->insert($SiteConfig);
    }
    
}
