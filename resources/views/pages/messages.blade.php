@extends('layouts.default')

@section('content')

    <div class="container">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Message</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Message 1</td>
                <td><button type="button" class="btn btn-primary" id="delete1">Delete</button></td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Message 2</td>
                <td><button type="button" class="btn btn-primary" id="delete2">Delete</button></td>

            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td><button type="button" class="btn btn-primary" id="delete3">Delete</button></td>
            </tr>
            </tbody>
        </table>

    </div>

@endsection
