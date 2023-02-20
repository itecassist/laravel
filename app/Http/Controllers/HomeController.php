<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use App\Models\UserSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.home');
    }

    public function selectcompany()
    {
        session()->put('user_settings', UserSetting::where('user_id', auth()->id())->first()->toArray());
        $companies = User::with('companies')->find(auth()->id());
        return view('admin.home', compact('companies'));
    }

    public function setCompany()
    {
        $validate = Validator::make(request()->all(), ['company'=>'required|numeric']);
        /* Create company Session */
        session()->put('company', Company::find(request('company'))->toArray());
        return redirect()->route('dashboard');
    }
}
