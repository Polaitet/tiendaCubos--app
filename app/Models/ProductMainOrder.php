<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductMainOrder
 *
 * @property int $id
 * @property int $productId
 * @property int $order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Product $product
 *
 * @package App\Models
 */
class ProductMainOrder extends Model
{
	protected $table = 'product_main_order';

	protected $casts = [
		'productId' => 'int',
		'order' => 'int'
	];

	protected $fillable = [
		'productId',
		'order'
	];

	public function product()
	{
		return $this->belongsTo(Product::class, 'productId');
	}

}
