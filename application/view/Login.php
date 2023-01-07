<?php
use WiseChain\core\Application;
use WiseChain\core\Model;
/** @var Model $model */
?>
<div class="col-lg-6 mt-5 text-center mx-auto">
    <div class="card">
        <h5 class="card-header"><?php echo Application::$app->language->dictionary['Lang_PLogin']; ?></h5>
        <div class="card-body">
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="Username"><i class="bi bi-person text-primary"></i></span>
                    <input name="Username" type="text" value="<?php echo $model->Username; ?>" class="form-control <?php echo $model->hasError('Username') ? 'is-invalid' : ''; ?>" placeholder="<?php echo Application::$app->language->dictionary['Lang_User']; ?>" aria-label="Username" aria-describedby="Username">
                    <div class="invalid-feedback text-start">
                        <?php echo $model->getFirstError('Username'); ?>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="Password"><i class="bi bi-key text-danger"></i></span>
                    <input name="Password" type="password" class="form-control <?php echo $model->hasError('Password') ? 'is-invalid' : ''; ?>" placeholder="<?php echo Application::$app->language->dictionary['Lang_Pass']; ?>" aria-label="Password" aria-describedby="Password">
                    <div class="invalid-feedback text-start">
                        <?php echo $model->getFirstError('Password'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><i class="bi bi-door-open"></i> <?php echo Application::$app->language->dictionary['Lang_Login']; ?></button>
            </form>
        </div>
    </div>
</div>