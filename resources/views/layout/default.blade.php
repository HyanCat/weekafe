<?php
/**
 * This file is part of weekafe.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */
?>

@extends('layout.base')

@section('body')

	@yield('header')
	@include('components.navigation')
	<div class="body container">
		<div class="main-section container">
			@yield('content')
		</div>
	</div>

	<div class="ui section divider"></div>

	@yield('footer')

	@include('components.footer')

@stop

