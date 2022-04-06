<!DOCTYPE html>

<head>
    <!-- Local CSS File -->
    <link rel="stylesheet" href="asset/css/staffstyle.css">
    <link rel="stylesheet" href="asset/css/navbar.css">

    <?php include('asset/includes/cssCDN.php'); ?>

    <title>Bed</title>
    <link rel="icon" href="asset/image/logo pic.png" type="image/x-icon">
</head>

<body>

    <!-- Side Bar -->
    <?php $page = 'staffbed';
    include('asset/includes/staffSideBar.php'); ?>

    <section class="home-section">
        <!-- Top Bar-->
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Bed</span>
            </div>
            <div class="right-nav">
                <div class="right noti-bell my-auto">
                    <i class='bx bxs-bell-ring'></i>
                </div>

                <div class="profile dropdown">
                    <div>
                        <img src="asset/image/profile1.jpg">
                        <span class="profile_name">Tan Szu Jean</span>
                    </div>
                </div>
            </div>
            </div>
        </nav>

        <div class="home-content">
            <div class="col-xl-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <div class="row mb-2">
                            <div class="col-lg-5">
                                <h4 class="card-title">Bed</h4>
                            </div>
                            <div class="col-lg-7">
                                <div class="d-flex flex-row-reverse">
                                    <div class="mx-1">
                                        <button type="button" class="btn btn-warning float-right" data-bs-toggle="modal" data-bs-target="#printStock">
                                            Print
                                        </button>
                                    </div>
                                    <div class="mx-1">
                                        <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addData">
                                            Add Bed
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="table-responsive table-wardStatus">
                                <table class="table table-condensed shadow-hover">
                                    <thead>
                                        <th> Ward ID</th>
                                        <th> Location </th>
                                        <th> Department </th>
                                        <th> Bed ID </th>
                                        <th> Bed Status </th>
                                        <th>User ID</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>W-001</td>
                                            <td>Floor 2</td>
                                            <td>Cardiologist</td>
                                            <td>W001-B01</td>
                                            <td><button type="button" class="btn btn-secondary">Empty</button></td>
                                            <td>None</td>
                                            <td class="action-button">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editBed">
                                                    <i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>W-001</td>
                                            <td>Floor 2</td>
                                            <td>Cardiologist</td>
                                            <td>W001-B01</td>
                                            <td><button type="button" class="btn btn-secondary">Empty</button></td>
                                            <td>None</td>
                                            <td class="action-button">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editBed">
                                                    <i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>W-001</td>
                                            <td>Floor 2</td>
                                            <td>Cardiologist</td>
                                            <td>W001-B03</td>
                                            <td><button type="button" class="btn btn-success">Occupied</button></td>
                                            <td>53275531</td>
                                            <td class="action-button">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editBed">
                                                    <i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>W-001</td>
                                            <td>Floor 2</td>
                                            <td>Cardiologist</td>
                                            <td>W001-B03</td>
                                            <td><button type="button" class="btn btn-success">Occupied</button></td>
                                            <td>53275531</td>
                                            <td class="action-button">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editBed">
                                                    <i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>W-001</td>
                                            <td>Floor 2</td>
                                            <td>Cardiologist</td>
                                            <td>W001-B05</td>
                                            <td><button type="button" class="btn btn-warning">Cleaning</button></td>
                                            <td>None</td>
                                            <td class="action-button">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editBed">
                                                    <i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>W-001</td>
                                            <td>Floor 2</td>
                                            <td>Cardiologist</td>
                                            <td>W001-B05</td>
                                            <td><button type="button" class="btn btn-warning">Cleaning</button></td>
                                            <td>None</td>
                                            <td class="action-button">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editBed">
                                                    <i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex flex-row-reverse">
                                    <div class="mx-1">
                                        <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addBed">
                                            Add Bed
                                        </button>
                                    </div>
                                </div>
                                <div class="d-flex flex-row my-auto">
                                    <button type="button" class="btn"><i class="fas fa-arrow-circle-left fa-lg"></i></button>
                                    <h5 class="my-auto">1</h5>
                                    <button type="button" class="btn"><i class="fas fa-arrow-circle-right fa-lg"></i></button></td>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="card  mx-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4 class="card-title">Bed Status</h4>
                            </div>
                            <div class="col-lg-3">
                                <div class="d-flex flex-row-reverse">
                                    <div class="mx-1">
                                        <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addWard">
                                            Add Ward
                                        </button>
                                    </div>
                                    <div class="mx-1">
                                        <button type="button" class="btn btn-warning float-right" data-bs-toggle="modal" data-bs-target="#editWard">
                                            Edit Ward
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">
                        <div class="card-action card-tabs mb-3 style-1">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#ward1">
                                        Ward 1
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#ward2">
                                        Ward 2
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body tab-content p-0">
                        <div class="tab-pane active show fade" id="ward1">
                            <div class="table-responsive table-wardStatus">
                                <table class="table table-condensed shadow-hover">
                                    <thead>
                                        <th> Ward ID</th>
                                        <th> Location </th>
                                        <th> Department </th>
                                        <th> Bed ID </th>
                                        <th> Bed Status </th>
                                        <th>User ID</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>W-001</td>
                                            <td>Floor 2</td>
                                            <td>Cardiologist</td>
                                            <td>W001-B01</td>
                                            <td><button type="button" class="btn btn-secondary">Empty</button></td>
                                            <td>None</td>
                                            <td class="action-button">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editBed">
                                                    <i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>W-001</td>
                                            <td>Floor 2</td>
                                            <td>Cardiologist</td>
                                            <td>W001-B01</td>
                                            <td><button type="button" class="btn btn-secondary">Empty</button></td>
                                            <td>None</td>
                                            <td class="action-button">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editBed">
                                                    <i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>W-001</td>
                                            <td>Floor 2</td>
                                            <td>Cardiologist</td>
                                            <td>W001-B03</td>
                                            <td><button type="button" class="btn btn-success">Occupied</button></td>
                                            <td>53275531</td>
                                            <td class="action-button">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editBed">
                                                    <i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>W-001</td>
                                            <td>Floor 2</td>
                                            <td>Cardiologist</td>
                                            <td>W001-B03</td>
                                            <td><button type="button" class="btn btn-success">Occupied</button></td>
                                            <td>53275531</td>
                                            <td class="action-button">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editBed">
                                                    <i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>W-001</td>
                                            <td>Floor 2</td>
                                            <td>Cardiologist</td>
                                            <td>W001-B05</td>
                                            <td><button type="button" class="btn btn-warning">Cleaning</button></td>
                                            <td>None</td>
                                            <td class="action-button">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editBed">
                                                    <i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>W-001</td>
                                            <td>Floor 2</td>
                                            <td>Cardiologist</td>
                                            <td>W001-B05</td>
                                            <td><button type="button" class="btn btn-warning">Cleaning</button></td>
                                            <td>None</td>
                                            <td class="action-button">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editBed">
                                                    <i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex flex-row-reverse">
                                    <div class="mx-1">
                                        <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addBed">
                                            Add Bed
                                        </button>
                                    </div>
                                </div>
                                <div class="d-flex flex-row my-auto">
                                    <button type="button" class="btn"><i class="fas fa-arrow-circle-left fa-lg"></i></button>
                                    <h5 class="my-auto">1</h5>
                                    <button type="button" class="btn"><i class="fas fa-arrow-circle-right fa-lg"></i></button></td>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ward2">
                            <div class="table-responsive table-wardStatus">
                                <table class="table table-hover table-condensed">
                                    <thead>
                                        <th> Ward ID</th>
                                        <th> Location </th>
                                        <th> Department </th>
                                        <th> Bed ID </th>
                                        <th> Bed Status </th>
                                        <th>User ID</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>W-002</td>
                                            <td>Floor 2</td>
                                            <td>Neurologist</td>
                                            <td>W002-B01</td>
                                            <td><button type="button" class="btn btn-secondary">Empty</button></td>
                                            <td>None</td>
                                            <td class="action-button">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editBed">
                                                    <i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>W-002</td>
                                            <td>Floor 2</td>
                                            <td>Neurologist</td>
                                            <td>W002-B01</td>
                                            <td><button type="button" class="btn btn-secondary">Empty</button></td>
                                            <td>None</td>
                                            <td class="action-button">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editBed">
                                                    <i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>W-002</td>
                                            <td>Floor 2</td>
                                            <td>Neurologist</td>
                                            <td>W002-B03</td>
                                            <td><button type="button" class="btn btn-success">Occupied</button></td>
                                            <td>53275531</td>
                                            <td class="action-button">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editBed">
                                                    <i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>W-002</td>
                                            <td>Floor 2</td>
                                            <td>Neurologist</td>
                                            <td>W002-B03</td>
                                            <td><button type="button" class="btn btn-success">Occupied</button></td>
                                            <td>53275531</td>
                                            <td class="action-button">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editBed">
                                                    <i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>W-002</td>
                                            <td>Floor 2</td>
                                            <td>Neurologist</td>
                                            <td>W002-B05</td>
                                            <td><button type="button" class="btn btn-warning">Cleaning</button></td>
                                            <td>None</td>
                                            <td class="action-button">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editBed">
                                                    <i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>W-002</td>
                                            <td>Floor 2</td>
                                            <td>Neurologist</td>
                                            <td>W002-B05</td>
                                            <td><button type="button" class="btn btn-warning">Cleaning</button></td>
                                            <td>None</td>
                                            <td class="action-button">
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editBed">
                                                    <i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteData">
                                                    <i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex flex-row-reverse">
                                    <div class="mx-1">
                                        <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addBed">
                                            Add Bed
                                        </button>
                                    </div>
                                </div>
                                <div class="d-flex flex-row my-auto">
                                    <button type="button" class="btn"><i class="fas fa-arrow-circle-left fa-lg"></i></button>
                                    <h5 class="my-auto">1</h5>
                                    <button type="button" class="btn"><i class="fas fa-arrow-circle-right fa-lg"></i></button></td>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <div class="modal fade" id="editBed" tabindex="-1" aria-labelledby="editBedLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editBed">Edit Bed Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="inputBedID" class="form-label">Bed ID</label>
                            <input type="text" class="form-control" id="inputBedID">
                        </div>
                        <div class="mb-3">
                            <label for="inputUserID" class="form-label">User ID</label>
                            <input type="text" class="form-control" id="inputUserID">
                        </div>
                        <div class="mb-3">
                            <label for="inputBedStatus" class="form-label">Bed Status</label>
                            <select id="inputBedStatus" class="form-control" name="bed status">
                                <option value="empty">Empty</option>
                                <option value="occupied">Occupied</option>
                                <option value="cleaning">Cleaning</option>
                            </select>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addBed" tabindex="-1" aria-labelledby="addBedLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBed">Add Bed</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="inputBedID" class="form-label">Bed ID</label>
                            <input type="text" class="form-control" id="inputBedID">
                        </div>
                        <div class="mb-3">
                            <label for="inputUserID" class="form-label">User ID</label>
                            <input type="text" class="form-control" id="inputUserID">
                        </div>
                        <div class="mb-3">
                            <label for="inputBedStatus" class="form-label">Bed Status</label>
                            <select id="inputBedStatus" class="form-control" name="bed status">
                                <option value="empty">Empty</option>
                                <option value="occupied">Occupied</option>
                                <option value="cleaning">Cleaning</option>
                            </select>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addWard" tabindex="-1" aria-labelledby="addWardLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addWard">Add Ward</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="inputBedID" class="form-label">Ward ID</label>
                            <input type="text" class="form-control" id="inputBedID">
                        </div>
                        <div class="mb-3">
                            <label for="inputLocation" class="form-label">Location</label>
                            <input type="text" class="form-control" id="inputLocation">
                        </div>
                        <div class="mb-3">
                            <label for="inputDepartment" class="form-label">Department</label>
                            <input type="text" class="form-control" id="inputDepartment">
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editWard" tabindex="-1" aria-labelledby="editWardLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editWard">Edit Ward</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="inputWardID" class="form-label">Ward ID</label>
                            <input type="text" class="form-control" id="inputWardID">
                        </div>
                        <div class="mb-3">
                            <label for="inputLocation" class="form-label">Location</label>
                            <input type="text" class="form-control" id="inputLocation">
                        </div>
                        <div class="mb-3">
                            <label for="inputDepartment" class="form-label">Department</label>
                            <input type="text" class="form-control" id="inputDepartment">
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteData" tabindex="-1" aria-labelledby="deleteDataLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteAdminLabel">Confirmation Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure that you want to delete the selected data?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Yes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <?php include('asset/includes/jsCDN.php'); ?>

    <!-- Local JS -->
    <script src="asset/js/sidenavbar.js"></script>
    <script src="asset/js/triggerToast.js"></script>
    <script src="asset/js/deleteData.js"></script>

</body>

</html>