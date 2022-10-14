<?php

namespace App\Http\Controllers;

use App\Filters\ChildrenFilter;
use App\Http\Resources\ChildCollection;
use App\Http\Resources\GuardianCollection;
use App\Models\Child;
use App\Models\Guardian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $children = Child::with('guardian','school')->get();
        return new ChildCollection($children);

    }

//    public function index(Request $request)
//    {
//        $filter = new ChildrenFilter();
//        $queryItems = $filter->transform($request);
//
//        if(count($queryItems)==0){
//            return new ChildCollection(Child::paginate());
//        }else{
//            $invoices = Child::where($queryItems)->paginate();
//            return new ChildCollection($invoices->appends($request->query()));
//        }
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
