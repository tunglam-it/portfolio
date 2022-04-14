<?php

namespace App\Http\Controllers;

use App\Http\Requests\PortfolioRequest;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
  protected $portfolio;

  public function __construct(Portfolio $portfolio)
  {
    $this->portfolio = $portfolio;
  }

  public function index()
  {
    $portfolios = $this->portfolio->all();
    return view('pagesBE.portfolio.index',compact('portfolios'));
  }

  public function create()
  {
    return view('pagesBE.portfolio.add');
  }

  public function store(PortfolioRequest $request)
  {
//    dd($request->all());
    DB::beginTransaction();
    $upImg = $this->uploadImage('image', 'portfolio', $request);

    $data = $request->all();
    $data['image'] = $upImg['path'];

    $this->portfolio->create($data);
    DB::commit();
    return redirect()->route('portfolio.index')->with('success', ' Create Successfully');
  }

  public function edit($id)
  {
    $portfolio = $this->portfolio->findOrFail($id);
    return view('pagesBE.portfolio.edit',compact('portfolio'));
  }

  public function update(PortfolioRequest $request, $id)
  {
    $portfolio = $this->portfolio->findOrFail($id);
    if(file_exists($portfolio->image)){
      unlink($portfolio->image);
    }
    DB::beginTransaction();
    $upImg = $this->uploadImage('image', 'portfolio', $request);

    $data = $request->all();
    $data['image'] = $upImg['path'];

    $portfolio->update($data);
    DB::commit();
    return redirect()->route('portfolio.index')->with('success', ' Update Successfully');
  }

  public function delete($id)
  {
    $portfolio = $this->portfolio->findOrFail($id);
    if(file_exists($portfolio->image)){
      unlink($portfolio->image);
    }
    $portfolio->delete();
    return redirect()->route('portfolio.index')->with('success', ' Delete Successfully');
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
