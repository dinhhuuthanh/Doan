<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetal extends Model
{
    use HasFactory;
    protected $table = 'invoices_detail';
    protected $fillable = [
        'invoice_id',
        'product_id',
        'quantity',
        'price',
    ];
    public function product(){
      return  $this->belongsTo(Product::class, 'product_id');
    }
    
}
