<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; // nama tabel di database
    protected $primaryKey = 'user_id'; // kolom primary key

    protected $fillable = [
        'username',
        'nama',
        'password',
        'level_id',
    ];

    public $timestamps = false; // jika tabel tidak memiliki kolom created_at & updated_at
    // 🔗 Relasi ke tabel Level
    public function level()
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
}
