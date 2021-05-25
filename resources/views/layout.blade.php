@php $active = 'layout' @endphp
@extends('layouts.main')
@section('title','Layout Test')
@section('content')
<div class="container-fluid">
    <h1 class="text-warning">Teacher</h1><br>
    <div class="card bg-warning" style="width:100%;">
        <div class="card-body">
            <h5 class="card-title">All records <button class="btn btn-dark float-end">Create</button></h5><hr>
            <form action="#">
                <div class="col-4"></div>
                <div class="col-4"></div>
                <div class="col-4 float-end"><input type="text" class="form-control" placeholder="Search"></div>
                <br><br>
            </form>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection