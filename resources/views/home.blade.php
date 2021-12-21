@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <a href="{{route('getCreatePage')}}"><button type="submit" class="btn btn-success">Input Song</button></a>
    <a href="{{route('getSongs')}}"><button type="submit" class="btn btn-success">Song List</button></a>
</div>
@endsection
