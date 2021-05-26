 required@php $active = 'employees' @endphp
@extends('layouts.main')
@section('title','Create Employee')
@section('content')

<!-- <h1 class="text-warning">Teacher</h1><br> -->
<div class="card bg-warning" style="width:100%;">
    <div class="card-body">
        <h5 class="card-title">Create Employee</h5><hr>
        <form method="post" action="/create_form/employee" class="row g-3">
          @csrf
            <div class="col-md-6">
                <label for="photo" class="form-label">Email</label>
                <input type="file" class="form-control" id="photo" name="photo" required>
            </div>
            <div class="col-md-6">
                <!-- <label for="inputPassword4" class="form-label">First Name</label>
                <input type="text" class="form-control" id="inputPassword4"> -->
            </div>
            <div class="col-md-4">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="col-4">
                <label for="middle_name" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="" required>
            </div>
            <div class="col-4">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="" required>
            </div>
            <div class="col-md-4">
                <div class="col-md-12">
                    <label for="contacts" class="form-label">Contact</label>
                    <input type="text" class="form-control" id="contacts" name="contacts" placeholder="" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="birthday" class="form-label">Birthday</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" placeholder="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="gender" class="form-label">Gender</label>
                        <input type="text" class="form-control" id="gender" name="gender" placeholder="" required>
                    </div>
                </div>
            </div>

            <div class="col-8">
                <label for="inputAddress2" class="form-label">Address</label>
                <textarea name="" id="" cols="30" rows="4" class="form-control"></textarea>
            </div>


            <div class="col-4">
                <label for="department_id" class="form-label">Department</label>
                <select id="department_id" class="form-select" name="department_id" required>
                    <option selected>Choose...</option>
                    <option>...</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
            </div>

            <div class="col-4">
                <label for="designation">Designation</label>
                <input type="text" class="form-control" required>
            </div>

            <div class="col-4">
                <label for="brpd">Basic Rate Per Day</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-6">
                <label for="pct" class="form-label">Philhealth Contribution Table</label>
                <select id="inputState" class="form-select" required>
                    <option selected>Choose...</option>
                    <option>...</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="sssct" class="form-label">SSS Contribution Table</label>
                <select id="inputState" class="form-select" required>
                    <option selected>Choose...</option>
                    <option>...</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="pct" class="form-label">Pag-ibig Contribution Table</label>
                <select id="inputState" class="form-select" required>
                    <option selected>Choose...</option>
                    <option>...</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="itt" class="form-label">Income Tax Table</label>
                <select id="inputState" class="form-select" required>
                    <option selected>Choose...</option>
                    <option>...</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

@endsection
