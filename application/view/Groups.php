<?php

use WiseChain\core\Application;
use WiseChain\core\Model;
$GroupName = Application::$app->language->dictionary['Groups_GND'];
/** @var Model $Groups */
?>
<div class="col">
    <div class="col-sm-6 col-md-8 mt-2">
        <a href="/groups/create" class="btn btn-sm btn-primary disabled"><i class="bi bi-plus px-1"></i><?php echo Application::$app->language->dictionary['Groups_NG']; ?></a>
    </div>
    <div class="table-responsive mt-2">
        <table class="table table-bordered table-hover text-center align-middle">
            <thead class="table-light">
            <tr>
                <th scope="col"><i class="bi bi-activity px-1"></i><?php echo Application::$app->language->dictionary['Groups_GN']; ?></th>
                <th scope="col"><i class="bi bi-gear px-1"></i><?php echo Application::$app->language->dictionary['Groups_SG']; ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($Groups as $value => $Group){ ?>
                <tr>
                    <th scope="row"><?php echo $Group->$GroupName; ?></th>
                    <th>
                        <a class="btn btn-primary btn-sm disabled" href="/Groups/Edit/<?php echo $Group->GroupId; ?>" role="button"><i class="bi bi-pencil-square"></i></a>
                        <a class="btn btn-danger btn-sm disabled" href="/Groups/Delete/<?php echo $Group->GroupId; ?>" role="button"><i class="bi bi-trash"></i></a>
                    </th>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>