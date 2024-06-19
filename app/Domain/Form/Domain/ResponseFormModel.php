<?php

namespace App\Domain\Form\Domain;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $full_name
 * @property int $phone
 * @property string $message
 */
final class ResponseFormModel extends Model
{
    protected $table = 'response_form';
    protected $primaryKey = 'id';

    protected $fillable = [
        'full_name',
        'phone',
        'message'
    ];
}
