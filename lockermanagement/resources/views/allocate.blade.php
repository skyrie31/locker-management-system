<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Locker Mangement System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!--JS Libray-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap v5 Stylesheet -->
    <link href="{{ asset ('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href= "{{ asset ('assets/css/allocate.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-success"><i class="fa fa-user me-2"></i>ZakkSpace</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">ZakkSpace</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{route ('dashboard') }}" class="nav-item nav-link active"><i class="fas fa-users-cog me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-box me-2"></i>Manage Lockers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ route('allocate.index') }}" class="dropdown-item">Allocate Locker</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-success sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-success mb-0"><i class="fa fa-user"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fas fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">ZakkSpace</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


        <!-- Add the form here   -->
       <!-- Assign Locker Button -->
       <div class="container mt-4">
    <!-- Assign Locker Button -->
    <div class="d-flex justify-content-start mb-4">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#assignLockerModal">
            <i class="bi bi-plus"></i> 
        </button>
    </div>
</div>

<!-- Locker Table -->
<div class="table-responsive">
    <table class="table table-bordered table-sm">
        <thead class="bg-success text-white"> <!-- Background color and text color -->
            <tr>
                <th>LOCKER NO</th>
                <th>STUDENT ID</th>
                <th>LAST NAME</th>
                <th>FIRST NAME</th>
                <th>PROGRAM</th>
                <th>YEAR & SET</th>
                <th>DATE RENTED</th>
                <th>DATE ENDED</th>
                <th>EMAIL</th>
                <th>PAYMENT</th>
                <th>ACTIONS</th>
            </tr>
        </thead>
        <tbody id="lockerTableBody">
            @foreach($allocations as $allocation)
                <tr data-id="{{ $allocation->id }}">
                    <td>{{ $allocation->locker_number }}</td>
                    <td>{{ $allocation->student_id }}</td>
                    <td>{{ $allocation->last_name }}</td>
                    <td>{{ $allocation->first_name }}</td>
                    <td>{{ $allocation->program }}</td>
                    <td>{{ $allocation->year_set }}</td>
                    <td>{{ $allocation->date_rented }}</td>
                    <td>{{ $allocation->date_ended }}</td>
                    <td>{{ $allocation->email }}</td>
                    <td>{{ $allocation->payment }}</td>
                    <td>
                        <button class="btn btn-info btn-sm view-btn" data-bs-toggle="modal" data-bs-target="#viewLockerModal">
                            <i class="bi bi-eye"></i>
                        </button>
                        <button class="btn btn-warning btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#assignLockerModal" data-allocation="{{ json_encode($allocation) }}">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <form action="{{ route('allocate.destroy', $allocation->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal for Assign Locker -->
<div class="modal fade" id="assignLockerModal" tabindex="-1" aria-labelledby="assignLockerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-m">
        <div class="modal-content">
            <div class="modal-header bg-success custom-header">
                <h5 class="modal-title" id="assignLockerModalLabel">ASSIGN LOCKER FORM</h5>
                <button type="button" class="btn-close custom-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

                             <style>
                             .custom-header .modal-title {
                                color: white !important; 
                            }
            
                            .custom-close {
                                filter: invert(1);
                            }
                        </style>

            <div class="modal-body">
                <!-- Form for Assign Locker -->
                <form id="assignLockerForm">
                    @csrf
                    <input type="hidden" id="allocationId" name="id">
                    <div class="mb-3">
                        <label for="lockerNumber" class="form-label">Locker Number</label>
                        <input type="text" class="form-control" id="lockerNumber" name="locker_number" placeholder="Enter locker number" required>
                    </div>
                    <div class="mb-3">
                        <label for="studentId" class="form-label">Student ID</label>
                        <input type="text" class="form-control" id="studentId" name="student_id" placeholder="Enter student ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Enter last name" required>
                    </div>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="first_name" placeholder="Enter first name" required>
                    </div>
                    <div class="mb-3">
                        <label for="program" class="form-label">Program</label>
                        <input type="text" class="form-control" id="program" name="program" placeholder="Enter program" required>
                    </div>
                    <div class="mb-3">
                        <label for="yearSet" class="form-label">Year & Set</label>
                        <input type="text" class="form-control" id="yearSet" name="year_set" placeholder="Enter year & set" required>
                    </div>
                    <div class="mb-3">
                        <label for="dateRented" class="form-label">Date Rented</label>
                        <input type="date" class="form-control" id="dateRented" name="date_rented" required>
                    </div>
                    <div class="mb-3">
                        <label for="dateEnded" class="form-label">Date Ended</label>
                        <input type="date" class="form-control" id="dateEnded" name="date_ended" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
                    </div>
                    <div class="mb-3">
                        <label for="payment" class="form-label">Payment</label>
                        <input type="number" class="form-control" id="payment" name="payment" placeholder="Enter payment amount" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Edit button click event
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', function() {
            const allocation = JSON.parse(this.getAttribute('data-allocation'));
            document.getElementById('allocationId').value = allocation.id;
            document.getElementById('lockerNumber').value = allocation.locker_number;
            document.getElementById('studentId').value = allocation.student_id;
            document.getElementById('lastName').value = allocation.last_name;
            document.getElementById('firstName').value = allocation.first_name;
            document.getElementById('program').value = allocation.program;
            document.getElementById('yearSet').value = allocation.year_set;
            document.getElementById('dateRented').value = allocation.date_rented;
            document.getElementById('dateEnded').value = allocation.date_ended;
            document.getElementById('email').value = allocation.email;
            document.getElementById('payment').value = allocation.payment;
        });
    });

    // Submit form to either create or edit
    document.getElementById('assignLockerForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting normally

        const formData = new FormData(this); // Form data collection

        // Determine the method (POST for create, PUT for update)
        const method = formData.get('id') ? 'PUT' : 'POST';
        const url = formData.get('id') ? `{{ route('allocate.update', '') }}/${formData.get('id')}` : '{{ route('allocate.store') }}';

        // Fetch request to send data to the backend
        fetch(url, {
            method: method,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content // Add CSRF Token
            },
            body: formData
        })
        .then(response => response.json()) // Assuming JSON response from backend
        .then(data => {
            if (data.id) {
                // If allocation exists, update the row in the table
                const row = document.querySelector(`#lockerTableBody tr[data-id="${data.id}"]`);
                row.querySelector('td:nth-child(1)').textContent = data.locker_number;
                row.querySelector('td:nth-child(2)').textContent = data.student_id;
                row.querySelector('td:nth-child(3)').textContent = data.last_name;
                row.querySelector('td:nth-child(4)').textContent = data.first_name;
                row.querySelector('td:nth-child(5)').textContent = data.program;
                row.querySelector('td:nth-child(6)').textContent = data.year_set;
                row.querySelector('td:nth-child(7)').textContent = data.date_rented;
                row.querySelector('td:nth-child(8)').textContent = data.date_ended;
                row.querySelector('td:nth-child(9)').textContent = data.email;
                row.querySelector('td:nth-child(10)').textContent = data.payment;
            } else {
                // If allocation is new, add a new row to the table
                const newRow = document.createElement('tr');
                newRow.setAttribute('data-id', data.id);
                newRow.innerHTML = `
                    <td>${data.locker_number}</td>
                    <td>${data.student_id}</td>
                    <td>${data.last_name}</td>
                    <td>${data.first_name}</td>
                    <td>${data.program}</td>
                    <td>${data.year_set}</td>
                    <td>${data.date_rented}</td>
                    <td>${data.date_ended}</td>
                    <td>${data.email}</td>
                    <td>${data.payment}</td>
                    <td>
                        <button class="btn btn-info btn-sm view-btn" data-bs-toggle="modal" data-bs-target="#viewLockerModal">
                            <i class="bi bi-eye"></i>
                        </button>
                        <button class="btn btn-warning btn-sm edit-btn" data-bs-toggle="modal" data-bs-target="#assignLockerModal" data-allocation="${JSON.stringify(data)}">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <form action="{{ route('allocate.destroy', '') }}/${data.id}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                `;
                document.getElementById('lockerTableBody').appendChild(newRow);
            }

            // Close the modal and reset the form
            const modal = bootstrap.Modal.getInstance(document.getElementById('assignLockerModal'));
            modal.hide();
            document.getElementById('assignLockerForm').reset(); // Reset form after submission
        })
        .catch(error => {
            console.error('Error:', error);
            alert('There was an error processing your request.');
        });
    });
</script>




        <!-- form End -->



        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript  -->
   
    <script src="{{ asset('assets/js/admindashboard.js') }}"></script>


</body>

</html>