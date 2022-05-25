<!--

    Work in Progress | Template by Nicolas Honrade

-->


<!-- Main Content -->
<div class="d-flex flex-column flex-grow-1 gap-3 main-content">
    <!-- Page Header -->
    <div class="block" id="page-header">
        <div class="px-4 pt-4">
            <h3 class="mb-3 fw-bold">
                <div class="d-flex align-items-center">
                    <span class="material-icons material-icons-round">local_library</span>
                    <span class="ms-3">Curriculum</span>
                </div>
            </h3>
            <h6 class="mb-3">Current Academic year: <span class="fw-bold">2023-2024</span></h6>
        </div>
        <nav class="block2 bread_block">
            <ol class="breadcrumb px-4 py-2 m-0">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="#">A.Y. 2023-2024</a></li>
                <li class="breadcrumb-item"><a class="text-decoration-none" href="#">Curriculum</a></li>
                <li class="breadcrumb-item active" aria-current="page">Academic Year</li>
            </ol>
        </nav>
    </div>
    <div class="block">
        <ul class="d-flex flex-row list-unstyled align-items-center gap-3 m-2 subnav">
            <li class="nav-item subnav_active">
                <a class="nav-link text-reset" href="?page=Curriculum&sub=AcademicYear">
                    Academic Year
                </a>
            </li>
            <li class="subnav_select">
                <a class="nav-link text-reset" href="?page=Curriculum&sub=Subject">
                    Subject
                </a>
            </li>
            <li class="subnav_select">
                <a class="nav-link text-reset" href="department.html">
                    Department
                </a>
            </li>
            <li class="subnav_select">
                <a class="nav-link text-reset" href="program.html">
                    Program
                </a>
            </li>
        </ul>
    </div>
    <!-- Page Content -->
    <div class="block h-100 p-4">
        <button type="button" class="btn btn-primary" style="margin-bottom: 1%;" data-bs-toggle="modal" data-bs-target="#myModal">
            Add Academic Year
        </button>

        
        <table id="viewAcadYear" class="display table">
            <thead>
                <tr>
                    <th class="thborderleft">Name</th>
                    <th>Year</th>
                    <th>Semester</th>
                    <th class="thborderright">Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><button type="button" class="btn bi bi-lock-fill" style="background-color: #FF9800;color: white;"></button> 2021-2022 2nd Semester</td>
                    <td>2021-2022</td>
                    <td>2nd Semester</td>
                    <td>
                        <label class="toggle">
                            <input type="checkbox">
                            <span class="labels" data-on="Active" data-off="Set as Active"></span>
                        </label>
                        <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                        <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;"  data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
                    </td>
                </tr>
                <tr>
                    <td><button type="button" class="btn bi bi-unlock-fill" style="background-color: #FF9800;color: white;"></button> 2022-2023 1st Semester</td>
                    <td>2022-2023</td>
                    <td>1st Semester</td>
                    <td>
                        <label class="toggle">
                            <input type="checkbox">
                            <span class="labels" data-on="Active" data-off="Set as Active"></span>
                        </label>
                        <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                        <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
                    </td>
                </tr>
                <tr>
                    <td><button type="button" class="btn bi bi-unlock-fill" style="background-color: #FF9800;color: white;"></button> 2023-2024 1st Semester</td>
                    <td>2023-2024</td>
                    <td>1st Semester</td>
                    <td>
                        <label class="toggle">
                            <input type="checkbox">
                            <span class="labels" data-on="Active" data-off="Set as Active"></span>
                        </label>
                        <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                        <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
                    </td>
                </tr>
                <tr>
                    <td><button type="button" class="btn bi bi bi-lock-fill" style="background-color: #FF9800;color: white;"></button> 2024-2025 2nd Semester</td>
                    <td>2024-2025</td>
                    <td>2nd Semester</td>
                    <td>
                        <label class="toggle">
                            <input type="checkbox">
                            <span class="labels" data-on="Active" data-off="Set as Active"></span>
                        </label>
                        <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                        <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!--ADD Modal -->
<div class="modal fade" id="myModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Academic Year</h5>
                <a data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer;">
                    <span class="material-icons">close</span>
                </a>
                
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label>Year </label>
                    <input name="year" class="form-control block"/>
                </div>
                <div class="mb-3">
                    <label>Semester </label>
                    <input name="semester" class="form-control block"/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</div>

<!--EDIT Modal -->
<div class="modal fade" id="editModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Academic Year</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label>Year </label>
                <input name="year" class="form-control block"/>
                <label>Semester </label>
                <input name="semester" class="form-control block"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!--DELETE Modal -->
<div class="modal fade" id="deleteModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete Academic Year</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you want to delete this academic year?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Delete</button>
        </div>
      </div>
    </div>
  </div>