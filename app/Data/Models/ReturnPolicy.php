<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Data\Models\ReturnPolicy
 *
 * @property int $id
 * @property int $invoice_id
 * @property int $user_id
 * @property int $product_id
 * @property int $salesman_id
 * @property string $amount
 * @property string $qty
 * @property string $description
 * @property string $return_date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\ReturnPolicy whereAmount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\ReturnPolicy whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\ReturnPolicy whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\ReturnPolicy whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\ReturnPolicy whereInvoiceId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\ReturnPolicy whereProductId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\ReturnPolicy whereQty($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\ReturnPolicy whereReturnDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\ReturnPolicy whereSalesmanId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\ReturnPolicy whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\ReturnPolicy whereUserId($value)
 * @mixin \Eloquent
 */
class ReturnPolicy extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'return_policies';
}
