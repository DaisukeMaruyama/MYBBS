<x-layout>
    <x-slot name="title">
        {{$post}} - MYBBS
    </x-slot>
    <div class="back-link">
        &laquo; <a href="{{ route('posts.index') }}">Back</a>
    </div>
    <h1>{{$post}}</h1>
</x-layout>
