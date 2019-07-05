<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Carbon\Carbon;
use Storage;
//use Intervention\Image\Facades\Image;
use Image;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
        'name' => 'required|unique:categories',
        'image' => 'required|mimes:jpeg, bmp, png, jpg'
       ]);

       //form image
       $image = $request->file('image');
       $slug = str_slug($request->name);

       if(isset($image))
       {
        $currentDate = Carbon::now()->toDateString();
        $imagename = $slug.'-'.$currentDate.'-'.uniqid().'-'.$image->getClientOriginalExtension();
        //cek dir category
        if(!Storage::disk('public')->exists('category'))
        {
            Storage::disk('public')->makeDirectory('category');
        }
        //resize
        $category = Image::make($image)->resize(1600, 479)->stream();
        Storage::disk('public')->put('category/'.$imagename, $category);

        //cek dir category slider
        if(!Storage::disk('public')->exists('category/slider'))
        {
            Storage::disk('public')->makeDirectory('category/slider');
        }

         //resize slider
        $slider = Image::make($image)->resize(500, 333)->stream();
        Storage::disk('public')->put('category/slider/'.$imagename, $slider);

       }else{
        $imagename = 'default.png';
       }

       $category = new Category();
       $category->name = $request->name;
       $category->slug = $slug;
       $category->image = $imagename;
       $category->save();

       Toastr::success('category successfully saved :)','Success');
       return redirect()->route('admin.category.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[
        'name' => 'required',
        'image' => 'mimes:jpeg, bmp, png, jpg'
       ]);

       //form image
       $image = $request->file('image');
       $slug = str_slug($request->name);
       $category = Category::find($id);

       if(isset($image))
       {
        $currentDate = Carbon::now()->toDateString();
        $imagename = $slug.'-'.$currentDate.'-'.uniqid().'-'.$image->getClientOriginalExtension();
        //cek dir category
        if(!Storage::disk('public')->exists('category'))
        {
            Storage::disk('public')->makeDirectory('category');
        }

        //hapus gbr lama
         if(Storage::disk('public')->exists('category/'.$category->image))
        {
           Storage::disk('public')->delete('category/'.$category->image);
        }

        //resize
        $categoryimage = Image::make($image)->resize(1600, 479)->stream();
        Storage::disk('public')->put('category/'.$imagename, $categoryimage);

        //cek dir category slider
        if(!Storage::disk('public')->exists('category/slider'))
        {
            Storage::disk('public')->makeDirectory('category/slider');
        }

         //hapus gbr lama slider
         if(Storage::disk('public')->exists('category/slider/'.$category->image))
        {
           Storage::disk('public')->delete('category/slider/'.$category->image);
        }

         //resize slider
        $slider = Image::make($image)->resize(500, 333)->stream();
        Storage::disk('public')->put('category/slider/'.$imagename, $slider);

       }else{
        $imagename = $category->image;
       }

      
       $category->name = $request->name;
       $category->slug = $slug;
       $category->image = $imagename;
       $category->save();

       Toastr::success('category successfully updated :)','Success');
       return redirect()->route('admin.category.index');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        if(Storage::disk('public')->exists('category/'.$category->image))
        {
            Storage::disk('public')->delete('category/'.$category->image);
        }

        if(Storage::disk('public')->exists('category/slider/'.$category->image))
        {
           Storage::disk('public')->delete('category/slider/'.$category->image);
        }

        $category->delete();
        Toastr::success('category successfully delete :)','Success');
        return redirect()->back();
    }
}
