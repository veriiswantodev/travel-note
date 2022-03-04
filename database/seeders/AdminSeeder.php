<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Models\User;
        $admin->name = 'Administrator';
        $admin->nik = '3515032023230001';
        $admin->email = 'admin@travel-note.test';
        $admin->roles = json_encode(['admin']);
        $admin->password = \Hash::make('travel-note');

        $admin->save();
        
        $this->command->info("User Admin Berhasil di tambahkan");

    }
}
