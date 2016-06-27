@extends('layouts.app')

@section('content')
    
    @include('album.forms.new')

    <div class="row">
        <div class="col-md-12">
            
            @foreach($albums as $album)

                <h2>{{ $album->title }}</h2>

            @endforeach

        </div>
    </div>
@endsection
