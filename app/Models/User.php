<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enums\UserRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',    // 使用者可自行填寫
        'password',
        // 注意 : role 刻意不放此處，防止 Mass Assignment 攻擊
        // 角色變更只能透過伺服器端程式碼指定 $user->role = UserRole::Admin
    ];

    /**
     * 序列化時隱藏的屬性。
     * 防止將機敏資訊暴露在API JSON中
     * 
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * 屬性型別轉換。
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password'          => 'hashed',
            'role'              => UserRole::class, // Enum cast : 非法值無法寫入
        ];
    }

    /**
     * 判斷使用者是否為管理員（供 Blade / Policy 使用）
     */
    public function isAdmin(): bool
    {
        return $this->role === UserRole::Admin;
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
