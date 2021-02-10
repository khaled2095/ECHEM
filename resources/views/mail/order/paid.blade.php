@component('mail::message')
# Invoice Paid

Thank for the Purchase

Here is your receipt.

@component('mail::table')
|Product Name | Quantity | Price
|:---------|:-----|-----:

@foreach($order->items as $item)
| {{$item->name}}         | {{$item->pivot->quantity}}     |     {{$item->pivot->price}}
@endforeach

@endcomponent

<!--<table class="table">-->
<!--    <thead>-->
<!--        <tr>-->
<!--            <th>Name</th>-->
<!--            <th>Price</th>-->
<!--            <th>Quantity</th>-->
<!--        </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--        @foreach ($order->items as $item)-->
<!--        <tr>-->
<!--            <td scope="row">{{$item->name}}</td>-->
<!--            <td>{{$item->pivot->price}}</td>-->
<!--            <td>{{$item->pivot->quantity}}</td>-->
<!--        </tr>-->
<!--        @endforeach-->
<!--    </tbody>-->
<!--</table>-->

Total : {{$order->grand_total}}

@component('mail::button', ['url' => route('invoice.show', $order->id)])
Download Invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
