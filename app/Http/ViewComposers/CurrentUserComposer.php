<?php
/**
 * This file is part of weekafe.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class CurrentUserComposer
{
	public function compose(View $view)
	{
		$currentUser = \Auth::user();
		$isAdmin     = false;

		if ($currentUser) {
			$isAdmin = $currentUser->is_admin;
		}
		$view->with(compact('currentUser', 'isAdmin'));
	}
}