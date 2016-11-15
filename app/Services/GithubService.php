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

    protected $github_api_url = 'https://api.github.com';

    protected $uri = '/user/repos';

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
     * @return static
     */
    public function obtainRepos()
    {
//        dd(env('GITHUB_TOKEN'));
//        $token = env('GITHUB_TOKEN');

       $res = $this->guzzle->request('GET',$this->githubReposUrl(),
           [
                "auth" => $this->credentials(),
           ]
       );


        return collect(\GuzzleHttp\json_decode($res->getBody()))->pluck('name');

//       return [
//            'Repo1',
//            'Repo2',
//            'Repo3',
//        ];
    }

    /**
     * @return string
     */
    private function githubReposUrl()
    {
        return $this->github_api_url . $this->uri;
    }

    /**
     * @return array
     */
    private function credentials()
    {
        return [
            'davidmgilo',
            $this->token
        ];
    }
}