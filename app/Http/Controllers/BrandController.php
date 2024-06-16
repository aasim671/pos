<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;


class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::get();
        return view('brand.index', compact('brands'));
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('brand.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brand->brand_name = $request->BrandName;
        $brand->status = $request->status;
        $brand->save();
        return redirect('brands');
    }

    public function delete($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('brands');
    }

    public function store(Request $request)
    {
        $brand = new Brand;
        $brand->brand_name = $request->BrandName;
        $brand->status = $request->status;
        $brand->save();
        return redirect('brands');
    }
}
