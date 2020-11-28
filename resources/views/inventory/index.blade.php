@extends('layouts.inventory')

@section('content')
    <div class='row my-5'>
        <div class='col-sm-4 my-2'>
            <div class='card p-3'>
                <h3>Profit This Month</h3>
                <h5>{{$month_profit}} BDT</h5>
            </div>
        </div>
        <div class='col-sm-4 my-2'>
            <div class='card p-3'>
                <h3>Profit This Year</h3>
                <h5>{{$year_profit}} BDT</h5>
            </div>
        </div>
        <div class='col-sm-4 my-2'>
            <div class='card p-3'>
                <h3>Expense This Month</h3>
                <h5>{{$exp_month}} BDT</h5>
            </div>
        </div>
        <div class='col-sm-4 my-2'>
            <div class='card p-3'>
                <h3>Revenue This Month</h3>
                <h5>{{$rev_m}} BDT</h5>
            </div>
        </div>
        <div class='col-sm-4 my-2'>
            <div class='card p-3'>
                <h3>Expense This Year</h3>
                <h5>{{$exp_year}} BDT</h5>
            </div>
        </div>
        <div class='col-sm-4 my-2'>
            <div class='card p-3'>
                <h3>Revenue This Year</h3>
                <h5>{{$rev_y}} BDT</h5>
            </div>
        </div>
        <div class='col-sm-4 my-2'>
            <div class='card p-3'>
                <h3>Total Item Sold</h3>
                <h5>{{$item}}</h5>
            </div>
        </div>
        <div class='col-sm-4 my-2'>
            <div class='card p-3'>
                <h3>Pending Orders</h3>
                <h5>{{$pending}}</h5>
            </div>
        </div>
    </div>
    @php
        $total = 0;
        foreach($order_today as $ord){
            if($ord->is_paid){
                $total = $total + $ord->grand_total;
            }
        }
    @endphp
    <h4>Orders Today ({{$order_today->count()}}) <span class='badge badge-primary p-3'>Total Sale {{$total}} BDT</span></h4>
    
    <div class='table-responsive'>
        <table class='table table-dark table-responsive'>
        <thead>
            <tr>
              <th scope="col">Order Number</th>
              <th scope="col">Username</th>
              <th scope="col">email</th>
              <th scope="col">status</th>
              <th scope="col">Grand Total</th>
              <th scope="col">Payment Status</th>
              <th scope='col'>Payment Method</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order_today as $order)
                @php
                    $user = DB::table('users')->where('id', $order->user_id)->first();
                    
                @endphp
                <tr>
                    <th scope="row">{{$order->order_number}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$order->status}}</td>
                    <td>{{$order->grand_total}}</td>
                    @if ($order->is_paid)
                        <td>Payment Done</td>
                    @else
                        <td>Payment Pending</td>
                    @endif
                    <td>{{$order->payment_method}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <br/>
    <br/>
    @php
        $total = 0;
        foreach($order_by_month as $ord){
            if($ord->is_paid){
                $total = $total + $ord->grand_total;
            }
        }
    @endphp
    <h4>Orders This Month ({{$order_by_month->count()}}) <span class='badge badge-primary p-3'>Total Sale {{$total}} BDT</span></h4>

    <div class='table-responsive'>
        <table class='table table-dark table-responsive'>
        <thead>
            <tr>
              <th scope="col">Order Number</th>
              <th scope="col">Username</th>
              <th scope="col">email</th>
              <th scope="col">status</th>
              <th scope="col">Grand Total</th>
              <th scope="col">Payment Status</th>
              <th scope='col'>Payment Method</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order_by_month as $order)
                @php
                    $user = DB::table('users')->where('id', $order->user_id)->first();
                @endphp
                <tr>
                    <th scope="row">{{$order->order_number}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$order->status}}</td>
                    <td>{{$order->grand_total}}</td>
                    @if ($order->is_paid)
                        <td>Payment Done</td>
                    @else
                        <td>Payment Pending</td>
                    @endif
                    <td>{{$order->payment_method}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    
     <br/>
    <br/>
    @php
        $total = 0;
        foreach($this_year_orders as $ord){
            if($ord->is_paid){
                $total = $total + $ord->grand_total;
            }
        }
    @endphp
    <h4>Orders This Year ({{$this_year_orders->count()}}) <span class='badge badge-primary p-3'>Total Sale {{$total}} BDT</span></h4>

    <div class='table-responsive'>
        <table class='table table-dark table-responsive'>
        <thead>
            <tr>
              <th scope="col">Order Number</th>
              <th scope="col">Username</th>
              <th scope="col">email</th>
              <th scope="col">status</th>
              <th scope="col">Grand Total</th>
              <th scope="col">Payment Status</th>
              <th scope='col'>Payment Method</th>
            </tr>
        </thead>
        <tbody>
            @foreach($this_year_orders as $order)
                @php
                    $user = DB::table('users')->where('id', $order->user_id)->first();
                @endphp
                <tr>
                    <th scope="row">{{$order->order_number}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$order->status}}</td>
                    <td>{{$order->grand_total}}</td>
                    @if ($order->is_paid)
                        <td>Payment Done</td>
                    @else
                        <td>Payment Pending</td>
                    @endif
                    <td>{{$order->payment_method}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
