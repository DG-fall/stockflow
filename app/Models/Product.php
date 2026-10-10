<?php
namespace App\Models; use Illuminate\Database\Eloquent\Model;
class Product extends Model {protected $fillable=['supplier_id','sku','name','description','quantity','minimum_stock','unit_price','location'];protected function casts():array{return ['unit_price'=>'decimal:2'];}public function supplier(){return $this->belongsTo(Supplier::class);}public function movements(){return $this->hasMany(StockMovement::class);}public function orderItems(){return $this->hasMany(OrderItem::class);}public function isLowStock():bool{return $this->quantity<=$this->minimum_stock;}}
