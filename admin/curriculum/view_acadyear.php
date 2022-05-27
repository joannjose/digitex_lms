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
            <h6 class="mb-3">Current Academic year: <span class="fw-bold" id="currentActive"></span></h6>
        </div>
        <nav class="block bread_block">
            <ol class="breadcrumb px-4 py-2 m-0">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="#" id="currentActiveYear"></a></li>
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
                <a class="nav-link text-reset" href="?page=Curriculum&sub=Department">
                    Department
                </a>
            </li>
            <li class="subnav_select">
                <a class="nav-link text-reset" href="?page=Curriculum&sub=Program">
                    Program
                </a>
            </li>
        </ul>
    </div>
    <!-- Page Content -->
    <div class="block h-100 p-4">
                        
        <button type="button" class="btn btn-primary" style="margin-bottom: 1%;" data-bs-toggle="modal" data-bs-target="#createModal">
            Add Academic Year
        </button>

                            
        <table id="viewAcadYear" class="display table table-bordered" style="width:100%">
            <thead>
                <tr>
                <th>ID</th>
                <th class="thborderleft">Name</th>
                <th>Year</th>
                <th>Semester</th>
                <th>Status</th>
                <th>Archived</th>
                <th class="thborderright">Options</th>
                </tr>
            </thead>
        </table>                  
    </div>
</div>

<!-- Add Modal -->
<div class="modal fade" id="createModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Academic Year</h5>
                <a class="block2" data-bs-dismiss="modal" aria-label="Close"><span class="material-icons m-1">close</span></a>
            </div>
            <form action="../admin/curriculum/functions/CRUD_functions.php" method="POST" autocomplete="off">
            <div class="modal-body">
                <!-- <label>Year </label>
                <input type="text" required name="year" class="form-control block"/> -->
                <div class="yearpickerstart-container mb-3">
                    <div class="main">
                        <label for="">Start Date</label>
                        <input type="text" required name="startYear" class="yearpicker form-control block" placeholder="Select Year" value="">
                    </div>
                </div>
                <div class="yearpickerend-container mb-3">
                    <div class="main ">
                        <label for="">End Date</label>
                        <input type="text" required name="endYear" class="yearpicker form-control block" placeholder="Select Year" value="">
                    </div>
                </div>
                <div class="mb-3">
                    <label for=sem>Semester:</label>
                    <select class="form-control block" id="sem" name="sem">
                        <option value="" disabled selected>Choose option</option>
                        <option value="1st Semester">1st Semester</option>
                        <option value="2nd Semester">2nd Semester</option>
                        <option value="Inter-Semester">Inter-Semester</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
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
        <form action="../admin/curriculum/functions/CRUD_functions.php" method="POST" autocomplete="off">
            <div class="modal-body p-4">
            <input type="hidden" required name="editID" id="editID" readonly class="form-control"/>
                    <div class="yearpickerstart-container mb-3">
                        <div class="main">
                            <label for="">Start Date</label>
                            <input type="text" id="editStartYear" required name="editStartYear" class="yearpicker form-control block" placeholder="Select Year" value="">
                        </div>
                    </div>
                    <div class="yearpickerend-container mb-3">
                        <div class="main ">
                            <label for="">End Date</label>
                            <input type="text" id="editEndYear" required name="editEndYear" class="yearpicker form-control block" placeholder="Select Year" value="">
                        </div>
                    </div>
                    <div class="mb-3">
                    <label for=editSem>Semester:</label>
                        <select class="form-control block" id="editSem" name="editSem">
                            <option value="" disabled selected>Choose option</option>
                            <option value="1st Semester">1st Semester</option>
                            <option value="2nd Semester">2nd Semester</option>
                            <option value="Inter-Semester">Inter-Semester</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
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
            <form action="../admin/curriculum/functions/CRUD_functions.php" method="POST">
            <div class="modal-body p-4">
                <input type="hidden" required name="delID" id="delID" readonly class="form-control"/>
                <p>Are you want to delete this academic year?</p>
                <h6 class="mb-3"><span class="fw-bold" id="deletingYear"></span></h6>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <!--<button type="button" class="btn btn-primary">Delete</button>-->
                <button type="submit" class="btn btn-primary">Delete</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--Active Confirmation Modal -->
<div class="modal fade" id="activeConfirmModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Change Active Academic Year</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../admin/curriculum/functions/CRUD_functions.php" method="POST">
            <div class="modal-body p-4">
                <input type="hidden" required name="activeID" id="activeID" readonly class="form-control"/>
                <p>Are you want to set this academic year as active?</p>
                <h6 class="mb-3"><span class="fw-bold" id="activatingYear"></span></h6>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <!--<button type="button" class="btn btn-primary">Delete</button>-->
                <button type="submit" class="btn btn-primary">Activate</button>
            </div>
            </form>
        </div>
    </div>
</div>