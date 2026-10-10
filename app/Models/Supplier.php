<?php
namespace App\Models; use Illuminate\Database\Eloquent\Model;
class Supplier extends Model {protected $fillable=['name','email','phone','contact_name'];public function products(){return $this->hasMany(Product::class);}public function orders(){return $this->hasMany(Order::class);}}
