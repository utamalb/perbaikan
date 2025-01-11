<?php

use Illuminate\Database\Seeder;
use App\Models\ApparelSize;

class ApparelSizeSeeder extends Seeder
{
    public function run()
    {
        ApparelSize::create([
            'size_code' => 'S',
            'sort_order' => 1,
        ]);

        ApparelSize::create([
            'size_code' => 'M',
            'sort_order' => 2,
        ]);
    }
}
