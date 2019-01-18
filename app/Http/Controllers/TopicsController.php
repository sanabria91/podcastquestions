<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topics;

class TopicsController extends Controller
{

    public function index(){
        $topics = Topics::all();
        return view('admin',compact('topics'));
    }

    /**
     * Store a topic suggestion
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $topic = new Topics([
            'topic' => $request->get('topic'),
            'submittedBy' => $request->get('name')
        ]);

        $topic->save();

        return redirect('/')->with('success','Topic has been submitted!');
    }
}
