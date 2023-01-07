<?php use WiseChain\core\Application;
use const WiseChain\IMG;
$GroupId = Application::$app->user->getDisplay('GroupId');
?>
    <div class="col-8 py-2">
        <h5><i class="bi bi-speedometer2 px-1"></i><?php echo Application::$app->language->dictionary['Lang_Dash']; ?></h5>
    </div>
<?php if ($GroupId == 1){
    ?>
    <div class="row">
    <div class="col-lg-3 col-md-6 col-12">
        <div class="card text-white bg-warning mb-4 shadow">
            <div class="card-body">
                <div class="icon float-end">
                    <i class="fs-1 bi bi-book text-white-50"></i>
                </div>
                <h3 class="card-title fw-bold">
                    3
                </h3>
                <p class="card-text fw-bold position-absolute"><?php echo Application::$app->language->dictionary['Lang_Majors']; ?></p>
            </div>
            <a href="/majors" class="text-decoration-none card-footer text-center text-white stretched-link"><?php echo Application::$app->language->dictionary['Lang_More']; ?><i class="bi bi-arrow-right-short px-1"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
        <div class="card text-white bg-success mb-4 shadow">
            <div class="card-body">
                <div class="icon float-end">
                    <i class="fs-1 bi bi-people-fill text-white-50"></i>
                </div>
                <h3 class="card-title fw-bold">
                    7
                </h3>
                <p class="card-text fw-bold position-absolute"><?php echo Application::$app->language->dictionary['Lang_Doctors']; ?></p>
            </div>
            <a href="/doctors" class="text-decoration-none card-footer text-center text-white"><?php echo Application::$app->language->dictionary['Lang_More']; ?><i class="bi bi-arrow-right-short px-1"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
        <div class="card text-white bg-danger mb-4 shadow">
            <div class="card-body">
                <div class="icon float-end">
                    <i class="fs-1 bi bi-people-fill text-white-50"></i>
                </div>
                <h3 class="card-title fw-bold">
                    4
                </h3>
                <p class="card-text fw-bold position-absolute"><?php echo Application::$app->language->dictionary['Lang_Students']; ?></p>
            </div>
            <a href="/students" class="text-decoration-none card-footer text-center text-white"><?php echo Application::$app->language->dictionary['Lang_More']; ?><i class="bi bi-arrow-right-short px-1"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
        <div class="card text-white bg-info mb-4 shadow">
            <div class="card-body">
                <div class="icon float-end">
                    <i class="fs-1 bi bi-box text-white-50"></i>
                </div>
                <h3 class="card-title fw-bold">
                    10
                </h3>
                <p class="card-text fw-bold position-absolute"><?php echo Application::$app->language->dictionary['Lang_Block']; ?></p>
            </div>
            <a href="/block" class="text-decoration-none card-footer text-center text-white"><?php echo Application::$app->language->dictionary['Lang_More']; ?><i class="bi bi-arrow-right-short px-1"></i></a>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <i class="bi bi-node-plus px-1"></i><?php echo Application::$app->language->dictionary['Lang_Last']; ?>
            </div>
            <div class="card-body p-0">
                <table class="table my-0">
                    <thead>
                    <tr>
                        <th scope="col"><i class="bi bi-person px-1"></i><?php echo Application::$app->language->dictionary['Lang_Doctor']; ?></th>
                        <th scope="col"><i class="bi bi-journal-medical px-1"></i><?php echo Application::$app->language->dictionary['Lang_Class']; ?></th>
                        <th scope="col"><i class="bi bi-list-ol px-1"></i><?php echo Application::$app->language->dictionary['Lang_Div']; ?></th>
                        <th scope="col"><i class="bi bi-person px-1"></i><?php echo Application::$app->language->dictionary['Lang_Student']; ?></th>
                        <th scope="col" class="text-center"><i class="bi bi-patch-check px-1"></i><?php echo Application::$app->language->dictionary['Lang_Mark']; ?></th>
                        <th scope="col"><i class="bi bi-calendar-check px-1"></i><?php echo Application::$app->language->dictionary['Lang_Date']; ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">
                            <img src="<?php echo IMG; ?>doctors/Dr-Waleed.png" class="rounded-circle me-2" alt="Dr-Waleed" width="23" height="23">
                            Dr. Waleed Amin
                        </th>
                        <td>Project</td>
                        <td>5</td>
                        <td>
                            <a href="/student">0603449</a>
                        </td>
                        <td class="text-center">88</td>
                        <td>2022/11/11</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <img src="<?php echo IMG; ?>doctors/Dr-Waleed.png" class="rounded-circle me-2" alt="Dr-Waleed" width="23" height="23">
                            Dr. Malek
                        </th>
                        <td>Os</td>
                        <td>7</td>
                        <td>
                            <a href="/student">0603443</a>
                        </td>
                        <td class="text-center">88</td>
                        <td>2022/11/11</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <img src="<?php echo IMG; ?>doctors/Dr-Waleed.png" class="rounded-circle me-2" alt="Dr-Waleed" width="23" height="23">
                            Dr. Ahmed
                        </th>
                        <td>Java</td>
                        <td>8</td>
                        <td>
                            <a href="/student">0603442</a>
                        </td>
                        <td class="text-center">88</td>
                        <td>2022/11/11</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <img src="<?php echo IMG; ?>doctors/Dr-Waleed.png" class="rounded-circle me-2" alt="Dr-Waleed" width="23" height="23">
                            Dr. Ali
                        </th>
                        <td>AI</td>
                        <td>2</td>
                        <td>
                            <a href="/student">0603446</a>
                        </td>
                        <td class="text-center">88</td>
                        <td>2022/11/11</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <?php
}elseif ($GroupId == 2){
    ?>
    <div class="col-4">
        <input class="form-control" placeholder="Type to search...">
    </div>
    <div class="col">
        <table class="table table-striped table-hover table-bordered text-center table-sm align-middle">
            <thead class="table-light">
            <tr>
                <th scope="col"><i class="bi bi-person px-1"></i>Doctor Name</th>
                <th scope="col"><i class="bi bi-book px-1"></i>Classes Number</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Dr.Ali</th>
                <td>3</td>
            </tr>
            </tbody>
        </table>
    </div>
    <?php
}elseif ($GroupId ==3){
    ?>

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
                <th scope="col"><i class="bi bi-clock px-1"></i>Appointment</th>
                <th scope="col"><i class="bi bi-building px-1"></i>Hall</th>
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
}?>