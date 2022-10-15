<?php

namespace App\Models;

class Post
{

    private static $blog_posts = [
        [
            "title" => "test 1",
            "slug" => "test-1",
            "author" => "ajul",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, incidunt, tenetur exercitationem esse aperiam porro deleniti tempora autem illum, quaerat illo unde? Amet non consectetur quia, tempore nostrum labore quod."
        ],
        [
            "title" => "test 2",
            "slug" => "test-2",
            "author" => "ajullll22",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, incidunt, tenetur exercitationem esse aperiam porro deleniti tempora autem illum, quaerat illo unde? Amet non consectetur quia, tempore nostrum labore quod."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        $post = $posts->firstWhere('slug', $slug);

        return $post;
    }
}
