<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
  protected $about;

  public function __construct(About $about)
  {
    $this->about = $about;
  }

  public function index()
  {
    $abouts = $this->about->all();
    return view('pagesBE.about.index',compact('abouts'));
  }

  public function create()
  {
    return view('pagesBE.about.add');
  }

  public function store(AboutRequest $request)
  {
    DB::beginTransaction();
    $upImg = $this->uploadImage('image', 'about', $request);

    $data = $request->all();
    $data['image'] = $upImg['path'];

    $this->about->create($data);
    DB::commit();
    return redirect()->route('about.index')->with('success', ' Create Successfully');
  }

  public function edit($id)
  {
    $about = $this->about->findOrFail($id);
    return view('pagesBE.about.edit',compact('about'));
  }

  public function update(AboutRequest $request, $id)
  {
    $about = $this->about->findOrFail($id);
    if(file_exists($about->image)){
      unlink($about->image);
    }
    DB::beginTransaction();
    $upImg = $this->uploadImage('image', 'about', $request);

    $data = $request->all();
    $data['image'] = $upImg['path'];

    $about->update($data);
    DB::commit();
    return redirect()->route('about.index')->with('success', ' Update Successfully');
  }

  public function delete($id)
  {
    $about = $this->about->findOrFail($id);
    if(file_exists($about->image)){
      unlink($about->image);
    }
    $about->delete();
    return redirect()->route('about.index')->with('success', ' Delete Successfully');
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
