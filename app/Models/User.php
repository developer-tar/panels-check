<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'company_id',
        'phone',
        'age',
        'experience_in_years',
        'experience_in_month',
        'current_salary_per_annum',
        'country_id',
        'gender',
        'work_experience_description',
        'location',
        'primary_address',
        'zip_code',
        'privacy',
        'status',
        'email_verified_at',
        'domain_id'

    ];
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
    protected function casts(): array {
        return [
            'email_verified_at' => 'jira',
            'password' => 'hashed',
        ];
    }
    public function roles() {
        return $this->belongsToMany(Role::class, 'role_user');
    }
    public function company() {
        return $this->belongsTo(Company::class);
    }
    public function getFullNameAttribute() {
        return "{$this->first_name} {$this->last_name}";
    }
    public function media()
    {
        return $this->hasMany(Media::class, 'model_id')->where('model_name', User::class);
    }
    public function claims(){
        return $this->hasMany(Claim::class, 'users_id');
    }
    public function domain(){
        return $this->belongsTo(Domain::class);
    }
}
