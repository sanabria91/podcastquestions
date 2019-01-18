<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('head')
    @section('title','List of topics')
    <body>
        <header>
            @include('header')
        </header>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Topic</th>
                        <th>Submitted By</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($topics as $topic)
                        <tr>
                            <td>{{$topic['id']}}</td>
                            <td>{{$topic['topic']}}</td>
                            <td>{{$topic['submittedBy']}}</td>
                            <td>{{$topic['status']}}</td>
                        </tr>
               @endforeach
                </tbody>
            </table>
        </div>
        <footer>
            @include('footer')
        </footer>
    </body>
</html>

