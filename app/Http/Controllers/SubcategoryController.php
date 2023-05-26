<?php
  
namespace App\Http\Controllers;
   
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Http\Request;
  
class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = subcategory::latest()->paginate(5);
                                         
        return view('subcategories.index',compact('subcategories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->paginate(5);
                                         
        return view('subcategories.create',compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        
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
            'title' => 'required',
            'slug' => 'required',
            'category_id' => 'required',
            'status' => 'required',
        ]);
    
        Subcategory::create($request->all());
     
        return redirect()->route('subcategories.index')
                        ->with('success','subcategory created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        return view('subcategories.show',compact('subcategory'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        return view('subcategories.edit',compact('subcategory'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $request->validate([
            'tile' => 'required',
            'slug' => 'required',
            'category_id' => 'required',           
            'status' => 'required',
        ]);
    
        $subcategory->update($request->all());
    
        return redirect()->route('subcategories.index')
                        ->with('success','subcategory updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
    
        return redirect()->route('subcategories.index')
                        ->with('success','subcategory deleted successfully');
    }
}