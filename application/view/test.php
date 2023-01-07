<?php

use WiseChain\core\Model;
use const WiseChain\IMG;
/** @var Model $Student */




?>












<p>Current count: <span id="count">??</span></p>
<div class="col-6">
<button id="getcount">Get current count</button>
</div>
<button id="increment">Increment count</button>

<div id="log"></div>



<div id="loader" class="spinner-border text-primary mx-auto my-5" role="status" style="display: none">
    <span class="visually-hidden">Loading...</span>
</div>
<div id="content">
    <div class="row">
    <div class="col-6" style="display: none">
        <a class="btn btn-primary" href="https://metamask.io/download" role="button" target="_blank">
            <i class="bi bi-link px-1"></i>
            Install Metamask
        </a>
    </div>
    <div class="col-6">
        <button type="button" class="btn btn-primary enableEthereumButton" id="myButton">Connect</button>
    </div>
    <div class="col-6">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control" placeholder="Search by Course number..." aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
    </div>
    <table class="table table-striped table-hover table-sm table-bordered align-middle table-responsive text-center shadow-sm p-3 mb-3 bg-body-tertiary rounded">
        <thead class="table-light">
            <tr>
                <th scope="col"><i class="bi bi-person px-1"></i>Student</th>
                <th scope="col"><i class="bi bi-journal-medical px-1"></i>Grade</th>
                <th scope="col"><i class="bi bi-list-ol px-1"></i>Course</th>
                <th scope="col"><i class="bi bi-list-ol px-1"></i>Section</th>
                <th scope="col" class="d-none d-lg-table-cell"><i class="bi bi-person px-1"></i>Instructor</th>
                <th scope="col"><i class="bi bi-sliders px-1"></i>Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider" id="getData">
        <?php foreach ($Student as $value => $Std){ ?>
            <tr>
                <td><img src="<?php echo IMG; ?>students/Student.png" class="rounded-circle me-2" alt="Dr-Waleed" width="23" height="23"><?php echo $Std->student_id; ?></td>
                <td><?php echo $Std->final_garde; ?></td>
                <td><?php echo $Std->course_number; ?></td>
                <td><?php echo $Std->section_number; ?></td>
                <td class="d-none d-lg-table-cell">
                    <img src="<?php echo IMG; ?>doctors/Dr-Waleed.png" class="rounded-circle me-2" alt="Dr-Waleed" width="23" height="23">
                    <?php echo $Std->instructor_num; ?>
                </td>
                <td>
                    <a class="btn btn-danger btn-sm" href="#" role="button"><i class="bi bi-box"></i></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination pagination-sm justify-content-center">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>