<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
	protected $fillable = ['title','content','slug','status','user_id'];
}