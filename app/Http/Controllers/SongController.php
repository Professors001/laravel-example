<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index() {
        $songs = collect([
            [
                'id' => 1,
                'title' => 'Supernova',
                'artist' => 'Aespa',
                'album' => 'Armageddon',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 10,
                ],
            ],
            [
                'id' => 2,
                'title' => 'The Emptiness Machine',
                'artist' => '',
                'album' => 'From Zero',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 10,
                ]
            ],
            [
                'id' => 3,
                'title' => 'เงียบๆ คนเดียว',
                'artist' => 'Bird Thongchai',
                'album' => 'BIRD ALL TIME HITS',
                'duration' => [
                    'minutes' => 4,
                    'seconds' => 3,
                ]
            ],
            [
                'id' => 4,
                'title' => 'พูดทำไม',
                'artist' => 'ตู่ ภพธร',
                'album' => 'ภพธร',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 30,
                ],
            ],
            [
                'id' => 5,
                'title' => 'นักเดินทาง',
                'artist' => 'Getsunova',
                'album' => 'The Journey',
                'duration' => [
                    'minutes' => 4,
                    'seconds' => 12,
                ],
            ],
            [
                'id' => 6,
                'title' => 'Blinding Lights',
                'artist' => 'The Weeknd',
                'album' => 'After Hours',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 22,
                ],
            ],
            [
                'id' => 7,
                'title' => 'Shallow',
                'artist' => 'Lady Gaga & Bradley Cooper',
                'album' => 'A Star Is Born',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 36,
                ],
            ],
            [
                'id' => 8,
                'title' => 'Shape of You',
                'artist' => 'Ed Sheeran',
                'album' => 'Divide',
                'duration' => [
                    'minutes' => 4,
                    'seconds' => 24,
                ],
            ],
            [
                'id' => 9,
                'title' => 'Bohemian Rhapsody',
                'artist' => 'Queen',
                'album' => 'A Night at the Opera',
                'duration' => [
                    'minutes' => 5,
                    'seconds' => 55,
                ],
            ],
            [
                'id' => 10,
                'title' => 'Rolling in the Deep',
                'artist' => 'Adele',
                'album' => '21',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 48,
                ],
            ],
        ]);

        return view('songs.index', [
            'songs' => $songs,
            'songs_count' => count($songs)
        ]);
    }
}
