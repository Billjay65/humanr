{{-- resources/views/pages/about.blade.php --}}
@extends('pages.master')
@section('head')
@stop
@section('title')
    It's a test page
@stop
@section('heading')
{{ $name }} {{ $profession }}
@stop
@section('content')
<div class='h1'>
     Every Writing is a Problem!
</div>
<p>
      There was a problem few minutes back. There was a problem few minutes 
back.
      There was a problem few minutes back. There was a problem few minutes 
back.
      There was a problem few minutes back.
</p>
<div class='h2'>
    I have just solved it.
</div>
<p>
      Have a nice time folks.
</p>
@stop
@section('footer')
    Home of Sanjib Sinha
@stop