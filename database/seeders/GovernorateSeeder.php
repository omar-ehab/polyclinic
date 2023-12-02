<?php

namespace Database\Seeders;

use App\Models\Governorate;
use Illuminate\Database\Seeder;

class GovernorateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Governorate::create([
            'name_en' => 'Cairo',
            'name_ar' => 'القاهرة',
        ]);
        Governorate::create([
            'name_en' => 'Giza',
            'name_ar' => 'الجيزة',
        ]);
        Governorate::create([
            'name_en' => 'Alexandria',
            'name_ar' => 'الإسكندرية',
        ]);
        Governorate::create([
            'name_en' => 'Dakahlia',
            'name_ar' => 'الدقهلية',
        ]);
        Governorate::create([
            'name_en' => 'Red Sea',
            'name_ar' => 'البحر الأحمر',
        ]);
        Governorate::create([
            'name_en' => 'Beheira',
            'name_ar' => 'البحيرة',
        ]);
        Governorate::create([
            'name_en' => 'Fayoum',
            'name_ar' => 'الفيوم',
        ]);
        Governorate::create([
            'name_en' => 'Gharbia',
            'name_ar' => 'الغربية',
        ]);
        Governorate::create([
            'name_en' => 'Ismailia',
            'name_ar' => 'الإسماعيلية',
        ]);
        Governorate::create([
            'name_en' => 'Menofia',
            'name_ar' => 'المنوفية',
        ]);
        Governorate::create([
            'name_en' => 'Minya',
            'name_ar' => 'المنيا',
        ]);
        Governorate::create([
            'name_en' => 'Qalyubia',
            'name_ar' => 'القليوبية',
        ]);
        Governorate::create([
            'name_en' => 'New Valley',
            'name_ar' => 'الوادي الجديد',
        ]);
        Governorate::create([
            'name_en' => 'Suez',
            'name_ar' => 'السويس',
        ]);
        Governorate::create([
            'name_en' => 'Aswan',
            'name_ar' => 'أسوان',
        ]);
        Governorate::create([
            'name_en' => 'Asyut',
            'name_ar' => 'أسيوط',
        ]);
        Governorate::create([
            'name_en' => 'Beni Suef',
            'name_ar' => 'بني سويف',
        ]);
        Governorate::create([
            'name_en' => 'Port Said',
            'name_ar' => 'بورسعيد',
        ]);
        Governorate::create([
            'name_en' => 'Damietta',
            'name_ar' => 'دمياط',
        ]);
        Governorate::create([
            'name_en' => 'Sharkia',
            'name_ar' => 'الشرقية',
        ]);
        Governorate::create([
            'name_en' => 'South Sinai',
            'name_ar' => 'جنوب سيناء',
        ]);
        Governorate::create([
            'name_en' => 'Kafr Al sheikh',
            'name_ar' => 'كفر الشيخ',
        ]);
        Governorate::create([
            'name_en' => 'Matruh',
            'name_ar' => 'مطروح',
        ]);
        Governorate::create([
            'name_en' => 'Luxor',
            'name_ar' => 'الأقصر',
        ]);
        Governorate::create([
            'name_en' => 'Qena',
            'name_ar' => 'قنا',
        ]);
        Governorate::create([
            'name_en' => 'North Sinai',
            'name_ar' => 'شمال سيناء',
        ]);
        Governorate::create([
            'name_en' => 'Sohag',
            'name_ar' => 'سوهاج',
        ]);
    }
}
