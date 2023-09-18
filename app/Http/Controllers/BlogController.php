<?php

namespace App\Http\Controllers;

use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class BlogController extends Controller
{
    public function index(Request $request) {
        $search = $request['search'];
        $category_id = $request['category_id'];

        $categories = [
            null => __('Все категории'),
            1 =>  __('Первая категория'),
            2 => __('Вторая категория'),
        ];

        $post = [
            'id' => 123,
            'title' => 'Lorem::text(10)',
            'content' => Lorem::paragraph(),
            'category_id' => Lorem::numerify('#'),
        ];
        $posts = array_fill(0, 10, $post);
        $posts = array_filter($posts, function ($post) use($search, $category_id){
            if($search && !str_contains(strtolower($post['title']), strtolower($search))) {
                return false;
            }

            if($category_id && $post['category_id'] < $category_id) {
                return false;
            }

            return true;
        });
        return view('blog.index', compact('posts', 'categories'));
    }

    public function show($post) {
        $post = [
            'id' => 123,
            'title' => Lorem::text(10),
            'content' => Lorem::paragraph(),
        ];

        return view('blog.show', compact('post'));
    }
}
