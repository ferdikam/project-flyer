@extends('layouts.app')

@section('content')
    <h1>Selling your home?</h1>
    <hr>
    <form enctype="multipart/form-data" action="/flyers" method="POST">
        @include('flyers.form')
    </form>
@stop