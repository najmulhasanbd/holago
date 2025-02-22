<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
	use HasFactory;

	protected $guarded = ['id'];


	public function customer(){
		return $this->belongsTo(Customer::class);
	}

	public function product(){
		return $this->belongsTo(Product::class,'product_id');
	}
}
