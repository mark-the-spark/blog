@extends('_layouts.master')

@section('content')

<h2>Login</h2>

{!! Form::open(['url' => 'auth/login']) !!}

<div class="form-group">
{!! Form::label('email', 'Email: ') !!}
{!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('password', 'Password: ') !!}
{!! Form::password('password', ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Login') !!}

{!! Form::close() !!}



@stop