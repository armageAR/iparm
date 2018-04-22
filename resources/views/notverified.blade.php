@extends('layouts.app')

@section('content')

            <div class="content">
                <h1 class="text-center">
                    {{ config('app.name', 'IP') }}
                </h1>

                <div class="text-center">
                	<h3>Your account is not verified</h3>
                	<h4>check your email</h4>
                	
                </div>
            </div>
@endsection