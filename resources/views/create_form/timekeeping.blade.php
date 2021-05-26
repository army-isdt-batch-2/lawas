@php $active = 'timekeeping' @endphp
@extends('layouts.main')
@section('title','Add Attendance Record')
@section('content')

<!-- <h1 class="text-warning">Teacher</h1><br> -->
<div class="card bg-warning" style="width:100%;">
    <div class="card-body">
        <h5 class="card-title">Add Department</h5><hr>
        <form method="post" action="/view/timekeeping'" class="row g-3">
          @csrf
            <div class="col-md-8">
                <label for="date" class="form-label">Add Attendance Record</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <hr>
            <div class="col-12 d-grid gap-2">
                <button type="submit" class="btn btn-dark text-warning">Save</button>
            </div>
        </form>
    </div>
</div>

@endsection
