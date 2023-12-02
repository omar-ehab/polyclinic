<?php

namespace Database\Seeders;

use App\Models\Governorate;
use App\Models\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $governorates = Governorate::select('id')->get()->pluck('id')->toArray();
        $cities_json = Storage::get('cities.json');
        $cities = json_decode($cities_json, true)['data'];
        foreach ($cities as $city) {
            $governorate_id = $governorates[$city['governorate_index'] - 1];
            Region::create([
                'governorate_id' => $governorate_id,
                'name_en' => $city['name_en'],
                'name_ar' => $city['name_ar'],
            ]);
        }
    }
}
