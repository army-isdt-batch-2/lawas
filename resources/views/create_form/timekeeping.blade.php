@php $active = 'timekeeping' @endphp
@extends('layouts.main')
@section('title','Add Attendance Record')
@section('content')

<!-- <h1 class="text-warning">Teacher</h1><br> -->
<div class="card bg-warning" style="width:100%;">
    <div class="card-body">
        <h5 class="card-title">Add Department</h5><hr>
        <form class="row g-3">
            <div class="col-md-8">
                <label for="inputEmail4" class="form-label">Add Attendance Record</label>
                <input type="date" class="form-control" id="inputEmail4">
            </div>
            <hr>
            <div class="col-12 d-grid gap-2">
                <button type="submit" class="btn btn-dark text-warning">Save</button>
            </div>  
        </form>
    </div>
</div>

@endsection