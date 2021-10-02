<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductsFoto
 * 
 * @property int $id
 * @property int $productId
 * @property string $url
 * @property int $order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property bool $mainPhoto
 * 
 * @property Product $product
 *
 * @package App\Models
 */
class ProductsFoto extends Model
{
	protected $table = 'products_fotos';

	protected $casts = [
		'productId' => 'int',
		'order' => 'int',
		'mainPhoto' => 'bool'
	];

	protected $fillable = [
		'productId',
		'url',
		'order',
		'mainPhoto'
	];

	public function product()
	{
		return $this->belongsTo(Product::class, 'productId');
	}
}
