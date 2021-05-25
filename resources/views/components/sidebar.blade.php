<div style="height:100vh;" class="d-flex flex-column flex-shrink-0 p-3 bg-dark">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4 text-white">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="#" class="nav-link text-white">
                <i class='fa fa-home'> </i> Dashboard
            </a> 
        </li>
        <li>
            <a href="/departments" class="nav-link @if($active == 'departments') active @endif text-white">
                <i class="fa fa-flag"></i>
                Department
            </a>
        </li>
        <li>
            <a href="/employees" class="nav-link @if($active == 'employees') active @endif text-white">
                <i class="fa fa-child"></i>
                Employees
            </a>
        </li>
        <li>
            <a href="/loans" class="nav-link @if($active == 'loans') active @endif text-white">
                <i class="fa fa-bank"></i>
                Loans
            </a>
        </li>
        <li>
            <a href="/leaves" class="nav-link @if($active == 'leaves') active @endif text-white">
                <i class="fa fa-calendar"></i>
                Leaves
            </a>
        </li>
        <li>
            <a href="/deductions" class="nav-link @if($active == 'deductions') active @endif text-white">
                <i class="fa fa-list-alt"></i>
                Mandatory Deductions
            </a>
        </li>
        <li>
            <a href="/timekeeping" class="nav-link @if($active == 'timekeeping') active @endif text-white">
                <i class="fa fa-clock-o"></i>
                Timekeeping
            </a>
        </li>
        <li>
            <a href="/payslip" class="nav-link @if($active == 'payslip') active @endif text-white">
                <i class="fa fa-money"></i>
                Payslip
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>