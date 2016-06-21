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
		<div class="main-section container" style="min-height: 400px;">
			@yield('content')
		</div>
	</div>

	<hr>

	@yield('footer')

	@include('components.footer')

@stop

