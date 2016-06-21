<?php
/**
 * This file is part of weekafe.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */
?>

		<!DOCTYPE html>
<html lang="zh_CN">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ config('app.name') }} -- @yield('title')</title>

	@yield('meta')


	<link href="https://cdn.bootcss.com/normalize/3.0.3/normalize.min.css" rel="stylesheet">
	<link href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/app.css" rel="stylesheet">

	@yield('style')

</head>
<body>

@yield('body')


<script src="https://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function () {
//		$('.ui.dropdown').dropdown();
//		$('.ui.checkbox').checkbox();
//		$('[data-content]').popup();
//		$('.ui.accordion').accordion({exclusive: false});
//		$('.sidebar').sidebar('attach events', '.sidebar-trigger.button');
	});
</script>

@yield('script')

</body>
</html>
