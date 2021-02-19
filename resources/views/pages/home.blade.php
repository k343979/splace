@extends('layouts.layout')

@section('main')
  <main>
    <div class="home">


      <div class="top">
        <p class="top-logo">あなたの求める空間が見つかる</p>
        <p class="top-text">シェアオフィス・レンタル / コワーキングスペースのポータルサイト</p>
      </div>


      {{-- search field --}}
      <div class="search">

        {{-- キーワード検索 --}}
        <form action="/" method="post">
          <div class="search-block">
            <input type="text" name="keyword" value="" placeholder="キーワードを検索"　/>
            <button type="submit">検索</button>
            {{ csrf_field() }}
          </div>
        </form>

        {{-- 検索結果の全容 --}}
        <div class="search-result">

          @if (@isset($clients))
              
            <div class="search-result-number">
              <p>{{ $message }} " {{ $client_number }} " 件</p>
            </div>
            
            {{-- 検索結果の一覧 --}}
            <div class="search-result-area">
              
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
                        <p>📍 {{ $client->address }}</p>
                        <p>¥ {{ $client->price }}</p>
                      </div>
                      <form action="/{{ $client->id }}" method="get">
                        <button>詳細へ →</button>
                        {{ csrf_field() }}
                      </form>
                    </div>
                  </div>
                </div>
              @endforeach
              
            </div>

          @endif

        </div>

      </div>

      <div class="add-btn-area">
        <form action="/add" method="get">
          <button>オフィスを登録</button>
          {{ csrf_field() }}
        </form>
      </div>


    </div>
  </main>
@endsection