<?php
namespace App;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
class Utilities{
    public function generateRandomId(){
        $alpha = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $split = str_split($alpha);
        $shuffle = collect($split)->shuffle()->join(' ');
        return Str::substr($shuffle, 0, 60);
    }
}
