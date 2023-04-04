<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Task;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $today = Carbon::today()->format('Y-m-d');
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');

        $user1 = User::create([
            'nama' => 'Smith Arkduvenbergen',
            'email' => 'email@gmail.com',
            'password' => bcrypt('password'),
            'avatar' => null,
        ]);

        Task::create([
            'tanggal' => $today,
            'task' => 'Bertemu teman untuk makan siang',
            'status' => 'Listed',
            'id_user' => $user1->id,
        ]);
        
        
        
        Task::create([
            'tanggal' => $today,
            'task' => 'Bersih-bersih rumah',
            'status' => 'Listed',
            'id_user' => $user1->id,
        ]);
        
        

        Task::create([
            'tanggal' => $today,
            'task' => 'Berolahraga di gym',
            'status' => 'Listed',
            'id_user' => $user1->id,
        ]);
        
        
        
        Task::create([
            'tanggal' => $today,
            'task' => 'Mengikuti pertemuan dengan klien',
            'status' => 'Done',
            'id_user' => $user1->id,
        ]);
        
        
        
        Task::create([
            'tanggal' => $today,
            'task' => 'Mengajar les privat',
            'status' => 'Listed',
            'id_user' => $user1->id,
        ]);
        
        
        Task::create([
            'tanggal' => $today,
            'task' => 'Bertemu dengan teman lama',
            'status' => 'Listed',
            'id_user' => $user1->id,
        ]);
        
        Task::create([
            'tanggal' => $today,
            'task' => 'Menonton film di bioskop',
            'status' => 'Done',
            'id_user' => $user1->id,
        ]);

        Task::create([
            'tanggal' => $tomorrow,
            'task' => 'Membuat presentasi',
            'status' => 'Listed',
            'id_user' => $user1->id,
        ]);

        Task::create([
            'tanggal' => $tomorrow,
            'task' => 'Membuat jadwal pelajaran',
            'status' => 'Listed',
            'id_user' => $user1->id,
        ]);

        Task::create([
            'tanggal' => $tomorrow,
            'task' => 'Menyelesaikan laporan keuangan',
            'status' => 'Listed',
            'id_user' => $user1->id,
        ]);

        Task::create([
            'tanggal' => $tomorrow,
            'task' => 'Pergi ke mall untuk belanja',
            'status' => 'Listed',
            'id_user' => $user1->id,
        ]);

        Task::create([
            'tanggal' => $tomorrow,
            'task' => 'Membuat proposal proyek',
            'status' => 'Listed',
            'id_user' => $user1->id,
        ]);
        
        Task::create([
            'tanggal' => $tomorrow,
            'task' => 'Pergi ke kampus untuk mengikuti kuliah',
            'status' => 'Listed',
            'id_user' => $user1->id,
        ]);
        
    }
}
