<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = "invoices";
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'payment_method',
        'total_price',
        'description',
        'status',
    ];
    public function invoiceDetails(){
        return $this->hasMany(InvoiceDetal::class, 'invoice_id');
    }
}
