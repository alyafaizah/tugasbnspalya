<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kategoris=[
            [
                'id'=>1,
                'nama'=>'Undangan',
            ],
            [
                'id'=>2,
                'nama'=>'Pengumuman',
            ],
            [
                'id'=>3,
                'nama'=>'Nota Dinas',
            ],
            [
                'id'=>4,
                'nama'=>'Pemberitahuan',
            ],
        ];
        \DB::table('kategoris')->insert($kategoris);
    }
}
