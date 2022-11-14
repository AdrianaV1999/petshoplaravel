<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Stvar;
use Illuminate\Http\Request;

class StvarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stvari = Stvar::all();
        return response()->json($stvari, 200);

    }

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
        $stvar = Stvar::create($request->all());
        return response()->json([
            'message' => "Stvar je uspesno sacuvana!",
            'stvar' => $stvar
        ], 200);
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stvar  $stvar
     * @return \Illuminate\Http\Response
     */
    public function show(Stvar $stvar)
    {
        return response()->json($stvar, 200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stvar  $stvar
     * @return \Illuminate\Http\Response
     */
    public function edit(Stvar $stvar)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stvar  $stvar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stvar $stvar)
    {
        $stvar->update($request->all());
        return response()->json($stvar, 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stvar  $stvar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stvar $stvarr)
    {
        $stvarr->delete();
        return response()->json([
            'message' => "Stvar je uspesno obrisana!",
        ], 200);
    

    }
}
