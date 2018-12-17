<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lawoole\Routing\Controller;

class HomeController extends Controller
{
    /**
     * Welcome page.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function welcome(Request $request)
    {
        return view('welcome');
    }
}
