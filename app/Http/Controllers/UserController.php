<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facade\DB;
use Illuminate\Http\Request;
use App\Models\User;
use DataTables;

class UserController extends Controller
{
    public function index(Request $request)
    {
      // dd($request->all());
        // \Log::info($data);
        if ($request->ajax()) {
            //$data=DB::table('users')->get();
            $data = User::select('id','name','email','email_verified_at','gender','address','language','phonenumber','role','remember_token','created_at','updated_at',)->get();
            ;
            dd($data);
         
          return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
    
              $btn = ' &nbsp;&nbsp;<a href="javascript:void(0);" id="' . $row->id . '" class="delete">🗑️</a>';
              return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
            return view('frontend.totalregistration');
        }
     
    
    
         }
      
    }

