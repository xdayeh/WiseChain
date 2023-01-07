<?php
use WiseChain\core\Application;
?>
<div class="col">
    <h5><i class="bi bi-gear px-1"></i><?php echo Application::$app->language->dictionary['Setting_Ss']; ?></h5>
    <div class="card">
        <div class="card-header">
            <?php echo Application::$app->language->dictionary['Setting_UGAP']; ?>
        </div>
        <div class="card-body">
            <p class="card-text mb-0"><?php echo Application::$app->language->dictionary['Setting_YCAdd']; ?></p>
            <a href="/groups" class="btn btn-warning"><i class="bi bi-people px-1"></i><?php echo Application::$app->language->dictionary['Setting_UG']; ?></a>
            <a href="/privileges" class="btn btn-warning"><i class="bi bi-ui-checks-grid px-1"></i><?php echo Application::$app->language->dictionary['Setting_Pr']; ?></a>
        </div>
    </div>
    <div class="card mt-2">
        <div class="card-header">
            <?php echo Application::$app->language->dictionary['Setting_SBD']; ?>
        </div>
        <div class="card-body">
            <p class="card-text mb-0"><?php echo Application::$app->language->dictionary['Setting_IF']; ?></p>
            <a href="#" class="btn btn-primary disabled"><i class="bi bi-database-down px-1"></i><?php echo Application::$app->language->dictionary['Setting_SAB']; ?></a>
            <a href="#" class="btn btn-primary disabled"><i class="bi bi-database-up px-1"></i><?php echo Application::$app->language->dictionary['Setting_RAB']; ?></a>
        </div>
    </div>
</div>