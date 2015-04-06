<?php
/**
 * Created by PhpStorm.
 * User: ichered
 * Date: 22.03.15
 * Time: 19:34
 */

namespace App\Http\Controllers;


class AdminController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('acl');
    }

    public function index()
    {
        return view('admin');
    }
}