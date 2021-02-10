<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!--<link rel="dns-prefetch" href="//fonts.gstatic.com">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->

    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"-->
    <!--    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="-->
    <!--    crossorigin="anonymous" />-->

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>

<body>
    <div class='container'>
        <h1 style="text-align: center">Echem</h1>
        <h4 style="text-align: center">Mobile number -  02 8413289, +880-1880-006-355, 01880006362</h4>
        <br/>
        <br/>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#SL</th>
              <th scope="col">EXPENSE TITLE</th>
              <th scope="col">AMOUNT</th>
              <th scope="col">CREATED</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">#1</th>
              <td>{{$data->expense_title}}</td>
              <td>{{$data->amount}}</td>
              <td>{{$data->created_at}}</td>
            </tr>
          </tbody>
        </table>
        <br/>
        <br/>
        <p>Staff Signature</p>
        <br/>
        <br/>
        <p>Authority Signature</p>
    </div>
</body>

</html>