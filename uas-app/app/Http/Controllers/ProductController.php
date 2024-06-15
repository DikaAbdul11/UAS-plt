<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Product;
 
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $submission = Product::orderBy('created_at', 'DESC')->get();
  
        return view('submission.index', compact('submission'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('submission.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());
 
        return redirect()->route('submission')->with('success', 'Your Submission added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $submission = Product::findOrFail($id);
  
        return view('submission.show', compact('submission'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $submission = Product::findOrFail($id);
  
        return view('submission.edit', compact('submission'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $submission = Product::findOrFail($id);
  
        $submission->update($request->all());
  
        return redirect()->route('submission')->with('success', 'Your submission updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $submission = Product::findOrFail($id);
  
        $submission->delete();
  
        return redirect()->route('submission')->with('success', 'file deleted successfully');
    }
}