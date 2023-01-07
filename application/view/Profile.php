<?php

use WiseChain\core\Application;
use const WiseChain\IMG;
?>
<h5><i class="bi bi-person px-1"></i><?php echo Application::$app->language->dictionary['Profile_Pr'] ?></h5>
<div class="row row-cols-1 row-cols-md-2">
    <div class="col-lg-4 col-sm-12">
        <div class="card h-100 bg-light text-center">
            <div class="card-body">
                <img src="<?php echo IMG.'profile.png'; ?>" class="rounded-circle me-2" height="120" width="120" alt="profile">
                <h5 class="fw-bold">Name</h5>
                <h6 class="text-muted">education specialization</h6>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-sm-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0"><i class="bi bi-activity px-1"></i><?php echo Application::$app->language->dictionary['Profile_Fu'] ?></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">The name of the database</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0"><i class="bi bi-envelope-at px-1"></i><?php echo Application::$app->language->dictionary['Profile_Em'] ?></h6></div>
                    <div class="col-sm-9 text-secondary">email from the database</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0"><i class="bi bi-telephone px-1"></i><?php echo Application::$app->language->dictionary['Profile_Ph'] ?></h6></div>
                    <div class="col-sm-9 text-secondary">phone number from the database</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0"><i class="bi bi-geo-alt px-1"></i><?php echo Application::$app->language->dictionary['Profile_Ad'] ?></h6></div>
                    <div class="col-sm-9 text-secondary">address from the database</div>
                </div>
            </div>
        </div>
    </div>
</div>