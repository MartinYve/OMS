<?php

namespace App\Http\Controllers;

use App\Mail\FinishDeleveryperson;
use App\Mail\MyEmail;
use App\Oders;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class deliverypersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        $new_tabledelivery = [] ;
        $delivery = Role::select('*')->where('name' , 'Delivery_person')->get()->toArray();
        $delivery_table = DB::table('role_user')->select('user_id')->where('role_id' , $delivery['0']['id'])->get()->toArray();
        foreach ($delivery_table as $key1 => $values) {
            foreach ($values as $key2 => $value) {
                $new_tabledelivery [] = $value ;
            }
        };
        $users = User::whereIn('id' , $new_tabledelivery)->get();
        // dd($users);
        return view('deliveryperson.listAll', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $new_tabledelivery = [] ;
        $new_oders = [] ;
        $delivery_personunable = [] ;
        $delivery = Role::select('*')->where('name' , 'Delivery_person')->get()->toArray();
        $delivery_table = DB::table('role_user')->select('user_id')->where('role_id' , $delivery['0']['id'])->get()->toArray();
        foreach ($delivery_table as $key1 => $values) {
            foreach ($values as $key2 => $value) {
                $new_tabledelivery [] = $value ;
            }
        };
        $oders = Oders::select('user_id')->get()->toArray();
        foreach ($oders as $key1 => $oder) {
            foreach ($oder as $key2 => $value) {
                $new_oders [] = $value ;
            }
        };
        $users = User::whereIn('id' , $new_tabledelivery)
        ->whereNotIn('id' , $oders)
        ->get()->toArray();
        $commande_available = Oders::whereNotIn('user_id' , $new_tabledelivery)
        ->get()->toArray();
        // dd($commande_available) ;
        if (!empty($commande_available)) {
            $address = "kouesilas@gmail.com";
            Mail::to($address)->send(new FinishDeleveryperson);
            toast('No delivery person available, an email has been sent to the manager !','error');
            return redirect()->route('deliverypersons.index');
        }else {
            return view('deliveryperson.listdelibaryunable', compact('users' , 'commande_available'));
            
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->email);
        $address = $request->email ;
        DB::table('oders')->where('id' , $request->oder)
                          ->update([
                              'user_id' => $request->id,
                          ]); 

        Mail::to($address)->send(new MyEmail);
      toast('The order has been sent to the delivery person !','success');
      return redirect()->route('deliverypersons.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
