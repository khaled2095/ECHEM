<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>



    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="invoice-title">
                    <h2>Invoice</h2>
                    <h3 class="pull-right">Order # {{ $orderDetails->id }}</h3> <br>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-6">
                        <address>
                            <strong>Billed To: {{ $orderDetails->order_number }}</strong><br>
                            {{ $orderDetails->shipping_fullname }} <br>
                            {{ $orderDetails->shipping_address }} <br>
                            {{ $orderDetails->shipping_city }} <br>
                            {{ $orderDetails->shipping_state }} <br>
                            {{ $orderDetails->shipping_zipcode }} <br>
                            {{ $orderDetails->shipping_phone }} <br>
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <address>
                            <strong>Payment Method:</strong><br>
                            {{ $orderDetails->payment_method }}
                        </address>
                    </div>
                    <div class="col-xs-6 text-right">
                        <address>
                            <strong>Order Date:</strong><br>
                            {{ $orderDetails->created_at }}<br><br>
                        </address>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Order summary</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <td style="width:18%"><strong>Product Name</strong></td>
                                        <td style="width:18%" class="text-center"><strong>Size</strong></td>
                                        <td style="width:18%" class="text-center"><strong>Price</strong></td>
                                        <td style="width:18%" class="text-center"><strong>Qty</strong></td>
                                        <td style="width:18%" class="text-right"><strong>Totals</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($order_Items as $od)

                                    <tr>
                                        <td class="text-left">{{ $od->name }}</td>
                                        <td class="text-center">{{ $od->size }}</td>
                                        <td class="text-center">{{ $od->price }} Tk.</td>
                                        <td class="text-center">{{ $od->quantity }}</td>
                                        <td class="text-right">{{ $od->price * $od->quantity }} Tk.</td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a class="btn btn-info" href="{{ route('invoice.download', $orderDetails->id) }}">
            Download Invoice
        </a>

    </div>

</body>
</html>

