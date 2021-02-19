<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Client;
use App\Models\Comment;

class CommentsController extends Controller
{
    // 実装済：(commentブレード)口コミ記入画面
    public function index(Request $request)
    {
        $clients = DB::table('clients')->where('id', $request->id)->get();
        return view('pages.comment', ['clients' => $clients]);
    }

    // 実装済：口コミ投稿機能
    public function store(Request $request)
    {
        // Commentモデルへ
        $comments = new Comment;

        // 返り値はClientモデルのオブジェクト
        $client = Client::where('id', $request->id)->first();

        $comments->name = $request->name;
        $comments->content = $request->content;
        $comments->client_id = $client->id;
        $comments->save();

        // 返り値はコレクション
        $clients = Client::where('id', $request->id)->get();

        return view('pages.finish', ['client' => $client, 'clients' => $clients]);
    }
}
