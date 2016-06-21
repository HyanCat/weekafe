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
	{{ L('register') }}
@stop

@section('navtitle') {{ L('register') }} @stop

@section('content')
	<div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
		<div class="well">
			{!! Form::open(['class' => 'form-horizontal']) !!}
			<div class="form-group">
				{!! Form::label('email', L("email_address"), ['class' => 'col-sm-2 control-label']) !!}
				<div class="col-sm-10">
					{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => L('email_placeholder')]) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('password', L("password"), ['class' => 'col-sm-2 control-label']) !!}
				<div class="col-sm-10">
					{!! Form::password('password', ['class' => 'form-control', 'placeholder' => L('password_placeholder')]) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('password_confirm', L("password"), ['class' => 'col-sm-2 control-label']) !!}
				<div class="col-sm-10">
					{!! Form::password('password_confirm', ['class' => 'form-control', 'placeholder' => L('password_confirm_placeholder')]) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('invite_code', L('invite_code'), ['class' => 'col-sm-2 control-label']) !!}
				<div class="col-sm-10">
					{!! Form::text('invite_code', null, ['class' => 'form-control', 'placeholder' => L('invite_code_placeholder')]) !!}
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-8">
					<div class="checkbox">
						<label>
							{!! Form::checkbox('remember', 1, true, []) !!}
							{{ L("remember_me") }}
						</label>
					</div>
				</div>
				<div class="col-sm-2">
					<a href="{{ route('auth.login') }}">{{ L('goto_login') }}</a>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					{!! Form::submit(L('register'), ['class' => 'btn btn-success btn-block']) !!}
				</div>
			</div>

			{!! Form::close() !!}
		</div>
	</div>
@stop

