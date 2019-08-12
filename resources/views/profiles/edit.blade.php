@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')
    <div class="row">
      <div class="col-8 offset-2">
        <h1>Edit Profile</h1>

        <div class="form-group row">
          <label for="title" class="col-md-4 col-form-label">Title</label>

          <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus>

          @error('title')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group row">
          <label for="description" class="col-md-4 col-form-label">Description</label>

          <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="10" autocomplete="description">{{ old('description') ?? $user->profile->description }}</textarea>

          @error('description')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group row">
          <label for="url" class="col-md-4 col-form-label">URL</label>

          <input id="url" name="url" type="text" class="form-control @error('url') is-invalid @enderror" value="{{ old('url') ?? $user->profile->url }}" autocomplete="url">

          @error('url')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group row">
          <label for="image" class="col-md-4 col-form-label">Profile Image</label>
          <input type="file" class="form-control-file" name="image" id="image">

          @error('image')
            <span class="invalid-feedback" style="display:block;" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group row pt-4">
          <button class="btn btn-primary">Update Profile</button>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection
