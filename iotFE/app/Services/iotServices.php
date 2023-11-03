<?php

namespace App\Services;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Middleware;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Termwind\Components\Dd;

class iotServices
{
    protected string $url;
    public function __construct()
    {
        $this->url = 'http://127.0.0.1:8080';
    }

    private function _toObject($array)
    {
        $objectStr = json_encode($array);
        $object = json_decode($objectStr);
        return $object;
    }

    public function listData()
    {
        $response = Http::get($this->url);
        if ($response->successful()) {
            $data = $response->json();
            $dataObj = $this->_toObject($data);
            // dd($dataObj);
            return $dataObj;
        } else {
            return $response->throw()->json()['message'];
        }
    }

    public function findAllData($pageNumber, $search, $order, $sort)
    {
        $url = $this->url . '/findAll';
        $response = Http::get($url, [
            'page' => $pageNumber,
            'size' => 15,
            'keyword' => $search,
            'sort' => $sort,
            'order'=> $order
        ]);
        if ($response->successful()) {
            $data = $response->json();
            $dataObj = $this->_toObject($data);
            // dd($dataObj);

            return $dataObj;
        } else {
            return $response->throw()->json()['message'];
        }
    }

    public function findAllAction($pageNumber, $search, $order, $sort)
    {
        $url = $this->url . '/findAllAction';
        $response = Http::get($url, [
            'page' => $pageNumber,
            'size' => 15,
            'keyword' => $search,
            'sort' => $sort,
            'order'=> $order
        ]);
        // dd($search);
        if ($response->successful()) {
            $data = $response->json();
            $dataObj = $this->_toObject($data);
            // dd($dataObj);
            return $dataObj;
        } else {
            return $response->throw()->json()['message'];
        }
    }
}