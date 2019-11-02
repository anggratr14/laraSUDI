<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Siswa extends Model
{
    //setup table
    protected $table = 'tbl_siswa';

    //setup primary key
    protected $primaryKey = 'nis';

}
