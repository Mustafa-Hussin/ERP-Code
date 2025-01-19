<ul class="sidebar-nav" id="sidebar-nav">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <!-- CRM -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#crm-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-people"></i><span>CRM</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="crm-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('customers.index') }}">
                    <i class="bi bi-circle"></i><span>Customers</span>
                </a>
            </li>
            <li>
                <a href="{{ route('leads.index') }}">
                    <i class="bi bi-circle"></i><span>Leads</span>
                </a>
            </li>
            <li>
                <a href="{{ route('marketings.index') }}">
                    <i class="bi bi-circle"></i><span>Marketing</span>
                </a>
            </li>
            <li>
                <a href="{{ route('after-sales.index') }}">
                    <i class="bi bi-circle"></i><span>After Sales</span>
                </a>
            </li>
        </ul>
    </li><!-- End CRM Nav -->

    <!-- Sales -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#sales-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-cart"></i><span>Sales</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="sales-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('orders.index') }}">
                    <i class="bi bi-circle"></i><span>Orders</span>
                </a>
            </li>
            <li>
                <a href="{{ route('invoices.index') }}">
                    <i class="bi bi-circle"></i><span>Invoices</span>
                </a>
            </li>
        </ul>
    </li><!-- End Sales Nav -->

    <!-- Inventory -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#inventory-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-box"></i><span>Inventory</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="inventory-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('products.index') }}">
                    <i class="bi bi-circle"></i><span>Products</span>
                </a>
            </li>
            <li>
                <a href="{{ route('warehouses.index') }}">
                    <i class="bi bi-circle"></i><span>Warehouses</span>
                </a>
            </li>
        </ul>
    </li><!-- End Inventory Nav -->

    <!-- HRM -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#hrm-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person-lines-fill"></i><span>HRM</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="hrm-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('employees.index') }}">
                    <i class="bi bi-circle"></i><span>Employees</span>
                </a>
            </li>
            <li>
                <a href="{{ route('trainings.index') }}">
                    <i class="bi bi-circle"></i><span>Trainings</span>
                </a>
            </li>
            <li>
                <a href="{{ route('attendances.index') }}">
                    <i class="bi bi-circle"></i><span>Attendances</span>
                </a>
            </li>
        </ul>
    </li><!-- End HRM Nav -->

    <!-- Accounting -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#accounting-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-calculator"></i><span>Accounting</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="accounting-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('accounts.index') }}">
                    <i class="bi bi-circle"></i><span>Accounts</span>
                </a>
            </li>
            <li>
                <a href="{{ route('transactions.index') }}">
                    <i class="bi bi-circle"></i><span>Transactions</span>
                </a>
            </li>
            <li>
                <a href="{{ route('taxes.index') }}">
                    <i class="bi bi-circle"></i><span>Taxes</span>
                </a>
            </li>
        </ul>
    </li><!-- End Accounting Nav -->

    <!-- Reports -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#reports-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-bar-chart"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="reports-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('sales.report') }}">
                    <i class="bi bi-circle"></i><span>Sales Report</span>
                </a>
            </li>
            <li>
                <a href="{{ route('inventory.report') }}">
                    <i class="bi bi-circle"></i><span>Inventory Report</span>
                </a>
            </li>
        </ul>
    </li><!-- End Reports Nav -->

</ul>