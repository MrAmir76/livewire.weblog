<?php

namespace Database\Seeders;

use App\Models\SocialNetworks as Sn;
use Illuminate\Database\Seeder;

class SocialNetworkSeeder extends Seeder
{
    public function run()
    {
        sn::create(['name' => 'telegram', 'address' => 't.me/Mr' . rand(1000, 2000), 'icon' => 'bi bi-telegram']);
        sn::create(['name' => 'instagram', 'address' => 'instagram.com/Mr' . rand(1000, 2000), 'icon' => 'bi bi-instagram']);
        sn::create(['name' => 'twitter', 'address' => 'twitter.com/Mr' . rand(1000, 2000), 'icon' => 'bi bi-twitter']);
    }
}
