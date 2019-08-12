@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
      <img style="height: 150px;" class="rounded-circle" src="https://instagram.fmnl13-1.fna.fbcdn.net/vp/cf5e4c62b9f1818516f183f0725d5cf7/5DC8D9C8/t51.2885-19/s320x320/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fmnl13-1.fna.fbcdn.net" alt="">
    </div>
    <div class="col-9 pt-5">
      <div class="d-flex justify-content-between align-items-baseline">
          <h1>{{ $user->username }}</h1>
          <a href="/p/create">Add New Post</a>
      </div>

      <div class="row d-flex">
          <div class="col-3"><strong>{{ $user->posts->count() }}</strong> posts</div>
          <div class="col-3"><strong>30k</strong> followers</div>
          <div class="col-3"><strong>200</strong> following</div>
      </div>

      <div class="pt-4">{{ $user->profile->title }}</div>
    <div>{{ $user->profile->description }}</div>
      <div><a href="/">{{ $user->profile->url }}</a></div>
    </div>
  </div>

  <div class="row pt-4">
    @foreach($user->posts as $post)
    <div class="col-4 pb-4">
    <img class="w-100" src="/storage/{{ $post->image }}" alt="{{ $post->caption }}">
    </div>
    @endforeach
  </div>
</div>
@endsection
