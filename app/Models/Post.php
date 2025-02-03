<?php 

namespace App\Models;



class Post 
{
    public static function all()
    {
        return [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul artikel 1',
            'author' => 'Chairil syahrain',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt dolor autem, tempora Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, possimus totam.'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul artikel 2',
            'author' => 'Chairil syahrain',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt dolor autem, tempora Lorem ipsum dolor sit amet.'
        ]
    ] ;
    }
}

?>