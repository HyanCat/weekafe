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
	{{ L('create_weekly') }}
@stop

@section('content')
	<div class="col-lg-8">
		{!! Form::open(['class' => 'form']) !!}

		<div class="form-group">
			{!! Form::label(L('title')) !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label(L('content')) !!}
			<div class="input-group">
				<span class="input-group-addon">1</span>
				{!! Form::textarea('contents[]', null, ['class' => 'form-control', 'rows' => 5]) !!}
			</div>
			<div class="input-group">
				<span class="input-group-addon">2</span>
				{!! Form::textarea('contents[]', null, ['class' => 'form-control', 'rows' => 5]) !!}
			</div>
		</div>
		<div class="form-group">
			<button class="btn btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i> {{ L('add_item') }}</button>
		</div>

		<hr>
		<div class="form-group">
			{!! Form::submit(L('post'), ['class' => 'btn btn-info']) !!}
		</div>
		{!! Form::close() !!}
	</div>
@stop
