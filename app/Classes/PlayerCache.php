<?php

namespace App\Classes;

use Illuminate\Support\Facades\Http;

class PlayerCache {

    /**
     * Try and find the player
     *
     * @param  mixed $value
     * @return Object
     */
    public static function get($value) {
        if(preg_match("/^[a-fA-F0-9]{32}$/", $value)) {
            $cache = self::getApiResponse($value);
        } else if(preg_match("/^[a-zA-Z0-9_]{1,16}$/", $value)) {
            $cache = self::getApiResponse($value);
        } else {
            return null;
        }

        return $cache;
    }

    /**
     * Inserts items into the cache
     *
     * @param  mixed $uuid
     * @param  mixed $username
     * @return void
     */
    public static function insert($uuid, $username) {
        if($uuid == null || $username == null) {
            return false;
        }

        $result = (object) [
            "username" => $username,
            "uuid" => $uuid
        ];

        //Cache for username and uuid
        cache()->tags(['cache'])->put($username, $result, 600);
        cache()->tags(['cache'])->put($uuid, $result, 600);

        return $result;
    }

    /**
     * Updates the uuid cache
     *
     * @param  String $uuid Players uuid to update
     * @param  String $username Players username to update
     * @return void
     */
    private static function getApiResponse($value) {
        $cache = cache()->tags(['cache'])->get($value);
        if($cache != null) {
            return cache()->tags(['cache'])->get($value);
        }

        try {
            $response = Http::retry(3, 100)->get("https://minecraftapi.net/api/v1/profile/$value");
            if($response->successful()) {
                $uuid = $response->json()['uuid'];
                $username = $response->json()['name'];

                return self::insert($uuid, $username);
            } else {
                return null;
            }
        } catch(\Illuminate\Http\Client\RequestException $e) {
            return null;
        }
    }
}