<?php
/**
 * This file is part of weekafe.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */
?>

<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Weekafe</a>
		</div>

		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				@if ($currentUser)
					<li>
						<a>{{ $currentUser->name }}</a>
					</li>
					<li>
						<a href="{{ route('auth.logout') }}">{{ L('logout') }}</a>
					</li>
				@else
					<li>
						<a href="{{ route('auth.login') }}">{{ L('login') }}</a>
					</li>
				@endif
			</ul>
		</div>
	</div>
</nav>