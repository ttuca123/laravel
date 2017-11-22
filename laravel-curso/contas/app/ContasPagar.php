<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContasPagar extends Model
{
    protected $table= 'contas_pagar';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
