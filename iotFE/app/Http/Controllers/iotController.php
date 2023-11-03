<?php

namespace App\Http\Controllers;

use App\Services\iotServices;
use Illuminate\Http\Request;

class iotController extends Controller
{
    private $iotService;

    public function __construct()
    {
        $this->iotService = new iotServices();
    }

    public function index(Request $request)
    {
        $data = $this->iotService->listData();
        return view('index')->with('data', $data);
    }
    public function profile(Request $request)
    {
        return view('profile');
    }

    public function history(Request $request, $pageNumber, $sort = 'id', $order = 'desc')
    {
        $search = $request->input('searchKeyword');
        $data = $this->iotService->findAllAction($pageNumber, $search, $order, $sort);
        return view('history')->with('data', $data);
    }

    public function dataseeker(Request $request, $pageNumber, $sort = 'id', $order = 'desc')
    {
        $search = $request->input('searchKeyword');
        $data = $this->iotService->findAllData($pageNumber, $search, $order, $sort);
        return view('dataseeker')->with('data', $data);
    }

}