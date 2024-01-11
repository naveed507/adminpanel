<?php

namespace App\Http\Controllers\Customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function profile()
    {
        return view('customer.master');
    }

    public function dashboard()
    {
        return view('customer.content.dashboard.dashboard');
    }
}
