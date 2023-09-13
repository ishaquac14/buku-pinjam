<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Rohmat M. I",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis magni, impedit eaque facere, quo a saepe assumenda repudiandae obcaecati fugiat illum facilis quia error, exercitationem ea reiciendis dolorem excepturi vitae."
        ],
    
        [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Mang Diki Nugraha",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate earum possimus deleniti alias soluta ullam iusto est. Sequi voluptatum amet accusamus nisi. Corrupti sint quam tenetur odit. Voluptatem hic repellendus, et pariatur harum natus in perferendis repudiandae eveniet quam quo, facere vitae debitis atque, molestiae earum esse iusto totam? Nulla ad labore eius vel velit hic repellendus ex iure cumque non, voluptatem adipisci voluptatibus quae blanditiis eligendi veritatis accusantium porro inventore. Necessitatibus magni nam modi itaque accusantium nostrum quis aspernatur consectetur in quos! Voluptate obcaecati earum inventore nulla, ipsa dolore neque sapiente harum! Corrupti fugiat, animi reprehenderit facilis et quod!"
        ],
    ]; 

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
    return $posts-> firstWhere('slug', $slug);
    }
}