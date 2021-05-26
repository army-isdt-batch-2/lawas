@php $active = 'deduction' @endphp
@extends('layouts.main')
@section('title','Mandatory Deduction')
@section('content')

<!-- <h1 class="text-warning">Teacher</h1><br> -->
<div class="card bg-warning" style="width:100%;">
    <div class="card-body">
        <h5 class="card-title">Deductions</h5><hr>
        <form method="post" action="/create_form/deduction" class="row g-3">
          @csrf
            <div class="col-4">
                <label for="contribution_type" class="form-label">Contribution Type</label>
                <select id="contribution_type" class="form-select" name="contribution_type" required>
                    <option selected>Choose...</option>
                    <option>...</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
            </div>
            <div class="col-8">
                <label for="base_range" class="form-label">Base Range</label>
                <input type="text" class="form-control" id="base_range" name="base_range" required>
            </div>
            <div class="col-4">
                <label for="monthly_contribution" class="form-label">Monthly Contribution</label>
                <input type="text" class="form-control" id="monthly_contribution" name="monthly_contribution" required>
            </div>
            <div class="col-4">
                <label for="employee_share" class="form-label">Employee Share</label>
                <input type="text" class="form-control" id="employee_share" name="employee_share" required>
            </div>
            <div class="col-4">
                <label for="employer_share" class="form-label">Employer Share</label>
                <input type="text" class="form-control" id="employer_share" name="employer_share" required>
            </div>
            <div class="col-12 d-grid gap-2">
                <button class="btn btn-dark text-warning">Apply</button>
            </div>
        </form>
    </div>
</div>

<form action="">

</form>



@endsection
