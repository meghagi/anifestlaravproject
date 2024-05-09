<?php

namespace App\Http\Controllers;
use App\Models\User; 
use App\Models\Events; 
use App\Models\Speaker; 
use App\Models\TotalTicket;
use App\Models\WebTraffic;
use Illuminate\Support\Facade\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DataTables;


class Sidebar extends Controller
{
    public function Dashboard()
    {
        return view('frontend.dashboard');
    }
    public function landing()
    {
        return view('frontend.landing-page');
    }
    public function element()
    {
        return view('frontend.element');
    }
    public function schedulelist()
    {
        return view('frontend.schedule-list');
    }
    public function speakerlist()
    {
        return view('frontend.speaker-list');
    }
    public function attendantlist()
    {
        return view('frontend.attendantlist');
    }
    public function eventlist()
    {
        return view('frontend.event-list');
    }
    public function profile()
    {
        return view('frontend.profile');
    }
    public function createevent()
    {
        return view('frontend.create-event');
    }
   
    public function eventdetails()
    {
        return view('frontend.event-details');
    }
    public function calendar()

    {
        return view('frontend.calendar');
    }
    public function venue()
    
    {
        return view('frontend.venue');
    }
    public function setting()
    
    {
        return view('frontend.setting');
    }
    public function chat()
    
    {
        return view('frontend.chat');
    }
    public function update()
    
    {
        return view('frontend.update');
    }
    public function edit($id)
    {
        echo $id;
        $user = User::find($id);
        /*echo "<pre>";
        print_r($customer);
        */
        if (is_null($user)) {
            return redirect('frontend.profile');
        } else {
            // Corrected the variable name and assignment
          $title="Update user";
            $data=compact('user', 'title');
            return view('frontend.update')->with($data);
       
    }


}


public function update1($id, Request $request)
{
    //dd($request->all()); 
    $request->validate([
        
        'gen' => 'required',
        'phone' => 'required',
        'language' => 'required',
        'adderess' => 'required',
    ]);
    
    
    print_r($request->all()); 

    // If validation passes, continue with your logic here

    // Example: Update the user record in the database
   
    // Redirect or return a response indicating success
    $user = User::find($id);

    // Check if the customer exists
    if ($user) {
        // Update the customer details
       $user->phonenumber=$request['phone'];
        $user->gender = $request['gen'];
        $user->language = $request['language'];
        $user->adderess = $request['adderess'];
       
        
       /* $customer->password = md5($request['Password']);*/ // Use bcrypt for password hashing
        $user->save();

        return redirect('/profile');
    } else {
        // Handle the case where the customer with the given ID was not found
        return redirect()->back()->with('error', 'User not found');
    }
 
}
public function admindashboard()
{
    return view('frontend.admindashboard');
}


// public function welcome()
// {
//     $request->validate(
//         [
//             'email' => 'required|email',
//             'password' => 'required',
//         ]
//         );

//     if ($request->isMethod('post')) {

//         $user = \DB::table('users')->where('email',$request->email)->first();
//         if($user){
            
//             Session::put('user',$user);
//             // dd(Session::get('user'));
//             if($user->Role=='admin'){
//                 return redirect()->route('admindashboard');
//             }
//         }
// }
// }
// public function welcome(Request $request)
//     {
//         $request->validate([
//             'email' => 'required|email',
//             'password' => 'required',
//         ]);

        //$email = $request->input('email');
        //  $password = $request->input('pwd');

       // $user = Users::where('email', $email)->first();
        //dd($user);
        // if (!$user || !password_verify($password, $user->password)) {
        //     return redirect()->back()->with('error', 'Invalid credentials');
        // }

       
        //  if($user)
        //  {
        //      session()->put('user',$user);
        // switch ($user->Role) {
        //     case 'admin':
        //         return redirect()->route('admin1');
        //     case 'admission':
        //         return redirect()->route('admission');
        //     case 'teacher':
        //         return redirect()->route('teacher');
        //     case 'student':
        //         return redirect()->route('student');
        //     default:
        //         return redirect()->back()->with('error', 'Invalid role');
        //     }
        // }
        //  if ($request->isMethod('post')) {
          

        //     if($user){
        //         //dd($user);
        //         Session::put('user',$user);
                
        //         // dd(Session::get('user'));
        //         if($user->Role=='admin'){
        //             return redirect()->route('admindashboard');
        //         }elseif($user->Role=='user'){
        //             return redirect()->route('dashboard');
        //         }
        //         // elseif($user->Role=='teacher'){
                //     return redirect()->route('teacher');
                // }elseif($user->Role=='student'){
                //     return redirect()->route('student');
                 
                // }
                

// public function welcome()
// {
//     if(Auth::id())
//     {
//         $role = Auth::user()->role; // Corrected the property name to lowercase
//         if($role == 'admin')
//         {
//             return view('frontend.admindashboard');
//         }
//         elseif($role == 'user')
//         {
//             return view('frontend.dashboard');
//         }
//     }
    
//     // Add a default return statement if none of the conditions are met
//     return redirect()->route('login'); // Redirect to login page or any other default page
// }
public function total_registration(Request $request)
{
    $data=User::get();
    if ($request->ajax()) {
     
       // $data = User::select('id','name','email','password','language','phonenumber','address','gender','role')->get();
        // Remove this line after debugging
   
        
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                return $btn;
                // $btn = ' &nbsp;&nbsp;<a href="javascript:void(0);" id="' . $row->id . '" class="delete">🗑️</a>';
                // $btn = $btn . '<a href="mailto:aishrashasoni84063@gmail.com" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#' . $row->id . '">Resolve Query</a>';
                // return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
           // return response()->json($data);
           //return response()->json(['data' => $data]);
            }
    
    return view('frontend.totalregistration',compact('data'));
   // if ($request->ajax()) {
    //     $data = User::all(); // Retrieve all user data from the database
    //     return response()->json(['data' => $data]); // Return the data as JSON
    // }
    
    //return view('frontend.totalregistration');

}

public function total_speaker(Request $request)
{
    $data=Speaker::all();
    if ($request->ajax()) {
     
        //$data = User::select('id','name','email')->get();
        // Remove this line after debugging
   
        
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<a href="javascript:void(0)"data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Edit"class="edit btn btn-primary btn-sm"; style="color:white";>Edit</a>';
              
                
                return $btn;
                // $btn = ' &nbsp;&nbsp;<a href="javascript:void(0);" id="' . $row->id . '" class="delete">🗑️</a>';
                // $btn = $btn . '<a href="mailto:aishrashasoni84063@gmail.com" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#' . $row->id . '">Resolve Query</a>';
                // return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
           // return response()->json($data);
           //return response()->json(['data' => $data]);
            }
    
    return view('frontend.totalspeaker',compact('data'));
  
   
   
    return view('frontend.totalspeaker');
}
public function newevents()
{
    return view('frontend.newevents');
}
public function total_ticket( Request $request)

{
    $data=TotalTicket::all();
    if ($request->ajax()) {
     
        //$data = User::select('id','name','email')->get();
        // Remove this line after debugging
   
        
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<a href="javascript:void(0)"data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Edit"class="edit btn btn-primary btn-sm"; style="color:white";>Edit</a>';
              
                
                return $btn;
                // $btn = ' &nbsp;&nbsp;<a href="javascript:void(0);" id="' . $row->id . '" class="delete">🗑️</a>';
                // $btn = $btn . '<a href="mailto:aishrashasoni84063@gmail.com" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#' . $row->id . '">Resolve Query</a>';
                // return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
           // return response()->json($data);
           //return response()->json(['data' => $data]);
            }
   
   
   
    return view('frontend.totalticket',compact('data'));

}
public function web_traffic()
{
    return view('frontend.webtraffic');
}
public function schedule_events(Request $request)
{
    
    $data=Events::all();
    if ($request->ajax()) {
     
        //$data = User::select('id','name','email')->get();
        // Remove this line after debugging
   
        
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                return $btn;
                // $btn = ' &nbsp;&nbsp;<a href="javascript:void(0);" id="' . $row->id . '" class="delete">🗑️</a>';
                // $btn = $btn . '<a href="mailto:aishrashasoni84063@gmail.com" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#' . $row->id . '">Resolve Query</a>';
                // return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
           // return response()->json($data);
           //return response()->json(['data' => $data]);
            }
    
   
    
    
    return view('frontend.scheduleevents',compact('data'));
}
// public function totalregistrationview()
// {
//     $user=User::all();//$customer is object
//           /*echo "<pre>";
//           print_r($customer);
//           echo"</pre>";*/
//           //die;
          
//          $data =compact('user');//customer is a key
//           return view('frontend.totalregistration')->with($data);
// }
// public function adminauth()
// {
//     if (Auth::check()) {
//         // Retrieve authenticated user
//         $user = Auth::user()== 'user';
//         // Your logic for user dashboard
//         return redirect()->route('dashboard');
//     } else {
//         // Redirect to login or handle unauthorized access
//         return redirect()->route('admindashboard');
//     }
// }
public function user()
    {
        if (auth()->user()->role === 'user') {
            return view('frontend.dashboard');
        } else {
            return redirect()->route('/user/dashboard'); // Redirect unauthorized access to login page
        }
    }

    // public function admin()
    // {
    //     if (auth()->user()->role === 'admin') {
    //         return view('frontend.admindashboard');
    //     } else {
    //         return redirect()->route('/admin/dashboard'); // Redirect unauthorized access to login page
    //     }
    // }
    public function neweventsstore(Request $request)
    {
        $request->validate([
            'eventname' => 'required',
            'dress' => 'required',
            'creationdate' => 'required',
            'cost'=>'required',
            'type'=>'required',
        ]);
        // print_r($request->all()); 
        $event= new Events;
        $event->EventName=$request['eventname'];
        $event->CreationDate=$request['creationdate'];
        $event->Dress=$request['eventname'];
        $event->cost=$request['cost'];
        $event->type=$request['type'];
        $event->save();

    }

    // public function adminmanagequery(Request $request)
    //      {
    //     //     $users=\DB::table('users');
    //     //     $total=$users->count();
    //     //     $totalfilter=$total;
    //     //     $arrData=\DB::table('users');
    //     //     dd($arrData);
    //     //     $arrData= $arrData->skip(start)->take($rowPerPage);
    //     //    $arrData= $arrData->get();
    //     //      $response = array(
    //     //         "draw" => intval($draw),
    //     //         "recordsTotal" => $total,
    //     //         "recordsFiltered" => $totalFilter,
    //     //         "data" => $arrData,
    //     //      );
    //     //      return response()->json($response);
    
    //   // $data = User::all();
    //     // \Log::info($data);
    //     if ($request->ajax()) {
    //         //$data=DB::table('users')->get();
    //         $data = User::all();
    //       return Datatables::of($data)
    //         ->addIndexColumn()
    //         ->addColumn('action', function ($row) {
    
    //           $btn = ' &nbsp;&nbsp;<a href="javascript:void(0);" id="' . $row->id . '" class="delete">🗑️</a>';
    //           return $btn;
    //         })
    //         ->rawColumns(['action'])
    //         ->make(true);
    //     }
     
    //     return view('frontend.totalregistration');
    
    //      }

    // public function adminmanagequery(Request $request)
    // {
        
    // //   // dd($request->all());
    // //     // \Log::info($data);
    // //     if ($request->ajax()) {
    // //         //$data=DB::table('users')->get();
    // //         $data = User::all();
    // //         dd($data);
         
    // //       return Datatables::of($data)
    // //         ->addIndexColumn()
    // //         ->addColumn('action', function ($row) {
    
    // //           $btn = ' &nbsp;&nbsp;<a href="javascript:void(0);" id="' . $row->id . '" class="delete">🗑️</a>';
    // //           return $btn;
    // //         })
    // //         ->rawColumns(['action'])
    // //         ->make(true);
    // //         return view('frontend.totalregistration');
    
    // if ($request->ajax()) {
                
    //     $data = User::select('id','name','email','email_verified_at','gender','address','language','phonenumber','role','remember_token','created_at','updated_at',)->get();
    //     return Datatables::of($data)->addIndexColumn()
    //         ->addColumn('action', function($row){
    //             $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
    //             return $btn;
    //         })
    //         ->rawColumns(['action'])
    //         ->make(true);
    // }

    // return view('frontend.totalregistration');


     public function save_speaker(Request $request)
     {
        $speaker= new Speaker;
        print_r($speaker->all());
        $speaker->Name=$request['EventName']; 
        $speaker->bio=$request['Bio'];
        $speaker->email=$request['email'];
        $speaker->adderess=$request['adderess'];
        $speaker->city=$request['city'];
        $speaker->phone=$request['phone'];
        $speaker->description=$request['description'];
        $speaker->sessiontype=$request['sessiontype'];
        $speaker->sessiontitle=$request['sessiontitle'];
        $speaker->eventid =$request['eventid'];
        $speaker->image=$request['image'];
        $speaker->save();
        return redirect()->back()->with('status', 'Speaker added');
      
     }
    
    public function save_ticket(Request $request)
    {
        $totalticket= new TotalTicket;
        $totalticket->ticketid= $request['ticketid '];
        $totalticket->eventid = $request['eventid'];
        $totalticket->cost= $request['cost'];
        $totalticket->Quantity= $request['Quantity '];
        $totalticket->type= $request['type'];
        $totalticket->startDate= $request['startDate'];
        $totalticket->endDate= $request['endDate'];
        $speaker->save();
        return redirect()->back()->with('status', 'Ticket added');
    }
         
public function savewebtraffic(Request $request)
{
 $webtraffic = new WebTraffic;
 $webtraffic->CompanyName=$request['Companyname'];
 $webtraffic->Product=$request['Product'];
 $webtraffic->NumberofVisitor=$request['NumberofVisitor'];
 $webtraffic->NumberofVisit=$request['NumberofVisit'];
 $webtraffic->cost=$request['Cost'];
 $webtraffic->BounceRate=$request['Bouncerate'];
 $webtraffic->save();
}
}
    
    
        


