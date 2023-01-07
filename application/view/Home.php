<?php use WiseChain\core\Application;
use const WiseChain\IMG;

?>
<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="<?php echo IMG.'wise.png' ?>" alt="" width="100" height="100">
    <h1 class="display-5 fw-bold"><?php echo Application::$app->language->dictionary['Home_ForA']; ?></h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4"><?php echo Application::$app->language->dictionary['Home_WiseB']; ?></p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <?php
            if (!Application::iGuest()){
                echo '<a href="/profile" title="Sign in" class="btn btn-primary btn-lg px-4 me-sm-3"><i class="bi bi-person px-1"></i>'.Application::$app->language->dictionary['Home_Profile'].'</a>';
            }else{
                echo '<a href="/login" title="Sign in" class="btn btn-primary btn-lg px-4 gap-3"><i class="bi bi-door-open px-1"></i>'. Application::$app->language->dictionary['Home_Sing'] .'</a>';
            }
            ?>
            <a href="https://gitbook.com/#" target="_blank" title="Document" class="btn btn-outline-secondary btn-lg px-4 gap-3"><i class="bi bi-file-earmark-text px-1"></i><?php echo Application::$app->language->dictionary['Home_Doc']; ?></a>
        </div>
    </div>
</div>