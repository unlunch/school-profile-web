<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [
            [
                'name' => 'Asep Suryana, S.Pd.',
                'position' => 'Kepala Sekolah',
            ],
            [
                'name' => 'Eli Rohaeni, S.Pd.SD',
                'position' => 'Guru Kelas 1',
            ],
            [
                'name' => 'Acep Ananda Nugraha, S.Pd.',
                'position' => 'Guru Kelas 2',
            ],
            [
                'name' => 'Haris Kusmaya, S.Pd.',
                'position' => 'Guru Kelas 3',
            ],
            [
                'name' => 'Dedi, S.Pd.I.',
                'position' => 'Guru Kelas 4/PAI',
            ],
            [
                'name' => 'A. Sana, S.Pd.SD.',
                'position' => 'Guru Kelas 5',
            ],
            [
                'name' => 'Daningsih, S.Pd.',
                'position' => 'Guru Kelas 6',
            ],
            [
                'name' => 'Kurnia Sandi, S.K.M.',
                'position' => 'Operator Sekolah',
            ],
            [
                'name' => 'Asep Iman Ruhyana Supriatna',
                'position' => 'Penjaga Sekolah',
            ],
        ];

        foreach ($teachers as $teacher) {
            $user = User::create([
                'name'     => $teacher['name'],
                'email'    => Str::slug($teacher['name']) . '-' . Str::random(5) . '@example.com',
                'password' => bcrypt('password'),
                'role'     => 'teacher',
            ]);

            Teacher::create([
                'name'     => $teacher['name'],
                'position' => $teacher['position'],
                'user_id'  => $user->id,
            ]);
        }
    }
}
