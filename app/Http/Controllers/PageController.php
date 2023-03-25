<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // include DB Class
use Illumniate\Support\Facades\Auth;
use App\Models\Bus;
use App\Models\admin_tbl;
use Carbon\Carbon;

class PageController extends Controller
{
    //


    function home()
    {
            $bus_db = DB::table('admin_tbls')
                ->orderBy('created_at', 'desc')
                ->get();
        return view("home", ["tpl_admin" => $bus_db]);
        //return view('home'); //render view
    }
    function home_fastest(Request $request)
    {

        //$movie_db = DB::select("select * from tbl_movies");

        //Get limit
        //$movie_db = DB::table('tbl_movies')->limit(1)->get();

        //$movie_db = DB::table('tbl_movies')->get();

        $bus_db = DB::table('bus_tbl')
            ->orderBy('time_diff', 'asc')
            //->limit(10)
            ->get(); // Query SQL

        return view("home", ["tpl_bus" => $bus_db]);
        //return view('home'); //render view

    }
    function home_cheapest()
    {

        //$movie_db = DB::select("select * from tbl_movies");

        //Get limit
        //$movie_db = DB::table('tbl_movies')->limit(1)->get();

        //$movie_db = DB::table('tbl_movies')->get();

        $bus_db = DB::table('bus_tbl')
            ->orderBy('price', 'asc')
            //->limit(10)
            ->get(); // Query SQL

        return view("home", ["tpl_bus" => $bus_db]);
        //return view('home'); //render view

    }

    function search(Request $request)
    {
        $depart = $request['depart'] ?? "";
        $arrive = $request['arrive'] ?? "";
        $bus_db = DB::table('bus_tbl');
        return view("home", ["tpl_bus" => $bus_db]);
    }

    function ticket_detail(Request $request)
    {
        if (\Auth::check()) {
            $bus_id = $request->id;

            $bus_db = DB::table('bus_tbl')
                ->where('id', '=', $bus_id)
                ->get();
        }
        return view("ticket_detail", ["tpl_bus" => $bus_db]);
    }

    public function add_cart(Request $request, $id)
    {
        if (\Auth::check()) {
            $bus_id = $request->id;
            $bus=Bus::find($id);
            
            $check = $bus->seat_avail - $request->booked;
            if($check<0)
            {
                session()->flash('message', 'Unable to book ticket');
                return redirect()->back();
            }
            else{
                $user=\Auth::user();

                $cart=new admin_tbl;
                $cart->username = $user->name;
                $cart->op_name = $bus->op_name;
                $cart->depart_from = $bus->depart_from;
                $cart->depart_time = $bus->depart_time;
                $cart->arrive_at = $bus->arrive_at;
                $cart->booked_seats = $request->booked;
                $cart->price = $bus->price;
                $cart->total = $bus->price*$request->booked;
                $cart->save();
                DB::table('bus_tbl')
                ->where('id', '=', $bus_id)
                ->decrement('seat_avail', $request->booked);
            }            
            return redirect('/');
        }

    }

    function dashboard()
    {
        $admin2 = DB::table('admins');
        $bus = DB::table('bus_tbl');
        $admin = DB::table('admin_tbls');
        $sum = $admin->sum('total');
        $ticket_sum = $admin->sum('booked_seats');
        $bus_avail = $bus->count('id');
        $admin_count = $admin2->count('id');
        return view('dashboard', [
            'sum' => $sum, 
            'ticket_sum' => $ticket_sum, 
            'bus_avail' => $bus_avail,
            'admin_count' => $admin_count
        ]);
    }

    function add(Request $request)
    {
        $bus_db = DB::table('admin_tbls');
        $bus = DB::table('bus_tbl');
        $add=new Bus();
        $add->id = NULL;
        $add->op_name = $request->op;
        if($add->op_name == "Virak Buntham")
        {
            $add->op_logo = "virak_buntham.png";
            $add->op_review = "417";
        }
        elseif($add->op_name == "Cambodia Post")
        {
            $add->op_logo = "CamPost.png";
            $add->op_review = "132";
        }
        elseif($add->op_name == "Chan Moly Roth")
        {
            $add->op_logo = "Chan_Moly_Roth.png";
            $add->op_review = "5";
        }
        elseif($add->op_name == "MBUS")
        {
            $add->op_logo = "MB.png";
            $add->op_review = "1";
        }
        elseif($add->op_name == "Seila Angkor Khmer Express")
        {
            $add->op_logo = "seila-angkor.png";
            $add->op_review = "1091";
        }
        elseif($add->op_name == "Larryta Express")
        {
            $add->op_logo = "Larryta.png";
            $add->op_review = "711";
        }
        elseif($add->op_name == "Mey Hong Transport")
        {
            $add->op_logo = "Mey_Hong.png";
            $add->op_review = "963";
        }
        else
        {
            $add->op_logo = "error.png";
            $add->op_review = "0";
        }
        $add->depart_from = $request->dp;
        $add->depart_time = $request->dt;
        $add->arrive_at = $request->ai;
        $add->arrive_time = $request->aa;
        $add->time_diff = 
        (Carbon::parse($add->arrive_time))->diffInMinutes((Carbon::parse($add->depart_time)))/60;
        $add->price = $request->price;
        $add->seat_avail = $request->sa;
        $add->created_at = Carbon::now()->timestamp;
        $add->updated_at = Carbon::now()->timestamp;
        $add->save();

        return redirect()->back();
    }

    function showAddForm()
    {
        return view("showAddForm");
    }

    function showBusTable()
    {
        $bus_db = DB::table('bus_tbl')
                ->orderBy('created_at', 'desc')
                ->get();
        return view("showBusTable", ["tpl_bus" => $bus_db]);
    }

    function newPage()
    {
        if (\Auth::check()) {
            $user = \Auth::user()->name;

            $admin = DB::table('admin_tbls')
                ->where('username', '=', $user)
                ->orderBy('created_at', 'desc')
                ->get();
        }
        return view("newPage", ["tpl_admin" => $admin]);
    }

    function login()
    {
        return view('login');
    }

    function register()
    {
        return view('register');
    }
}