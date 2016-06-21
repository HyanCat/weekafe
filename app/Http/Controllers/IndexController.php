<?php
/**
 * This file is part of weekafe.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */

namespace App\Http\Controllers;

class IndexController extends Controller
{
	public function index()
	{
		return view('index');
	}
}