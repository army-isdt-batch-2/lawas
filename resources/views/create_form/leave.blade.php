 required@php $active = 'departments' @endphp
@extends('layouts.main')
@section('title','Apply Leave')
@section('content')

<!-- <h1 class="text-warning">Teacher</h1><br> -->
<div class="card bg-warning" style="width:100%;">
    <div class="card-body">
        <h5 class="card-title">Add Department</h5><hr>
        <form method="post" action="/create_form/leave" class="row g-3">
          @csrf
            <div class="col-4">
                <label for="employee_id">Employee ID</label>
                <input type="text" class="form-control" name="employee_id" id="employee_id" required>
            </div>
            <div class="col-4">
                <label for="full_name">Full Name</label>
                <input type="text" class="form-control" name="full_name" id="full_name" required>
            </div>
            <div class="col-4">
                <label for="designation">Designation</label>
                <input type="text" class="form-control" name="designation" id="designation" required>
            </div>

            <div class="col-md-4">
                <label for="">Leave Type</label>
                <input type="text" class="form-control" name="leave_type" id="leave_type" required>
                <label for="">Start</label>
                <input type="date" class="form-control" name="start_date" id="start_date" required>
                <label for="">End</label>
                <input type="date" class="form-control" name="end_date" id="end_date" required>
            </div>
            <div class="col-md-8">
                <textarea name="note" id="note" cols="30" rows="7" class="form-control" required></textarea>
            </div>
            <hr>
            <div class="col-12 d-grid gap-2">
                <button class="btn btn-dark text-warning">Apply</button>
            </div>
        </form>
    </div>
</div>

@endsection
