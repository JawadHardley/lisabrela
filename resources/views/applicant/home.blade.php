@extends('layouts.dashboard')
@section('content')

@if (Session::has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ Session::get('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <div class="row bg-light my-3 py-3">
        <div class="col">
            <div class="non">
                <p class="text-muted float-start">
                    /Home
                </p>
                <a href="/applicant/apply" class="btn btn-primary float-end">
                    <i class="fa fa-plus"></i> Apply for license
                </a>
            </div>
        </div>
    </div>

@endsection