<?php
namespace App\Models; use Illuminate\Database\Eloquent\Model;
class Order extends Model {protected $fillable=['supplier_id','reference','status','ordered_at','received_at','notes'];protected function casts():array{return ['ordered_at'=>'date','received_at'=>'date'];}public function supplier(){return $this->belongsTo(Supplier::class);}public function items(){return $this->hasMany(OrderItem::class);}}
