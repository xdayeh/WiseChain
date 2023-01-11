<?php

use WiseChain\core\Application;

$GroupId = Application::$app->user->getDisplay('GroupId');
if ($GroupId == 2){
    ?>

    <div class="col-8 py-2">
        <h5><i class="bi bi-speedometer2 px-1"></i>Classes For Dr. Walid Abdulrahim</h5>
    </div>
    <div class="col-4">
        <input class="form-control" placeholder="Type to search...">
    </div>
    <div class="col">
        <table class="table table-striped table-hover table-bordered text-center table-sm align-middle">
            <thead class="table-light">
            <tr>
                <th scope="col"><i class="bi bi-book px-1"></i>Class Name</th>
                <th scope="col"><i class="bi bi-list-ol px-1"></i>Section number</th>
                <th scope="col"><i class="bi bi-calendar-day px-1"></i>Days</th>
                <th scope="col"><i class="bi bi-clock px-1"></i>Time</th>
                <th scope="col"><i class="bi bi-building px-1"></i>Class</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"><a href="/student">Graduation Project</a></th>
                <td>3</td>
                <td>Sun Tues Thurs</td>
                <td>09:00 - 10:00</td>
                <td>103 ( IT )</td>
            </tr>
            </tbody>
        </table>
    </div>

<?php
}
?>