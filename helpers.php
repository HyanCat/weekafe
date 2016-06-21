<?php
/**
 * This file is part of weekafe.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */

/**
 * Language Function for View.
 * @param $key
 * @return mixed
 */
function L($key)
{
	return Lang::get('weekafe.' . strtolower($key));
}