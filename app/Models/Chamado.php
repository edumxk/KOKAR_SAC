<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Chamado extends Model
{
    public static function getChamados()
    {
        return DB::connection('oracle')->select('SELECT * FROM ratuser');
    }
    use HasFactory;
}
