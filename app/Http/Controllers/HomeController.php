<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Client;

class HomeController extends Controller
{
    // 実装済：(homeプレード)ホーム画面の呼び出し
    public function index(Request $request)
    {
        // Clientモデルからランダムに3件のレコードを取得
        $clients = Client::inRandomOrder()->limit(3)->get();

        $client_number = $clients->count();

        return view('pages.home', ['clients' => $clients, 'client_number' => $client_number, 'message' => '表示件数']);
    }

    // 実装済：データベース内にあるclients情報の検索機能
    public function search(Request $request)
    {
        // clientモデルの紐付け,クエリ
        $query = Client::query();

        // inputタグの入力値(name属性で)と紐付け
        $keyword = $request->keyword;

        // inputタグに何らかの記述がされた場合
        if (!empty($keyword)) {
            // clientテーブル内の複数カラムでデータを検索
            $clients = $query->where('name', 'like', '%' . $keyword . '%')->orWhere('tag', 'like', '%' . $keyword . '%')->orWhere('phrase', 'like', '%' . $keyword . '%')->get();
            $client_number = $clients->count();

            return view('pages.home', ['clients' => $clients, 'client_number' => $client_number, 'message' => '<' . $keyword . '>の' . '検索結果']);
        }
    }
}
