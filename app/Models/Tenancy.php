<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tenancy extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the Tenancy
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tenantDetails(): BelongsTo
    {
        return $this->belongsTo(TenantDetails::class);
    }

    /**
     * Get the property that owns the Tenancy
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    /**
     * Get the rentalUnit that owns the Tenancy
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rentalUnit(): BelongsTo
    {
        return $this->belongsTo(RentalUnit::class);
    }

    /**
     * Get the currency that owns the Tenancy
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }

    /**
     * The payments that belong to the Tenancy
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function payments(): BelongsToMany
    {
        return $this->belongsToMany(Payment::class, 'tenant_payments');
    }

    /**
     * Get all of the refunds for the Tenancy
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function refunds(): HasMany
    {
        return $this->hasMany(TenantRefund::class);
    }
}
