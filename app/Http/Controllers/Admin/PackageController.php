<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $package, $subCategories;

    public function index()
    {
        $auth_id=auth()->user()->id;
        $this->package=Package::latest()->get();

        if (auth()->user()->role_type==2){
            $this->package=Package::where('user_id', $auth_id)->get();
        }
        return view('admin.package.index', [
            'packages' => $this->package,
        ]);
//        return $auth_user;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
//            'title'=>'required |string|Alpha',
            'image' => 'required|image',
        ],
            [
                'image.required' => 'image koi aaa?',
                'image.image' => 'onno file ken den?'
            ]);
        Package::createOrUpdatePackage($request);
        return redirect()->back()->with('success', 'Package created successfully.');
//        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('admin.package.show', [
            'package' => Package::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.package.edit', [
            'package' => Package::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'=>'required |string',
        ]);
        Package::createOrUpdatePackage($request, $id);
        return redirect()->route('packages.index')->with('success', 'Package updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->package = Package::find($id);
        if (isset($this->package->image)) {
            if (file_exists($this->package->image)) {
                unlink($this->package->image);
            }
        }
        $this->package->delete();
        return redirect()->back()->with('success','Package deleted successfully.');
    }

    public function approvePackage($id)
    {
        $this->package = Package::where('id', $id)->first();
        $this->package->status == 0 ? $this->package->status = 1 : $this->package->status = 0;
        $this->package->save();
        return redirect()->back()->with('success', 'Package active successfully.');
    }
}
