<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('head')
    @section('title','Don\'t Quote Me')
    <body>
        <header>
            @include('header')
        </header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="text-center">Suggest a topic for our next show</h2>
                </div>
            </div>
            <form method="post" action="{{route('create.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4 offset-md-4">
                        <label for="Name">Name:</label>
                        <input type="text" class="form-control" id="Name" name="name">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 offset-md-4">
                        <label for="Topic">Topic:</label><br>
                        <textarea id="Topic" name="topic"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 offset-md-4">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <footer>
            @include('footer')
        </footer>
    </body>
</html>
