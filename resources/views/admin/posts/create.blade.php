@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Nuovo Post
                    </div>

                    <div class="card-body ">

                        <form action="{{route("posts.store")}}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="exampleInputEmail1">Titolo</label>
                              <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo ...">
                            </div>
            
                            <div class="form-group">
                              <label for="content">Contenuto</label>
                              <textarea type="text" class="form-control" id="content" name="content" rows="6" placeholder="Inserisci il contenuto del post ..."></textarea>
                            </div>

                            <div class="form-group form-checbox">
                                <label for="published" class="form-check-label" id="published">Pubblica</label>
                                <input type="checkbox" class="form-check-label" id="published" name="published">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection