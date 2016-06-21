<?php
/**
 * This file is part of weekafe.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class WeeklyController extends Controller
{
	public function index()
	{
		//
	}

	public function create()
	{
		return view('weekly.create');
	}

	public function store(Request $request)
	{
		//
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		//
	}

	public function update(Request $request, $id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}
}
