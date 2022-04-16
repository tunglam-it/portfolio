<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Main;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function show()
  {
    $main = Main::all();
    $portfolios = Portfolio::all();
    $services = Service::all();
    $abouts = About::all();
    return view('partialsFE.index',compact('main','portfolios','services','abouts'));
  }
}
