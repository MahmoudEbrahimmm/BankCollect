<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class invoices extends Model
{
    protected $fillable = [
        'id',
        'invoice_number',
        'invoice_date',
        'due_date',
        'product',
        'section',
        'descount',
        'rate_vat',
        'value_vat',
        'total',
        'status',
        'value_status',
        'note',
        'user',
    ];
}
