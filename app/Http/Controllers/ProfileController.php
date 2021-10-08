<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\PlayerCache;

class ProfileController extends Controller {

    /**
     * Do a search for a user
     *
     * @param  Request $request
     * @return Response
     */
    public function doSearch(Request $request) {
        $request->validate([
            'search' => 'required|min:0|max:16'
        ]);

        $cache = PlayerCache::get($request->search);
        if($cache == null) {
            return response()->json(['success' => false], 400);
        }

        //TODO Check if user is registered
        // if(!User::exists($cache->uuid)) {
        //     return response()->json(['success' => false], 400);
        // }

        return response()->json(['success' => true, 'uuid' => $cache->uuid]);
    }

    /**
     * Gets the users profile by a uuid
     *
     * @param  Request $request
     * @param  String $uuid
     * @return Response
     */
    public function getProfile(Request $request, $uuid) {
        $user = PlayerCache::get($uuid);

        //Verified stuff
        $user->verified = true;

        //Tempoary friends logic
        $user->friend = (object) [
            'isFriend' => false,
            'requestSent' => false,
            'requestRecieved' => false
        ];

        return $user;
    }

}
