@extends('templates.main')

@section('page.title', 'Редактирование поста')

@section('main.content')

    <x-title>
        {{ __('Редактирование поста') }}

        <x-slot name="link">
            <a href="{{ route('user.posts.show', $post['id']) }}">
                {{ __('Назад') }}
            </a>
        </x-slot>
    </x-title>

    <x-post.form action="{{ route('user.posts.update', $post['id']) }}" method="put" :post="$post">
        <x-button type="submit">
            {{ __('Сохранить') }}
        </x-button>
    </x-post.form>

@endsection

