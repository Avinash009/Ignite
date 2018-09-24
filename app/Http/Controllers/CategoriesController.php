<?php

namespace App\Http\Controllers;

use Validator;

use Session;

use App\Category;

use Illuminate\Http\Request;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.department.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'department' => 'required',
            'year' => 'required',
            'semester' => 'required'
        ]);

        $categories = Category::all();

        foreach ($categories as $category) 
        {
        
            if($category->department == $request->department && $category->year == $request->year && 
                $category->semester == $request->semester)
            {
                $validator->errors()->add('error', 'Already you have created this category with these values   <b>'.$request->department."</b>  <b>".$category->year."</b>  <b>".$request->semester."</b> ");
                break;
            }
                
        }

        $errors = $validator->errors();

        if(!$errors->isEmpty() || $validator->fails())
        {
            return response()->json([

                'fail' => false,
                'message'=>$validator->errors()->all()

            ]);
        }
        
        $category = Category::create([

          'department' => $request->department,

          'year' => $request->year,

          'semester' => $request->semester
          
        ]);

        return response()->json([

                'success' => true,
                'message'=>"You have successfully created a category"

            ]);
        
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
        //
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
        //
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
