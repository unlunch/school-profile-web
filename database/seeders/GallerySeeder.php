<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $gallery = [
            [
                'title' => 'Guru',
                'headline' => 'Komunitas Belajar',
                'description' => 'Beberapa Foto Guru - Guru SDN Bojongloa 1',
            ],
            [
                'title' => 'Shalat Dhuha',
                'headline' => 'Shalat Dhuha',
                'description' => 'Beberapa foto sedang melaksanakan kegiatan shalat dhuha',
            ],
            [
                'title' => 'Upacara',
                'headline' => 'Upacara',
                'description' => 'Beberapa foto sedang melaksanakan kegiatan upacara bendera',
            ],
            [
                'title' => 'Pramuka',
                'headline' => 'Pramuka',
                'description' => 'Beberapa foto sedang melaksanakan upacara pramuka',
            ],
            [
                'title' => 'ANBK',
                'headline' => 'Assesment Nasional Berbasis Komputer',
                'description' => 'Beberapa foto sedang melaksanakan ANBK',
            ],
            [
                'title' => 'Pembelajaran',
                'headline' => 'Pembelajaran',
                'description' => 'Beberapa foto sedang melaksanakan kegiatan pembelajaran',
            ],
            [
                'title' => 'Program',
                'headline' => 'Program Bantuan ATK',
                'description' => 'Beberapa foto program bantuan',
            ],
            [
                'title' => 'Senam',
                'headline' => 'Senam',
                'description' => 'Beberapa foto sedang melaksanakan senam',
            ],
        ];

        foreach ($gallery as $i => $g) {
            $slug = strtolower(str_replace(' ', '-', $g['title']));
            Gallery::create([
                'title' => $g['title'],
                'headline' => $g['headline'],
                'slug' => $slug,
                'description' => $g['description'],
            ]);
        }
    }
}
