<?php

namespace App\Services;

/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 15/11/16
 * Time: 19:52
 */
/**
 * Class GithubService
 * @package App\Services
 */
class GithubService
{
    protected $token;

    /**
     * GithubService constructor.
     *
     */
    public function __construct()
    {
        $this->token = env('GITHUB_TOKEN');
    }


    /**
     *
     */
    public function obtainRepos()
    {
//        dd(env('GITHUB_TOKEN'));
//        $token = env('GITHUB_TOKEN');
       return [
            'Repo1',
            'Repo2',
            'Repo3',
        ];
    }
}