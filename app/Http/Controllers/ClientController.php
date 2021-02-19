<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Client;
use App\Models\Comment;

class ClientController extends Controller
{
    // 実装済：(detailブレード)オフィス・スペースの詳細画面
    // 実装済：口コミの表示
    public function profile(Request $request)
    {
        $client = Client::where('id', $request->id)->with('comments')->first();

        $comments = Comment::paginate(5);

        return view('pages.detail', ['client' => $client, 'comments' => $comments]);
    }
}
