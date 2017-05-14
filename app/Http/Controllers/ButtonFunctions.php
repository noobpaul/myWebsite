<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myself;

class ButtonFunctions extends Controller
{
    public function add(Request $request)
	{
		$about = new Myself;
		$about->title = $request->title;
		$about->about = $request->about;
		$about->save();

		dd($about);
	}
}
