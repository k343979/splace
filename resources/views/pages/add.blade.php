@extends('layouts.layout')

@section('main')
  <main>
    <div class="add">
      <form action="/add" method="post" enctype='multipart/form-data'>
        <div class="add-form">
          <input type="text" name="name" placeholder="name" required>
          <div class="add-form-label">
            <p>トップ画像を設定 <span style="font-size: 0.8em">(2MBまで)</span></p>
            <input type="file" name="thumbnail" placeholder="thumbnail image" required>
          </div>
          <input type="text" name="email" placeholder="email" required>
          <input type="text" name="number" placeholder="number (00-0000-0000)" required>
          <input type="text" name="address" placeholder="address (○○県)" required>
          <input type="text" name="phrase" placeholder="phrase (within 150 characters)" required>
          <input type="text" name="tag" placeholder="region (that represent your location)" required>
          <input type="text" name="price" placeholder="price (fill in only figure)" required>
          <textarea name="content" id="content" cols="30" rows="10" placeholder="content" required></textarea>
          <div class="add-btn-area">
            <button type="submit">登 録</button>
          </div>
        </div>
        {{ csrf_field() }}
      </form>
      <div class="add-btn-area">
        <a href="/">← 戻る</a>
      </div>
    </div>
  </main>
@endsection