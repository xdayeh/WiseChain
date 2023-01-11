<?php

use WiseChain\core\Model;
use const WiseChain\IMG;
/** @var Model $Student */

?>
<div id="log"></div>
<!--
    <p>Current count: <span id="count">??</span></p>
    <div class="col-6">
    <button id="getcount">Get current count</button>
    </div>
    <button id="increment">Increment count</button>
!-->


<div id="loader" class="spinner-border text-primary mx-auto my-5" role="status" style="display: none">
    <span class="visually-hidden">Loading...</span>
</div>
<div id="content">
    <div class="row">
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
            </tr>
        </thead>
        <tbody class="table-group-divider" id="getData">




        <?php foreach ($Student as $value => $Std){ ?>
            <tr>
                <td><?php echo $Std->Student_ID; ?></td>
                <td><?php echo $Std->Grade; ?></td>
                <td><?php echo 98764512; ?></td>
                <td><?php echo 3; ?></td>
                <td class="d-none d-lg-table-cell">
                    <img src="<?php echo IMG; ?>doctors/Dr-Waleed.png" class="rounded-circle me-2" alt="Dr-Waleed" width="23" height="23">
                    <?php echo 'Dr. Walid Abdulrahim'; ?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div class="text-center">
        <a  class="btn btn-danger btn-sm justify-content-center mb-2" href="#" role="button" onclick="Jordan(<?php echo $Std->Student_ID ?>,<?php echo $Std->Grade ?>,<?php echo 98764512; ?>,<?php echo 3; ?>,<?php echo 1; ?>)"><i class="bi bi-box px-1"></i>Blockchain</a>
    </div>
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