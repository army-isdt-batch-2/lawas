@php $active = 'timekeeping' @endphp
@extends('layouts.main')
@section('title','Timekeeping')
@section('content')
<!-- <h1 class="text-warning">Teacher</h1><br> -->
<div class="card bg-warning" style="width:100%;">
    <div class="card-body">
        <h5 class="card-title">test </h5>
        // all time keeping
        <hr>


        <a href="/create_form/timekeeping" class="float-end">
          <button class="btn btn-dark text-warning pull-right"><b>Create</b></button>
        </a>

        <a href="/view/timekeeping" class="btn text-warning btn-dark pull-right"><b>View</b></a>
        <br class="clear">

        <hr>


        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Time-In</th>
                    <th scope="col">Time-Out</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td> <input class="form-control" type="time" name="" value=""> </td>
                    <td> <input class="form-control" type="time" name="" value=""> </td>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
                <tr>
                    <td scope="row">2</td>
                    <td> <input class="form-control" type="time" name="" value=""> </td>
                    <td> <input class="form-control" type="time" name="" value=""> </td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                </tr>
                <tr>
                    <td scope="row">3</td>
                    <td> <input class="form-control" type="time" name="" value=""> </td>
                    <td> <input class="form-control" type="time" name="" value=""> </td>
                    <td>Larry</td>
                    <td>Bird</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
