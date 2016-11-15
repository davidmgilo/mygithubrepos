<?php

namespace App\Http\Controllers;

use App\Services\GithubService;
use Illuminate\Http\Request;

/**
 * Class MyGithubReposController
 * @package App\Http\Controllers
 */
class MyGithubReposController extends Controller
{
    protected $github;

    /**
     * MyGithubReposController constructor.
     * @param $github
     */
    public function __construct(GithubService $github)
    {
        $this->github = $github;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $githubrepos = $this->github->obtainRepos();
//        $githubrepos = [
//            'Repo1',
//            'Repo2',
//            'Repo3',
//
//        ];

        //compact(..) igual a :
//        $data = [
//          'githubrepos' => $githubrepos
//        ];

        return view('mygithubrepos',compact('githubrepos'));
    }
}
