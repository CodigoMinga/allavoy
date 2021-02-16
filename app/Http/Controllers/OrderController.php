<?php

namespace App\Http\Controllers;

use App\Order;
use App\Ordertype;
use App\Paytypes;
use App\User;
use App\Friendshop;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

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
        $friendshops = Friendshop::all();
        $users = User::all();
        $paytypes = Paytypes::all();
        $ordertypes = Ordertype::all();

        return view('orders.add', compact('users', 'friendshops','ordertypes','paytypes'));
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
        $friendshops = Friendshop::all();
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
        $friendshops = Friendshop::all();
        $users = User::all();
        return view('orders.change',[
            'order' => $order,
            'users' => $users,
            'friendshops' => $friendshops
        ]);
    }

    public function upgrade($order_id,Request $request)
    {
        //busca la orden en la base de datos con el id que se le pasa desde la URL
        $order = Order::findOrFail($order_id);

        $order->update($request->all());

        return redirect()->route('orders.list');
    }
    public function jobdone($order_id)
    {
        $order = Order::findOrFail($order_id);

        $order->enable = 0;
        $order->save();

        return redirect()->route('orders.jobs');
    }


    public function getData(){
        $orders = Db::select('
        select orders.*,
        ordertypes.name as ordertype_name,
        paytypes.name as paytype_name
        from orders
        left join ordertypes on orders.ordertype_id = ordertypes.id
        left join paytypes on orders.paytype_id = paytypes.id
        ');
        return DataTables::of($orders)->make(true);

    }
}
