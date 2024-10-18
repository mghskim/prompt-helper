<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    public function roles() {
        return $this->belongsToMany(Role::class);
    }
    
    public function assignRole($role) {
        return $this->roles()->attach($role);
    }
    
    public function hasRole($role) {
        return $this->roles()->where('name', $role)->exists();
    }

    public function getRoleName(){
        return ucfirst($this->roles()->first()->name ?? 'No Role');
    }

    public function readableCreatedAt() {
        return Carbon::parse($this->created_at)->format('F j, Y');
    }

    public function scopeCreatedAt(Builder $query) {
        $query->where('created_at', '<=', Carbon::now());
    }

    public function readableVerifiedAt() {
        return Carbon::parse($this->email_verified_at)->format('F, Y');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function posts() {
        return $this->hasMany(Post::class, 'user_id');
    }

    public function likes(){
        return $this->belongsToMany(Post::class, 'post_like')->withTimestamps();
    }

    public function likeCount(){
        return $this->likes()->count();
    }

    public function hasLiked(Post $post){
        return $this->likes()->where('post_id', $post->id)->exists();
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}

