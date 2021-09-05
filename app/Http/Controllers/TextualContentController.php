<?php

namespace App\Http\Controllers;

use App\Models\TextualContent;
use Illuminate\Http\Request;

class TextualContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int      $id
     * @return Response
     */
    public function show($id)
    {
        $currentText = TextualContent::where('id', $id)->first();

        return view('teacher.payement-details', compact('currentText'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int      $id
     * @return Response
     */
    public function edit()
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int      $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate(['text'=> ['required','regex:/BE[a-zA-Z0-9]{2}\s?([0-9]{4}\s?){3}\s?/']]);
        $textualContent = TextualContent::where('id', $id)->first();
        $textualContent->text = $validated['text'];
        $textualContent->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int      $id
     * @return Response
     */
    public function destroy($id)
    {
    }
}
