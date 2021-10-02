<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductDescription
 * 
 * @property int $id
 * @property int $productId
 * @property string $description
 * @property Carbon $created_at
 * 
 * @property Product $product
 *
 * @package App\Models
 */
class ProductDescription extends Model
{
	protected $table = 'product-description';
	public $timestamps = false;

	protected $casts = [
		'productId' => 'int'
	];

	protected $fillable = [
		'productId',
		'description'
	];

	public function product()
	{
		return $this->belongsTo(Product::class, 'productId');
	}
}
