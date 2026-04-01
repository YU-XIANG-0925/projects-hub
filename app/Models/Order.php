<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    /**
     * 可批量賦值的屬性。
     * 嚴格定義以防止 Mass Assignment 漏洞。
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'product_name',
        'quantity',
    ];

    /**
     * 屬性型別轉換。
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'quantity' => 'integer',
        ];
    }

    // 定義與 User 模型的關聯
    // 取得擁有該訂單的使用者
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
