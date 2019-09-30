@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <p>{{ trans('sentence.welcome')}}</p>
                    <a href="{{ route('hello', app()->getLocale()) }}" class="btn btn-primary">Go</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection