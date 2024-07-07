<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $orders = Order::where('status', 'Pending')
            ->where('user_id', $user->id)
            ->get();

        $totalDonatedAmount = $orders->sum('amount');

        $updated =User::where('id', $user->id)
         ->update(['total_donated' => $totalDonatedAmount]);


        // Retrieve the users from the database
        $users = User::all();

        // Get the highest donated amount
        $highestDonatedAmount = $users->max('total_donated');

        return view('dashboard', compact('orders', 'totalDonatedAmount', 'highestDonatedAmount'));
    }
}

