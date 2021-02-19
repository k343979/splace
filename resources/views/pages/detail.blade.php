@extends('layouts.layout')

@section('main')
  <main>
    <div class="detail">

      <div class="top">
        <p class="top-logo">あなたの求める空間が見つかる</p>
        <p class="top-text">シェアオフィス・レンタル / コワーキングスペースのポータルサイト</p>
      </div>

      <div class="detail-btn-area">
        <a href="/">← 戻る</a>
      </div>

      {{-- @foreach ($clients as $client) --}}
        <div class="detail-container">
          <h2 class="detail-name">{{ $client->name }}</h2>
          <div class="detail-block">
            <div class="detail-box">
              <img class="detail-thumbnail" src="{{ asset('storage/avatar/' . $client->thumbnail) }}" alt="no image" />
            </div>
            <div class="detail-box">
              <p>{{ $client->phrase }}</p>
            </div>
            <div class="detail-box">
              <h2 class="detail-logo">詳細</h2>
              <p>{{ $client->content }}</p>
            </div>
            <div class="detail-box">
              <h2 class="detail-logo">価格</h2>
              <p class="detail-box-content">¥{{ $client->price }}</p>
            </div>
            <div class="detail-box">
              <h2 class="detail-logo">メールアドレス</h2>
              <p class="detail-box-content">{{ $client->email }}</p>
            </div>
            <div class="detail-box">
              <h2 class="detail-logo">電話番号</h2>
              <p class="detail-box-content">{{ $client->number }}</p>
            </div>
            <div class="detail-box">
              <h2 class="detail-logo">住所</h2>
              <p class="detail-box-content">{{ $client->address }}</p>
            </div>
          </div>
        </div>
      {{-- @endforeach --}}
      
      <div class="detail-btn-area">
        <a href="/">← 戻る</a>
      </div>

      <div class="detail-container">
        <h2 class="detail-logo">口コミ</h2>
        @foreach ($comments as $comment)
          @if ( $client->id === $comment->client_id )
            <div class="detail-block">
              <div class="detail-comment-box">
                <h2 class="detail-comment-name">{{ $comment->name }}さん</h2>
                <p>{{ $comment->content }}</p>
                <div class="detail-comment-date">
                  <p>{{ $comment->created_at->format('Y/m/d') }}</p>
                </div>
              </div>
            </div>
          @endif
        @endforeach

        <div class="paginator">
          {{ $comments->links('vendor.pagination.bootstrap-4') }}
        </div>

      </div>
      

      <div class="comment-btn-area">
        <form action="/comment/{{ $client->id }}" method="get">
          <button>口コミを書く →</button>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </main>
@endsection