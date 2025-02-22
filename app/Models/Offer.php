<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
	use HasFactory;

	protected $guarded = ['id'];
		

	public function offer_product(){
		return $this->hasMany(OfferProduct::class);
	}
}
