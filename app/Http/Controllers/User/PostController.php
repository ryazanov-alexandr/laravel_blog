<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StorePostRequest;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    public function index() {
        $post = [
            'id' => 123,
            'title' => Lorem::text(10),
            'content' => Lorem::paragraph(),
        ];
        $posts = array_fill(0, 10, $post);

        return view('user.posts.index', compact('posts'));
    }
    public function show($post) {
        $post = [
            'id' => 123,
            'title' => Lorem::text(10),
            'content' => Lorem::paragraph(),
        ];

        return view('user.posts.show', compact('post'));
    }

    public function create() {
        return view('user.posts.create');
    }

    public function store(StorePostRequest $request) {
        alert(__('Сохранено!'));

        return redirect()->route('user.posts.show', 123);
    }

    public function update(StorePostRequest $request, $post) {
        alert(__('Сохранено!'));

        return redirect()->back();
    }

    public function edit($post) {
        $post = [
            'id' => 123,
            'title' => Lorem::text(10),
            'content' => Lorem::paragraph(),
        ];

        return view('user.posts.edit', compact('post'));
    }

    public function destroy($post) {
        return redirect()->route('user.posts');
    }

    public function like() {
        return response()->json(['foo' => 'bar'], 200, []);
    }
}
