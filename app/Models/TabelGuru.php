<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class TabelGuru extends Model
{
    protected $table = 'tabel_guru';
    protected $fillable = ['id','foto', 'nama', 'nip', 'tanggal_lahir', 'jenis_kelamin' , 'jabatan',  'status_kepegawaian'];
    public $timestamps = false;
}