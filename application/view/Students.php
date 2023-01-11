<?php use WiseChain\Core\Application;
use const WiseChain\IMG; ?>
<div class="col-8">
    <h2>Student</h2>
</div>
<div class="col-4">
    <input class="form-control" placeholder="Type to search...">
</div>



<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered text-center">
        <thead class="table-light">
        <tr>
            <th scope="col">Student</th>
            <th scope="col">ID</th>
            <th scope="col">Specialization</th>
            <th scope="col">Total hours</th>
            <th scope="col">Average</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">
                <img src="<?php echo IMG.'Doctors/'; ?>Student.png" class="rounded-circle me-2" alt="Student" width="23" height="23">
                Mohammad AbuDayeh
            </th>
            <td>1232123</td>
            <td>Software Engineering</td>
            <td>132</td>
            <td>80</td>
        </tr>
        <tr>
            <th scope="row">
                <img src="<?php echo IMG.'Doctors/'; ?>Student.png" class="rounded-circle me-2" alt="Student" width="23" height="23">
                Rashid Safadi
            </th>
            <td>1232123</td>
            <td>Network security</td>
            <td>132</td>
            <td>80</td>
        </tr>
        <tr>
            <th scope="row">
                <img src="<?php echo IMG.'Doctors/'; ?>Student.png" class="rounded-circle me-2" alt="Student" width="23" height="23">
                Alaa Shibli
            </th>
            <td>1232123</td>
            <td>Computer science</td>
            <td>132</td>
            <td>80</td>
        </tr>
        <tr>
            <th scope="row">
                <img src="<?php echo IMG.'Doctors/'; ?>Student.png" class="rounded-circle me-2" alt="Student" width="23" height="23">
                Suhaib Al-Ktut
            </th>
            <td>1232123</td>
            <td>Network security</td>
            <td>132</td>
            <td>80</td>
        </tr>
        </tbody>
    </table>
</div>