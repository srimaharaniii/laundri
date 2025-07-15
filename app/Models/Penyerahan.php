<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyerahan extends Model
{
    use HasFactory;
    public function pelanggans(){
        return $this->hasOne(Pelanggan::class, 'id', 'pelanggans_id');
}
    public function jenis(){
    return $this->hasOne(Jenis::class, 'id', 'jenis_id');
}



}