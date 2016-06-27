@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $album->title }}
                </div>
                <div class="panel-body">

                    <div class="well">
                        <form action="/album/{{ $album->id }}/cover" method="post">

                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="file" class="form-control" placeholder="Enter Album Name..." name="title">
                        </div>
                        
                        <button class="btn btn-primary btn-lg" type="submit">
                            Add Cover Art Image
                        </button>

                        </form>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
@endsection