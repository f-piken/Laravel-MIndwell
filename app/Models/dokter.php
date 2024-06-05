<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    protected $table = 'dokters';
    protected $primaryKey = 'id_dokter';
    public $incrementing = true;
    protected $fillable = ['nama_dokter', 'jml_janji', 'gaji'];
    public $timestamps = false;

}
