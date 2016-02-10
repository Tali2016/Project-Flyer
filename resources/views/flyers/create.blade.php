@extends('layout')

@section('content')
    <h1 xmlns="http://www.w3.org/1999/html">Selling Your Home?</h1>

    <hr>
    <div class="row">
    <form method="post" enctype="multipart/form-data" action="/flyers" class="col-md-6">
   @include('flyers.form')

    </form>
    </div>
    </hr>




@stop

