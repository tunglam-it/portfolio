<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
  protected $service;

  public function __construct(Service $service)
  {
    $this->service = $service;
  }

  public function index()
  {
    $services = $this->service->all();
    return view('pagesBE.service.index',compact('services'));
  }

  public function create()
  {
    return view('pagesBE.service.add');
  }

  public function store(ServiceRequest $request)
  {
    $data = $request->all();
    $this->service->create($data);
    return redirect()->route('service.index')->with('success', ' Create Successfully');
  }

  public function edit($id)
  {
    $service = $this->service->findOrFail($id);
    return view('pagesBE.service.edit',compact('service'));
  }

  public function update(ServiceRequest $request, $id)
  {
    $service = $this->service->findOrFail($id);
    DB::beginTransaction();
    $data = $request->all();
    $service->update($data);
    DB::commit();
    return redirect()->route('service.index')->with('success', ' Update Successfully');
  }

  public function delete($id)
  {
    $this->service->findOrFail($id)->delete();
    return redirect()->route('service.index')->with('success', ' Delete Successfully');
  }
}
