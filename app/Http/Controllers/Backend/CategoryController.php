<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['records'] = Category::all();
        return view('backend.category.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $request->request->add(['created_by' => auth()->user()->id]);
        if($request->hasFile('icon_file')) {
            $iconfile = $request->file('icon_file');
            $iconame = time() .'_'. $iconfile->getClientOriginalName();
            $iconfile->move(public_path('backend/images/category'), $iconame);
            $request->request->add(['icon' => $iconame]);
        }
        $record= Category::create($request->all());
        if($record) {
            $request->session()->flash('success_msg', 'Category added successfully');
        }
        else{
            $request->session()->flash('error_msg', 'Category Creation Failed');

        }
        return redirect()->route('backend.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
