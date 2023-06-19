<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contoh data pengguna
        $company = [
            ['name' => 'hai', 'email' => 'hai', 'npwp' => 'hai', 'telephone' => 'hai','address' => 'hai', 'city' => 'hai', 'postal_code' => 'hai', 'province' => 'hai', 'logo' => 'hai','user_id'=>'1', 'country' => 'japan'],
            
            // Tambahkan data pengguna lain sesuai kebutuhan
        ];

        // Simpan data pengguna ke dalam tabel
        foreach ($company as $company) {
            Company::create($company);
        }
    }
}
