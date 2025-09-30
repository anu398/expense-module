<?php

namespace Modules\Expenses\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Expense extends Model
{
    use HasFactory;
    protected $keyType = 'string';

    protected $fillable = ['id', 'title', 'amount', 'category', 'expense_date', 'notes'];
    protected $casts = [
        'amount' => 'decimal:2',
        'expense_date' => 'date',
    ];

     public function getRouteKeyName()
    {
        return 'uuid';
    }

   protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
}
