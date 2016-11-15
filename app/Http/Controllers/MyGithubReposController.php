<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class MyGithubReposController
 * @package App\Http\Controllers
 */
class MyGithubReposController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $githubrepos = [];

        //compact(..) igual a :
//        $data = [
//          'githubrepos' => $githubrepos
//        ];

        return view('mygithubrepos',[
            'githubrepos' => $githubrepos
        ] );
    }
}
