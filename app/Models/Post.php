<?php

namespace App\Models;


class Post
{
  private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Ryuuzen",
        "body" => "    
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse distinctio delectus animi ipsam itaque voluptatum, odio pariatur, modi est libero perferendis molestiae perspiciatis quas temporibus nemo. Modi voluptatum maiores fuga perferendis dolores consequatur laboriosam obcaecati, mollitia aperiam magnam. Sint commodi officia nemo ducimus autem dicta tempore, amet quo natus id maxime corrupti, ipsa necessitatibus recusandae ipsum consequuntur cum quibusdam deserunt fugit praesentium nesciunt, quidem delectus. Possimus est doloremque asperiores eligendi."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Ryuuzen",
        "body" => "    
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse distinctio delectus animi ipsam itaque voluptatum, odio pariatur, modi est libero perferendis molestiae perspiciatis quas temporibus nemo. Modi voluptatum maiores fuga perferendis dolores consequatur laboriosam obcaecati, mollitia aperiam magnam. Sint commodi officia nemo ducimus autem dicta tempore, amet quo natus id maxime corrupti, ipsa necessitatibus recusandae ipsum consequuntur cum quibusdam deserunt fugit praesentium nesciunt, quidem delectus. Possimus est doloremque asperiores eligendi."
    ],
];  

public static function all()
 {
    return collect(self::$blog_posts);
}


public static function find($slug) 
{
  $posts = static::all();
    return $posts->firstWhere('slug', $slug);

}

}
