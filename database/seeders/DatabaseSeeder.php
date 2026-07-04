<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Film::create([
            'title' => 'Dandora Nights',
            'slug' => 'dandora-nights',
            'poster_url' => 'https://loremflickr.com/600/900/nairobi,street,night',
            'logline' => 'A slum DJ unearths a fortune buried beneath his estate - and three nights to decide who deserves it.',
            'synopsis' => 'In the heart of Dandora, seventeen-year-old DJ Mtaa unearths a bag of unmarked cash while digging a foundation for his mothers new kiosk. As word spreads through the estate, old grudges resurface, a corrupt councilman circles, and Mtaa must choose between vanishing with the money or using it to save the community that raised him.',
            'cast' => 'Brian Ogana, Faith Wanjiku, Otieno Kadaghe',
            'release_date' => '2026-10-02',
            'trailer_url' => 'https://www.youtube.com/embed/MIZWu26ThTM',
        ]);

        Film::create([
            'title' => 'Route 46',
            'slug' => 'route-46',
            'poster_url' => 'https://loremflickr.com/600/900/matatu,traffic,africa',
            'logline' => 'One matatu. One unforgettable rush hour. A citys worth of stories collide.',
            'synopsis' => 'On a gridlocked Thika Road afternoon, a matatu crew - a hustling conductor, a nervous first-time driver, and a busload of strangers - become entangled in a proposal gone wrong, a runaway bride, and a robbery in progress, all before the sun sets over Nairobis skyline.',
            'cast' => 'Njoki Karanja, Kevin Mwangi, Aisha Bakari',
            'release_date' => '2026-11-14',
            'trailer_url' => 'https://www.youtube.com/embed/xzzn2KEiBys',
        ]);

        Film::create([
            'title' => 'Tides of Lamu',
            'slug' => 'tides-of-lamu',
            'poster_url' => 'https://loremflickr.com/600/900/lamu,dhow,ocean',
            'logline' => 'She left Lamu at seventeen to escape a secret. Twenty years later, the tide brings it home.',
            'synopsis' => 'When acclaimed architect Amina Sharif returns to her childhood home on Lamu Island to bury her estranged father, she uncovers letters revealing the real reason she was sent away - and a family debt that threatens to swallow the islands last dhow-building family.',
            'cast' => 'Amina Rashid, Salim Bakari, Grace Njeri',
            'release_date' => '2027-02-06',
            'trailer_url' => 'https://www.youtube.com/embed/RYJYmNW8Kak',
        ]);
    }
}
