@extends('layouts.dashboard')
@section('content')

    <h2 class="">
        <p class="small">Welcome {{ Auth::user()->firstname }}</p>
    </h2>
    

@endsection