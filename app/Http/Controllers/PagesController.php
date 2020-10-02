<?php

namespace App\Http\Controllers;

use App\HowWork;
use App\Services\HowWorkService;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    protected $howworkService;

    public function __construct(HowWorkService $howworkService)
    {
        $this->howworkService = $howworkService;
    }

    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $data = $this->howworkService->find("Rent");
        return view('pages.services', compact('data'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function buy()
    {
        $data = $this->howworkService->find("Buy");
        return view('pages.buy', compact('data'));
    }

    public function construction()
    {
        $data = $this->howworkService->find("Construction");
        return view('pages.construction', compact('data'));
    }

    public function makeoffer()
    {
        $data = $this->howworkService->find("Rental");
        return view('pages.makeoffer', compact('data'));
    }

    public function sales()
    {
        $data = $this->howworkService->find("Sales");
        return view('pages.sales', compact('data'));
    }

    public function distress()
    {
        $data = $this->howworkService->find("Distress Sales");
        return view('pages.distress', compact('data'));
    }
}
