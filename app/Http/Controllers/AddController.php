<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Client;

class AddController extends Controller
{
    // 実装済：(addブレード)オフィス登録画面
    public function index(Request $request)
    {
        return view('pages.add');
    }

    // 実装済：(addブレード)オフィス登録機能
    public function store(Request $request)
    {
        $client = new Client;

        $client->name = $request->name;
        $client->email = $request->email;
        $client->number = $request->number;
        $client->address = $request->address;
        $client->phrase = $request->phrase;
        $client->tag = $request->tag;
        $client->price = $request->price;
        $client->content = $request->content;

        // name属性が'thumbnail'のinputタグをファイル形式に、画像をpublic/avatarに保存
        $image_path = $request->file('thumbnail')->store('public/avatar/');

        // 上記処理にて保存した画像に名前を付け、clientテーブルのthumbnailカラムに、格納
        $client->thumbnail = basename($image_path);

        $client->save();

        // $client->thumbnail = $request->thumbnail;

        // $client->save();
        // $param = [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'number' => $request->number,
        //     'address' => $request->address,
        //     'phrase' => $request->phrase,
        //     'tag' => $request->tag,
        //     'price' => $request->price,
        //     'content' => $request->content,
        // ];
        // DB::table('clients')->insert($param);
        // return redirect('/');
        return redirect()->route('home');
    }
}
