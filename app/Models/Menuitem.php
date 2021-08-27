<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Menuitem
 * 
 * @property int $id
 * @property int $order
 * @property string $url
 * @property string $name
 * @property bool $active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Menuitem extends Model
{
	protected $table = 'menuitems';

	protected $casts = [
		'order' => 'int',
		'active' => 'bool'
	];

	protected $fillable = [
		'order',
		'url',
		'name',
		'active'
	];
}
