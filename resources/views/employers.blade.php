@extends('layouts.app')

@section('content')

            <div class="content">
                <h1 class="text-center">
                    {{ config('app.name', 'IP') }}
                </h1>

                <div class="text-center">
                	<h3>Employers Page</h3>
                	<a class="nav-link" href="{{ route('employer.register') }}">Employers Registrarion</a>
                </div>
            </div>
@endsection