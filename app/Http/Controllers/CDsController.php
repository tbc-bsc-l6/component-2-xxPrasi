<?php

namespace App\Http\Controllers;
use App\Models\CD;
use Illuminate\Http\Request;

class CDsController extends Controller
{
    public function index()
    {
        $data['cds'] = CD::orderBy('id','desc')->paginate(15);
        return view('cds.index', $data);
    }

    public function userIndex()
    {
        $data['cds'] = CD::orderBy('id','desc')->paginate(15);
        return view('cds.userIndex', $data);
    }

    public function create()
    {
        return view('cds.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cd_title' => 'required',
            'first_name',
            'band' => 'required',
            'price' => 'required',
            'playlength'=>'required',
        ]);
        $cd = new CD;
        $cd->cd_title = $request->cd_title;
        $cd->first_name = $request->first_name;
        $cd->band = $request->band;
        $cd->price = $request->price;
        $cd->playlength = $request->playlength;
        $cd->save();
        return redirect()->route('cds.index')
        ->with('success','CD has been stored successfully.');
    }
    public function show(CD $cd)
    {
        return view('cds.show',compact('cd'));
    }
    public function edit(CD $cd)
    {
        return view('cds.edit',compact('cd'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'cd_title' => 'required',
            'first_name',
            'band' => 'required',
            'price' => 'required',
            'playlength'=>'required',
        ]);
        $cd = CD::find($id);
        $cd->cd_title = $request->cd_title;
        $cd->first_name = $request->first_name;
        $cd->band = $request->band;
        $cd->price = $request->price;
        $cd->playlength = $request->playlength;
        $cd->save();
        return redirect()->route('cds.index')
        ->with('success','CD has been updated successfully');
    }
    public function destroy(CD $cd)
    {
        $cd->delete();
        return redirect()->route('cds.index')
        ->with('success','CD has been deleted successfully');
    }

}
