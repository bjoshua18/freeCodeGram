@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3">
                <a href="/profile/{{ $post->user->id }}" class="text-dark">
                    <img src="/storage/{{ $post->image }}" alt="post" class="w-100">
                </a>
            </div>
        </div>

        <div class="row py-4">
            <div class="col-46 offset-3">
                <div>
                    <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}" class="text-dark">
                            {{ $post->user->username }}
                        </a>
                    </span>
                        {{ $post->caption }}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
