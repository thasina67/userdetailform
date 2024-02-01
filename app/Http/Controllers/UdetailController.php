<?php

namespace App\Http\Controllers;


use App\Models\Userdetail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


class UdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $userdetails=Userdetail::all();
        
        return view('form.index',[ 'userdetails'=>$userdetails]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() :View
    {
           
        return view('form.create');
        return redirect('');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        
        $userdetails=$request->all();
        
        $userdetails['subject']=implode(',',$request->input('subject'));  //implode use to convert array to string.   explode use to convert string to array 
        Userdetail::create($userdetails);   //Userdetail is the model name
        return redirect()->route('form.index')->with('success','stored successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {   
        
        $userdetails=Userdetail::find($id);
        // dd($userdetails);
        return view('form.show', [ 'userdetails'=>$userdetails]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $userdetails= Userdetail::find($id);
       
        return view('form.edit', [ 'userdetails'=>$userdetails]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $userdetails=Userdetail::find($id);
        $userdetails->update($request->all());
        return redirect()->route('form.index')->with('updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $userdetails=Userdetail::find($id);
        $userdetails->delete();
        return redirect()->route('form.index')->with('Deleted successfully!');
    }
}
