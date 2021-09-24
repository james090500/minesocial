<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\PlayerCache;

class ProfileController extends Controller {

    public function getProfile(Request $request, $uuid) {
        $user = PlayerCache::get($uuid);

        //Tempoary friends logic
        $user->friend = (object) [
            'isFriend' => true,
            'requestSent' => false,
            'requestRecieved' => false
        ];

        return $user;
    }

}
