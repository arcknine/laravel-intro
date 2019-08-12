<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
  public function show(User $user)
  {
    return view('profiles.index', compact('user'));
  }

  public function edit(User $user)
  {
    $this->authorize('update', $user->profile);
    return view('profiles.edit', compact('user'));
  }

  public function update(User $user)
  {
    $this->authorize('update', $user->profile);

    $data = request()->validate([
      'title' => 'required',
      'description' => 'required',
      'url' => 'url',
      'image' => 'image'
    ]);

    if (request('image'))
    {
      $imagePath = request('image')->store('profile', 'public');
      $image = Image::make(public_path("storage/{$imagePath}"))->fit(450, 450);
      $image->save();
      $imgArr = ['image' => $imagePath];
    }

    $data = array_merge($data, $imgArr);

    auth()->user()->profile->update($data);

    return redirect("/profile/{$user->id}");
  }
}
