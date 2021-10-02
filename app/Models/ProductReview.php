<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductReview
 * 
 * @property int $id
 * @property int $productId
 * @property int $stars
 * @property string $description
 * @property Carbon $created_at
 * 
 * @property Product $product
 *
 * @package App\Models
 */
class ProductReview extends Model
{
	protected $table = 'product-reviews';
	public $timestamps = false;

	protected $casts = [
		'productId' => 'int',
		'stars' => 'int'
	];

	protected $fillable = [
		'productId',
		'stars',
		'description'
	];

	public function product()
	{
		return $this->belongsTo(Product::class, 'productId');
	}
}
