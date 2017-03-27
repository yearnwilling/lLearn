<?php

namespace App\Http\Controllers;

use App\Comments;
use Illuminate\Http\Request;

use App\Http\Requests;

class CommentController extends Controller
{
    //
    public function store(Request $request)
    {
        $comment = $request->all();
        if (Comments::create($comment)) {
            return redirect()->back();
        } else {
            return redirect()->back()->withInput()->withErrors('评论发表失败！');
        }
    }
}
