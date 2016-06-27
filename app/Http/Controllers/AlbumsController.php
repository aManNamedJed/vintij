<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Album;

class AlbumsController extends Controller
{
    public function index()
    {
    	$albums = Album::all();

    	return view('album.index', [ 'albums' => $albums ]);
    }

    public function create()
    {
    	return view('album.create');
    }

    public function store( Request $request )
    {
    	$album = Album::create( $request->all() );

    	return redirect('/albums/' . $album->id );
    }

    public function show( Album $album )
    {
        $album = Album::find( $album->id );

        return view('album.show', [ 'album' => $album ]);
    }
}
