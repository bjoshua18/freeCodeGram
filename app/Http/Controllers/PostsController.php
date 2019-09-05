<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

    public function __construct() {
        // Para que solo accedan los usuarios autenticados
        $this->middleware('auth');
    }

    public function index() {
        $users = auth()->user()->following()->pluck('profiles.user_id');
        $posts = Post::whereIn('user_id', $users)->latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        // Validamos los datos del post
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image']
        ]);

        // Movemos la imagen a la carpeta storage
        $imagePath = request('image')->store('uploads', 'public');

        // Redimensionamos la imagen
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        // Creamos el objeto post
        /*
        $post = new \App\Post();
        $post->caption = $data['caption'];
        $post->save();
        */

        // Otra forma de crear el objeto post
        auth()  // Llamamos al metodo auth
            ->user() // Autenticamos al usuario
            ->posts() // Llamamos al metodo posts del usuario y obtenemos la clase Post
            ->create([ // Creamos el objeto con los datos del form
                'caption' => $data['caption'],
                'image' => $imagePath
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(\App\Post $post) {
        return view('posts.show', compact('post'));
    }
}
