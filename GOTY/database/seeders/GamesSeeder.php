<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $goty = [
            [
                'id' => '1',
                'judul' => 'Pac Man',
                'tahun' => '1980',
                'pengembang' => 'Namco',
                'penerbit' => 'Namco',
                'platform' => 'PC, Arcade, Atari',
            ],
            [
                'id' => '2',
                'judul' => 'Donkey Kong',
                'tahun' => '1981',
                'pengembang' => 'Nintendo',
                'penerbit' => 'Nintendo',
                'platform' => 'Arcade, NES',
            ],
            [
                'id' => '3',
                'judul' => 'Tron',
                'tahun' => '1982',
                'pengembang' => 'Midway',
                'penerbit' => 'Midway',
                'platform' => 'Arcade, Xbox360',
            ],
            [
                'id' => '4',
                'judul' => 'Mario Bros',
                'tahun' => '1983',
                'pengembang' => 'Nintendo',
                'penerbit' => 'Nintendo',
                'platform' => 'Arcade, NES',
            ],
            [
                'id' => '5',
                'judul' => 'Knight Lore',
                'tahun' => '1984',
                'pengembang' => 'Ultimate Game',
                'penerbit' => 'Ultimate Game',
                'platform' => 'BBC Micro, Famicom',
            ],
            [
                'id' => '6',
                'judul' => 'Super Mario Bros',
                'tahun' => '1985',
                'pengembang' => 'Nintendo',
                'penerbit' => 'Nintendo',
                'platform' => 'NES',
            ],
            [
                'id' => '7',
                'judul' => 'Legend of Zelda',
                'tahun' => '1986',
                'pengembang' => 'Nintendo',
                'penerbit' => 'Nintendo',
                'platform' => 'NES, Famicom',
            ],
            [
                'id' => '8',
                'judul' => 'Mike Tyson PO',
                'tahun' => '1987',
                'pengembang' => 'Nintendo',
                'penerbit' => 'Nintendo',
                'platform' => 'Arcade, NES',
            ],
            [
                'id' => '9',
                'judul' => 'Speedball',
                'tahun' => '1988',
                'pengembang' => 'Bitmap Brothers',
                'penerbit' => 'Image Works',
                'platform' => 'PC, Atari, Amiga',
            ],
            [
                'id' => '10',
                'judul' => 'Tetris',
                'tahun' => '1989',
                'pengembang' => 'Nintendo',
                'penerbit' => 'Nintendo',
                'platform' => 'Game boy',
            ],
            [
                'id' => '11',
                'judul' => 'Super Mario World',
                'tahun' => '1990',
                'pengembang' => 'Nintendo',
                'penerbit' => 'Nintendo',
                'platform' => 'SNES',
            ],
            [
                'id' => '12',
                'judul' => 'Sonic Hedgehog',
                'tahun' => '1991',
                'pengembang' => 'Sega',
                'penerbit' => 'Nintendo',
                'platform' => 'Android, IOS, Switchy',
            ],
            [
                'id' => '13',
                'judul' => 'Mortal Kombat',
                'tahun' => '1992',
                'pengembang' => 'Midway',
                'penerbit' => 'Midway',
                'platform' => 'Arcade, SNES',
            ],
            [
                'id' => '14',
                'judul' => 'Doom',
                'tahun' => '1993',
                'pengembang' => 'id Software',
                'penerbit' => 'Softworks',
                'platform' => 'SNES',
            ],
            [
                'id' => '15',
                'judul' => 'DK Country',
                'tahun' => '1994',
                'pengembang' => 'Nintendo',
                'penerbit' => 'Nintendo',
                'platform' => 'Game boy, SNES',
            ],
            [
                'id' => '16',
                'judul' => 'Super Mario World 2',
                'tahun' => '1995',
                'pengembang' => 'Nintendo',
                'penerbit' => 'Nintendo',
                'platform' => 'SNES',
            ],
            [
                'id' => '17',
                'judul' => 'Super Mario 64',
                'tahun' => '1996',
                'pengembang' => 'Nintendo',
                'penerbit' => 'Nintendo',
                'platform' => 'N64',
            ],
            [
                'id' => '18',
                'judul' => 'Goldeneye 007',
                'tahun' => '1997',
                'pengembang' => 'Rare',
                'penerbit' => 'Nintendo',
                'platform' => 'N64',
            ],
            [
                'id' => '19',
                'judul' => 'TLOZ Ocarina Time',
                'tahun' => '1998',
                'pengembang' => 'Nintendo',
                'penerbit' => 'Nintendo',
                'platform' => '	N64, Wii, Wii U',
            ],
            [
                'id' => '20',
                'judul' => 'FF VII',
                'tahun' => '1999',
                'pengembang' => 'Square Enix',
                'penerbit' => 'Square Enix',
                'platform' => 'PS',
            ]
            
        ];
        foreach($goty as $ps) {
            \App\Models\Games::firstOrCreate($ps);
        }
    }
}
