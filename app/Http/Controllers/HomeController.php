<?php
namespace App\Http\Controllers;

use Lawoole\Routing\Controller;

/**
 * Class HomeController
 *
 * @author You Ming
 */
class HomeController extends Controller
{
    /**
     * 首页
     *
     * @return mixed
     */
    public function index()
    {
        return view('welcome');
    }
}
