<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TenancyRentChange extends Model
{
    use HasFactory;

    /**
     * Get the tenancy that owns the TenancyRentChange
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class);
    }

    /**
     * Get the originalCurrency that owns the TenancyRentChange
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function originalCurrency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }

    /**
     * Get the newCurrency that owns the TenancyRentChange
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function newCurrency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }
}
