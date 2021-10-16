<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductCategory
 * 
 * @property int $id
 * @property int $productId
 * @property int $categoriesId
 * @property Carbon $created_at
 * 
 * @property Category $category
 * @property Product $product
 *
 * @package App\Models
 */
class ProductCategory extends Model
{
	protected $table = 'product-categories';
	public $timestamps = false;

	protected $casts = [
		'productId' => 'int',
		'categoriesId' => 'int'
	];

	protected $fillable = [
		'productId',
		'categoriesId'
	];

	public function category()
	{
		return $this->belongsTo(Category::class, 'categoriesId');
	}

	public function product()
	{
		return $this->belongsTo(Product::class, 'productId');
	}
}
