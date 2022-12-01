<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Expert;


class Experiences extends Model
{
    use HasFactory;
    protected $table='experiences';
    protected $fillable=['expert_id','Consulting'];

    public function Expert()
    {
        return $this->belongsTo(Expert::class);
    }
}
