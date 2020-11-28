<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class HotelSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'nama_hotel'    => 'Hotel Bulan',
        //         'alamat_hotel'  => 'Desa Selat Banjar Witajati',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now()
        //     ],
        //     [
        //         'nama_hotel'    => 'Hotel Bintang',
        //         'alamat_hotel'  => 'Desa Selat Banjar Witajati',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now()
        //     ],
        // ];


        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'nama_hotel'    => $faker->company,
                'alamat_hotel'  => $faker->address,
                'created_at'    => Time::createFromTimestamp($faker->unixTime()),
                'updated_at'    => Time::now()
            ];
            $this->db->table('Hotel')->insert($data);
        }

        //////////////////////////////////////////////////////////////
        // Using Query Builder
        // query input 1 data
        // $this->db->table('Hotel')->insert($data);

        // query input multiple data
        // $this->db->table('Hotel')->insertBatch($data);


        // Simple Queries
        // $this->db->query(
        //     "INSERT INTO Hotel (
        //         nama_hotel, 
        //         alamat_hotel, 
        //         created_at, 
        //         updated_at
        //     ) VALUES(
        //         :nama_hotel:, 
        //         :alamat_hotel:, 
        //         :created_at:, 
        //         :updated_at:
        //     )",
        //     $data
        // );

    }
}
