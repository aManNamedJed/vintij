<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add a New Album
            </div>
            <div class="panel-body">

                <form action="/albums/store/" method="post">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Album Name..." name="title">
                    </div>
                    
                    <button class="btn btn-primary btn-lg" type="submit">
                        Add Album
                    </button>

                </form>

            </div>
        </div>
    </div>
</div>