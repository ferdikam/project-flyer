@extends('layouts.app')

@section('content')
    <h1>Selling your home?</h1>
    <hr>
        <form enctype="multipart/form-data" action="/flyers" method="POST">
            @include('flyers.form')

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
@stop