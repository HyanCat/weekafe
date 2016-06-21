<?php
/**
 * This file is part of weekafe.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */
?>

@extends('layout.default')

@section('title')
	{{ L('login') }}
@stop

@section('navtitle') {{ L('login') }} @stop

@section('content')
	<div class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 well">
		{!! Form::open(['class' => 'form']) !!}
		<div class="form-group">
			{!! Form::label('email', L("email_address")) !!}
			{!! Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => L('email_placeholder')]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password', L("password")) !!}
			{!! Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => L('password_placeholder')]) !!}
		</div>
		<div class="form-group">
			<div class="checkbox">
				<label>
					{!! Form::checkbox('remember', 1, true, []) !!}
					{{ L("remember_me") }}
				</label>
			</div>
		</div>
		<div class="form-group">
			{!! Form::submit(L('login'), ['class' => 'btn btn-success btn-block']) !!}
		</div>
		<div class="form-group">
			<a href="{{ route('auth.register') }}">{{ L('goto_register') }}</a>
		</div>
		{!! Form::close() !!}
	</div>
@stop
