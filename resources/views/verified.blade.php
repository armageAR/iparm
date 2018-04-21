@extends('layouts.app')

@section('content')

            <div class="content">
                <h1 class="text-center">
                    {{ config('app.name', 'IP') }}
                </h1>

                <div class="text-center">
                	<h3>Your account was verified</h3>
                	<h4>You can log in now!</h4>
                	
                </div>
            </div>
@endsection