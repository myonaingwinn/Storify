<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Story as stry;
use App\Story;
use Illuminate\Support\Facades\Auth;

class StoriesController extends Controller
{
    public function index()
    {
        $stories = stry::where('user_id', Auth()->user()->id)
            ->orderBy('id', 'desc')
            ->paginate(3);
        return view('stories.index', ['stories' => $stories]);
    }

    public function view(Story $story)
    {
        // $story = stry::where('id', $id)->get();
        // $story = stry::findOrFail($id);
        // dd($story);
        return view('stories.view', ['story' => $story]);
    }
}
