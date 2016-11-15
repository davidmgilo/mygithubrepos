<?php

namespace App\Services;


use GuzzleHttp\Client;

/**
 * Class GithubService
 * @package App\Services
 */
class GithubService
{
    protected $token;
    protected $guzzle;

    /**
     * GithubService constructor.
     *
     */
    public function __construct(Client $guzzle)
    {
        $this->token = env('GITHUB_TOKEN');
        $this->guzzle = $guzzle;
    }


    /**
     *
     */
    public function obtainRepos()
    {
//        dd(env('GITHUB_TOKEN'));
//        $token = env('GITHUB_TOKEN');

       $res = $this->guzzle->request('GET','http://www.google.es');
        dd($res->getBody());
       return [
            'Repo1',
            'Repo2',
            'Repo3',
        ];
    }
}