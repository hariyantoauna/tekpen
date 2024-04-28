<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    protected $with = ['active',];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

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

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('username', 'like', '%' . $search . '%');
        });


        $query->when(
            $filters['active'] ?? false,
            fn ($query, $active) =>
            $query->whereHas(
                'active',
                fn ($query) =>
                $query->where('id', $active)
            )
        );
    }


    public function active()
    {
        return $this->belongsTo(UserActive::class, 'user_active');
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            $user->biodata()->create([
                'user_id' => $user->id, // Tambahkan user_id dengan nilai yang sama seperti id user yang baru dibuat

                // tambahkan field lain yang ingin Anda isi secara otomatis
            ]);
        });


        static::deleting(function ($user) {
            $user->biodata()->delete();
        });
    }
    public function biodata()
    {
        return $this->hasOne(Biodata::class);
    }
}
