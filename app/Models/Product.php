<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $id
 * @property string $EAN
 * @property string $name
 * @property float $price
 * @property int $stock
 * @property bool $magnet
 * @property bool $sticker
 * @property string $dimensions
 * @property string $brand
 * @property float $weight
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|ProductMainOrder[] $product_main_orders
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';

	protected $casts = [
		'price' => 'float',
		'stock' => 'int',
		'magnet' => 'bool',
		'sticker' => 'bool',
		'weight' => 'float'
	];

	protected $fillable = [
		'EAN',
		'name',
		'price',
		'stock',
		'magnet',
		'sticker',
		'dimensions',
		'brand',
		'weight'
	];

	public function product_main_orders()
	{
		return $this->hasMany(ProductMainOrder::class, 'productId');
	}
}
