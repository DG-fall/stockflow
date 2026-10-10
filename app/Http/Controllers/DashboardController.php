<?php
namespace App\Http\Controllers; use App\Models\{Product,StockMovement,Order};
class DashboardController extends Controller {public function __invoke(){return view('dashboard.index',['products'=>Product::with('supplier')->latest()->limit(8)->get(),'movements'=>StockMovement::with('product')->latest()->limit(6)->get(),'stats'=>['products'=>Product::count(),'low'=>Product::whereColumn('quantity','<=','minimum_stock')->count(),'value'=>Product::selectRaw('COALESCE(SUM(quantity * unit_price),0) total')->value('total'),'orders'=>Order::whereIn('status',['draft','sent'])->count()]]);}}
