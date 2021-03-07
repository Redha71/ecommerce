<?php

namespace LamaLama\Wishlist;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB ;

class Wishlist
{
    /**
     * getCount.
     * @return int
     */
    public function getCount(): int
    {
        return DB::table('wishlist')
            ->where('user_id', Auth::id())
            ->count();
    }
}
