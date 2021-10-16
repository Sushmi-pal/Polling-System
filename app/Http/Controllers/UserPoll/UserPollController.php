<?php

namespace App\Http\Controllers\UserPoll;

use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Models\Options;
use App\Models\Que_Opt;
use App\Models\Question;
use App\Models\Questions;
use Illuminate\Http\Request;

class UserPollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $q=Question::with('options')->get();
        return view('poll.add_poll',compact('q'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->except('_token') as $key => $part) {
            Que_Opt::create([
                'question_id'=>$key,
                'option_id'=>$part
            ]);

        }
        $que=Question::all();
        return view('poll.show', compact('que'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row=count(Que_Opt::where('question_id',$id)->get());
        $opt=Option::where('question_id',$id)->get();
        $a=[];
        for ($i=1; $i<=count($opt); $i++){
            $r=Que_Opt::where('option_id',$i)->where('question_id',$id)->count();
            array_push($a, $r);
        }
        return view('poll.result', compact('row', 'opt', 'a'));
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
