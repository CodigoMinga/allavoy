<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a liUserssting of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth')->only('add','list', 'details');
     }
     
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Order::create($request);

        return redirect()->route('orders.index')->with('status', 'La orden fue creada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**Usersnate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }


    public function add()
    {
        $users = User::all();
        return view('orders.add', compact('users'));
    }
    public function addProcess(Request $request)
    {
        Order::create($request->all());

        return redirect()->route('orders.list');
    }

    public function list()
    {
        return view('orders.list', [
            'orders' => Order::latest()->paginate()

        ]);
    }

    public function details($order_id)
    {
        $users = User::all();
        return view('orders.details', [
            'order' => Order::find($order_id)
        ]);
    }

    public function jobs()
    {
        $users = User::all();
        return view('orders.jobs', [
            'orders' => Order::all()
        ]);
    }

    public function change(Order $order)
    {
        $users = User::all();
        return view('orders.change',[
            'order' => $order,
            'users' => $users
        ]);
    }
    public function upgrade(Request $request)
    {
        Order::update($request->all());

        return redirect()->route('orders.list');
    }
}
