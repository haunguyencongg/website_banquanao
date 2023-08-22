<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckOutController extends Controller
{
    //
    public function index(){

        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.checkout.index', compact('carts', 'total', 'subtotal'));
    }

    public function addOrder(Request $request){

        // 01. Thêm đơn hàng
        $order = Order::create($request -> all());


        // 02. Thêm chi tiết đơn hàng
        $carts = Cart::content();

        foreach($carts as $cart) {
            $data = [
                'order_id' => $order -> id,
                'product_id' => $cart -> id,
                'qty' => $cart -> qty,
                'amount' => $cart -> price,
                'total' => $cart -> price * $cart -> qty,
            ];

            OrderDetail::create($data);
        }

        // 03. Xóa giỏ hàng
        Cart::destroy();


        // 04. Trả về kết quả
        return redirect('checkout/result') -> with('notification', 'Chúc mừng bạn đã đặt hàng thành công !!!');

    }

    public function result() {

        $notification = session(key: 'notification');
        return view('front.checkout.result', compact('notification'));
    }
}
