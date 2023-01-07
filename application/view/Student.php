<?php

use WiseChain\core\Application;
use const WiseChain\IMG;
$GroupId = Application::$app->user->getDisplay('GroupId');
?>
<h5><i class="bi bi-person px-1"></i>Student</h5>
<div class="col-12">
    <table class="table table-striped table-bordered text-center align-middle">
        <thead class="table-light">
            <tr>
                <th scope="col"><i class="bi bi-list-ol px-1"></i>Course number</th>
                <th scope="col"><i class="bi bi-activity px-1"></i>Course name</th>
                <th scope="col"><i class="bi bi-calendar-day px-1"></i>Section number</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>98764512</td>
                <td>Graduation Project</td>
                <td>3</td>
            </tr>
        </tbody>
        <thead class="table-light">
        <tr>
            <th scope="col"><i class="bi bi-book px-1"></i>Instructor</th>
            <th scope="col"><i class="bi bi-list-ol px-1"></i>Semester</th>
            <th scope="col"><i class="bi bi-calendar-day px-1"></i>Degree</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Walid Abdulrahim</td>
            <td>Semester 1 2022/2023</td>
            <td>Bachelors</td>
        </tr>
        </tbody>
    </table>
</div>
<div class="col-12">
    <div class="col-4 pb-2">
        <input class="form-control" placeholder="Type to search...">
    </div>
    <table class="table table-striped table-hover table-bordered text-center table-sm align-middle">
        <thead class="table-light">
        <tr>
            <th scope="col"><i class="bi bi-book px-1"></i>Num.</th>
            <th scope="col"><i class="bi bi-list-ol px-1"></i>Student ID</th>
            <th scope="col"><i class="bi bi-calendar-day px-1"></i>Student name</th>
            <th scope="col"><i class="bi bi-calendar-day px-1"></i>Grade</th>
            <th scope="col"><i class="bi bi-calendar-day px-1"></i>Notes</th>
        </tr>
        </thead>
        <tbody>
        <?php
            if ($GroupId==3){
                ?>
                <tr>
                    <th scope="row">1</th>
                    <td>3190606073</td>
                    <td><img src="<?php echo IMG; ?>students/Student.png" class="rounded-circle me-2" alt="..." width="23" height="23"> Rashed Safadi</td>
                    <td>
                        <label>
                            <input name="grade" value="90">
                        </label>
                    </td>
                    <td></td>
                </tr>
                <?php
            }elseif ($GroupId==1){
                ?>
                <tr>
                    <th scope="row">1</th>
                    <td>3190606073</td>
                    <td><img src="<?php echo IMG; ?>students/Student.png" class="rounded-circle me-2" alt="..." width="23" height="23"> Rashed Safadi</td>
                    <td>95</td>
                    <td></td>
                </tr>
            <?php
            }
        ?>

        </tbody>
    </table>
    <div class="text-center">
        <?php
        if ($GroupId == 1){
            echo '<button type="button" class="btn btn-primary" disabled>Add Block</button>';
        }elseif ($GroupId == 2){
            echo '<button type="button" class="btn btn-primary" disabled>Confirm</button>';
        }elseif ($GroupId == 3){
            echo '<button type="button" class="btn btn-primary" disabled>Save</button>';
        }
        ?>
    </div>
</div>

