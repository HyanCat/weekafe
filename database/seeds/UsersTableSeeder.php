<?php

/**
 * This file is part of weekafe.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */
class UsersTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		factory(\App\Models\User::class, 20)->create();
	}
}