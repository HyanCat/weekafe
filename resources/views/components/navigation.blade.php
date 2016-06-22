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
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="glyphicon glyphicon-plus"></i>
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li>
								<a href="{{ route('weeklies.create') }}">{{ L('write_weekly') }}</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="glyphicon glyphicon-user"></i>
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li class="dropdown-header">
								{{ $currentUser->email }}
							</li>
							<li role="separator" class="divider"></li>
							<li>
								<a href="{{ route('auth.logout') }}">{{ L('logout') }}</a>
							</li>
						</ul>
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