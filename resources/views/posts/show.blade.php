@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-8">
          <img src="/storage/{{ $post->image }}" alt="" class="w-100">
      </div>
      <div class="col-4">
        <div>
          <div class="d-flex align-items-center">
            <div class="pr-3">
              <img src="/storage/{{ $post->user->profile->image }}" class="rounded-circle" style="max-width: 50px" alt="">
            </div>
            <a href="/profile/{{ $post->user->id }}" class="text-dark font-weight-bold">{{ $post->user->username }}</a>
            <a href="#" class="pl-5">follow</a>
          </div>
          <hr>
          <p>
              <a href="/profile/{{ $post->user->id }}" class="text-dark font-weight-bold">
                <span>{{ $post->user->username }}</span>
              </a>
            {{ $post->caption }}
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection
