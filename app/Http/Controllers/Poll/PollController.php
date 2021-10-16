<?php

namespace App\Http\Controllers\Poll;

use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Models\Options;
use App\Models\poll;
use App\Models\Question;
use App\Models\Questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PollController extends Controller
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
        return view('poll.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Question::create([
            "name"=>$request->question
        ]);
        $q_id=DB::select("select id from questions where name='$request->question'");
        $aaa=[];
        for ($i=0; $i<count($request->opt); $i++){
            array_push($aaa, $request->opt[$i]);
        }
        for ($i=0; $i<count($request->opt); $i++){
            foreach ($q_id as $id){
                $qq=$id->id;
            }
            Option::create([
                "question_id"=>$qq,
                "name"=>$request->opt[$i],
                "option_num"=>$i+1
            ]);
        }
        $que=Question::all();
        return view('poll.show_que', compact('que'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\poll  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(poll $cr)
    {
        $q=Question::with('options')->get();
        return view('poll.view',compact('q'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\poll  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(poll $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\poll  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, poll $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\poll  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(poll $cr)
    {
        //
    }
}
