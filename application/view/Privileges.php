<?php
use WiseChain\core\Application;
use WiseChain\core\Model;
$PrivilegeName = Application::$app->language->dictionary['Privilege_PND'];
/** @var Model $Privileges */
?>
<div class="col">
    <div class="col-sm-6 col-md-8 mt-2">
        <a href="/privileges/create" class="btn btn-sm btn-primary disabled"><i class="bi bi-plus px-1"></i><?php echo Application::$app->language->dictionary['Privilege_ANP']; ?></a>
    </div>
    <div class="table-responsive mt-2">
        <table class="table table-bordered  table-hover text-center">
            <thead class="table-light">
            <tr>
                <th scope="col"><i class="bi bi-activity px-1"></i><?php echo Application::$app->language->dictionary['Privilege_PN']; ?></th>
                <th scope="col"><i class="bi bi-gear px-1"></i><?php echo Application::$app->language->dictionary['Privilege_PS']; ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($Privileges as $value => $Privilege){ ?>
                <tr>
                    <th scope="row"><?php echo $Privilege->$PrivilegeName; ?></th>
                    <th>
                        <a class="btn btn-primary btn-sm disabled" href="/Privileges/Edit/<?php echo $Privilege->PrivilegeId; ?>" role="button"><i class="bi bi-pencil-square"></i></a>
                        <a class="btn btn-danger btn-sm disabled" href="/Privileges/Delete/<?php echo $Privilege->PrivilegeId; ?>" role="button"><i class="bi bi-trash"></i></a>
                    </th>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>