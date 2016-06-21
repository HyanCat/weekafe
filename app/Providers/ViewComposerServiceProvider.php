<?php
/**
 * This file is part of weekafe.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */

namespace App\Providers;


use App\Http\ViewComposers\CurrentUserComposer;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
	/**
	 * @type array 组件类 => 视图 or 视图数组
	 */
	protected $composers = [
		CurrentUserComposer::class => '*',
	];

	public function register()
	{

	}

	public function boot()
	{
		foreach ($this->composers as $composer => $view) {
			if (is_array($view)) {
				foreach ($view as $oneView) {
					view()->composer($oneView, $composer);
				}
			}
			else {
				view()->composer($view, $composer);
			}
		}
	}

}