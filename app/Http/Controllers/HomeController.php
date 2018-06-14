<?php
namespace App\Http\Controllers;

use Lawoole\Routing\Controller;

class HomeController extends Controller
{
    /**
     * Welcome page.
     *
     * @return mixed
     */
    public function welcome()
    {
        return view('welcome');
    }
}
