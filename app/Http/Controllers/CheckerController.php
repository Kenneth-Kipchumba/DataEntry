<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checker;

class CheckerController extends Controller
{
    /**
     * Display the checker page
     *
     * @param  \App\Models\Checker  $checker
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('checker.show');
    }

    /**
     * Check if Id Exists. If not save it in database
     * then redirect to iframe for user to proceed with data entry
     *
     * @return \Illuminate\Http\Response
     */
    public function check_id(Request $request)
    {
        $validated = $request->validate([
            'national_id' => 'required|unique:checkers|min:6|max:10'
        ]);

        Checker::create([
            'national_id' => $request->input('national_id'),
            'agent_name' => $request->input('agent_name')
        ]);

        return redirect()->to('data_entry');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data_entry()
    {
        return view('checker.data_entry');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->to('checker/create');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checker  $checker
     * @return \Illuminate\Http\Response
     */
    public function edit(Checker $checker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Checker  $checker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checker $checker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checker  $checker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checker $checker)
    {
        //
    }
}
