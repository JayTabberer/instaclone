@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="data:image/jpeg;base64,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" class="rounded-circle">
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post </a>
            </div>

            <!-- @can('update', $user->profile) -->
            <a href="/profile/{{ $user->id }}/edit">Edit profile</a>
            <!-- @endcan -->
            
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div> <a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
        @endforeach



    </div>
</div>
@endsection