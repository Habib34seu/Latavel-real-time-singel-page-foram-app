<?php

namespace App\Http\Controllers;

use App\Models\Caregory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\CategoryResource;
class CaregoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CategoryResource::collection(Caregory::get());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Caregory::create($request->all());
        $category = new Caregory;
        $category ->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->save();
        return response('create', Response::HTTP_CREATED);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caregory  $caregory
     * @return \Illuminate\Http\Response
     */
    public function show(Caregory $category)
    {
       return new CategoryResource($category);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caregory  $caregory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caregory $category)
    {
        $category->update(
            [
                'name'=>$request->name,
                'slug'=>Str::slug($request->name),
            ]
        );
        return response('updated',Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caregory  $caregory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caregory $category)
    {
        $category->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
