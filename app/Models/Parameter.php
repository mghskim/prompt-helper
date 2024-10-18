<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder; 
use Carbon\Carbon;

class Parameter extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'type',
        'image',
        'text_color',
        'custom',
        'created_at',
        'updated_at',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
        ];
    }

    public function readableCreatedAt() {
        return Carbon::parse($this->created_at)->format('F j, Y');
    }

    public function scopeCreatedAt(Builder $query) {
        $query->where('created_at', '<=', Carbon::now());
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
