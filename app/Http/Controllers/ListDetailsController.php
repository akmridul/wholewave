<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;

class ListDetailsController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->put('user_id', $user->id);
            $request->session()->put('username', $user->username);

            return redirect()->intended('/list-orders');
        }
        return redirect()->back()->withInput()->withErrors(['login_error' => 'Invalid credentials']);
    }

    public function listDetails(){

        $loggedInUserId = Auth::id();
        $orders = Order::join('users', 'orders.user_id', '=', 'users.id')
            ->where('orders.user_id', $loggedInUserId)
            ->select('orders.*', 'users.name as user_name', 'users.email as user_email')
            ->get();

            foreach ($orders as $order) {
                $order->products_list = trim($order->products_list, "[]");;
                $productIds = explode(',', $order->products_list);
    
                $productNames = DB::table('products')
                    ->whereIn('id', $productIds)
                    ->pluck('product_name')
                    ->implode(', ');
    
                $order->product_names = $productNames;
            }

        return view('listdetails', ['orders' => $orders]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
