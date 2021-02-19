@extends('layouts.layout')

@section('main')
  <main>

    <div class="comment">

      @foreach ($clients as $client)
          
        <div class="search-result-container">
          <h2 class="search-result-name">{{ $client->name }}</h2>
          <div class="search-result-block">
            <img class="search-result-thumbnail" src="{{ asset('storage/avatar/' . $client->thumbnail) }}" alt="no image" />
            <div class="search-result-content">
              <div class="search-result-text">
                <p>{{ $client->phrase }}</p>
              </div>
              <div class="search-result-detail">
                <p>📍 {{ $client->tag }}</p>
                <p>¥ {{ $client->price}}</p>
              </div>
              <form action="/{{ $client->id }}" method="get">
                <button>詳細へ →</button>
                {{ csrf_field() }}
              </form>
            </div>
          </div>
        </div>

        <div class="comment-container">
          <h2 class="comment-logo">{{ $client->name }} の口コミを書く</h2>
        </div>
        
        <form action="/comment/{{ $client->id }}" method="post">
          <div class="comment-form">
            <input type="text" name="name" placeholder="your name" required>
            <textarea name="content" id="content" cols="30" rows="10" placeholder="comment" required></textarea>
            <div class="comment-btn-area">
              <button>投 稿</button>
            </div>
          </div>
          {{ csrf_field() }}
        </form>
      @endforeach
      <div class="comment-btn-area">
        @foreach ($clients as $client)  
          <a href="/{{ $client->id }}">← 戻る</a>
        @endforeach
      </div>

    </div>

  </main>
@endsection