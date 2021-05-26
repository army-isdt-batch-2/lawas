@php $active = 'paylips' @endphp
@extends('layouts.main')
@section('title','Process Payroll')
@section('content')

<!-- <h1 class="text-warning">Teacher</h1><br> -->
<div class="card bg-warning" style="width:100%;">
    <div class="card-body">
        <h5 class="card-title">Prcess Payroll</h5><hr>
        <form method="post" action="/create_form/payslip" class="row g-3">
          @csrf
            <div class="col-md-6">
                <label for="cutoffstart" class="form-label">Cut-off Start</label>
                <input type="date" class="form-control" id="cutoffstart" name="cutoffstart" required>
            </div>
            <div class="col-md-6">
                <label for="cutoffend" class="form-label">Cut-off End</label>
                <input type="date" class="form-control" id="cutoffend" name="cutoffend" required>
            </div>
            <hr>
            <div class="col-12 d-grid gap-2">
                <button type="submit" class="btn btn-dark text-warning">Save</button>
            </div>
        </form>
    </div>
</div>

@endsection
