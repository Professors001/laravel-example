<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $limit = 100;
        $exitingSongs = Song::count();
        if ($exitingSongs < $limit) {
            Song::factory()->count($limit)->create();
        }
    }
}
