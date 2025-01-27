<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;

class ThreadController extends Controller
{
    //

    public function store(Request $request)
    {
        // ... スレッド作成処理 ...
        $thread = new Thread();
        $thread->save();

        $thread->tags()->attach($request->tags); // タグ付け
    }

    public function update(Request $request, Thread $thread)
    {
        // ... スレッド更新処理 ...

        $thread->tags()->sync($request->tags); // タグ付け更新
    }
}