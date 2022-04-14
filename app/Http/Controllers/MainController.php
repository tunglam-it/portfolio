<?php

namespace App\Http\Controllers;

use App\Http\Requests\MainRequest;
use App\Models\Main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
  protected $main;

  public function __construct(Main $main)
  {
    $this->main = $main;
  }

  public function showDashboard()
  {
    return view('pagesBE.dashboard');
  }

  public function index()
  {
    $main = $this->main->first();
    return view('pagesBE.main.index', compact('main'));
  }

  public function update(MainRequest $request)
  {
    $main = $this->main->first();
    DB::beginTransaction();
    if(file_exists($main->main_img)){
      unlink($main->main_img);
    }
    $upImg = $this->uploadImage('main_img', 'main', $request);
    $data = [
      'title1' => $request->title1,
      'title2' => $request->title2,
      'subtitle1' => $request->subtitle1,
      'subtitle2' => $request->subtitle2,
      'main_img' => $upImg['path'],
    ];
    $main->first()->update($data);
    DB::commit();
    return redirect()->route('admin.showDashboard')->with('success', ' Update Successfully');
  }

  private function uploadImage($image, $folderName, Request $request)
  {
    if ($request->file($image)) {
      $fileName = $request->file($image)->getClientOriginalName();
      $path = 'images/' . $folderName . '/';
      $request->file($image)->move($path, $fileName);
      $data['path'] = $path . $fileName;
      return $data;
    }
  }

}
