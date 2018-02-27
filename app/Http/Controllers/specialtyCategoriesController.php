<?php

namespace App\Http\Controllers;
use App\specialtyCategories;
use Illuminate\Http\Request;

class specialtyCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = specialtyCategories::orderBy('id','desc')->paginate(10);

      return view('specialty.specialtyCategories.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('specialty.specialtyCategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'name'=>'required|unique:specialty_categories',
        'description'=>'nullable',
      ]);
        $categories = new specialtyCategories;
        $categories->fill($request->all());
        $categories->save();

        return redirect()->route('specialty_categories.index')->with('success', 'Categoria creada de forma Satisfactoria');

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
        $category = specialtyCategories::find($id);
        return view('specialty.specialtyCategories.edit')->with('category', $category);
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
      $category = specialtyCategories::find($id);

      if($request->name != $category->name){
        $request->validate([
          'name'=>'required|unique:specialty_categories',
          'description'=>'nullable',
        ]);
      }
        $category->fill($request->all());

        $category->save();


        return redirect()->route('specialty_categories.index')->with('success','La Categoria: '.$request->name. ' ha sido actualizada.' );

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
