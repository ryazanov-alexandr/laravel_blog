<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index() {
        return 'Вывод всех';
    }
    public function show($post) {
        return $post;
    }

    public function create() {
        return 'Страница создания поста';
    }

    public function store() {
        return 'Запрос на создание поста';
    }

    public function update() {
        return 'Запрос на изменение поста';
    }

    public function edit($post) {
        return 'Страница изменения поста';
    }

    public function destroy() {
        return 'Удаление поста';
    }
}
