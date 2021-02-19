@extends('layouts.layout')

@section('main')
    <main>

      <div class="finish">

        <div class="finish-container">
          <div class="finish-logo-label">
            <h2 class="finish-logo">投稿完了</h2>
          </div>
          <div class="finish-content">
            <p>{{ $client->name }} へ、口コミの投稿が完了しました。</p>
            <a href="/{{ $client->id }}">口コミを見る</a>
          </div>
        </div>
        <div class="finish-btn-area">
          <a href="/">ホームへ →</a>
        </div>
      </div>
    </main>
@endsection