@extends('layouts.app')

@section('content')

            <div class="content">
                <h1 class="text-center">
                    {{ config('app.name', 'IP') }}
                </h1>

                <div class="text-center">
                	<h3>Thank You!</h3>
                	<h4>An email was sent to verify your address</h4>
                	
                </div>
            </div>
@endsection