<?php use WiseChain\core\Application;
use const WiseChain\CSS;
use const WiseChain\IMG;
use const WiseChain\JS; ?>
<!doctype html>
<html lang="<?php echo Application::$app->language->dictionary['Lang_Lang']; ?>" dir="<?php echo Application::$app->language->dictionary['Lang_Dir']; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo Application::$app->language->dictionary['Lang_Title']; ?></title>
    <meta name="description" content="description">
    <meta name="keywords" content="keywords">
    <meta name="author" content="author">
    <meta property="og:title" content="og title">
    <meta property="og:description" content="og description">
    <meta property="og:url" content="og url">
    <meta property="og:image" content="og og">
    <meta property="og:locale" content="og locale">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@xDayeh">
    <meta name="twitter:creator" content="@xDayeh">
    <link rel="stylesheet" href="<?php echo CSS.Application::$app->language->dictionary['Bootstrap']; ?>">
    <link rel="stylesheet" href="<?php echo CSS ?>bootstrap-icons.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm border-bottom p-0 fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo URL_XP; ?>">
            <img src="<?php echo IMG; ?>wise.png" alt="Wise" width="24" height="24">
            <span><?php echo Application::$app->language->dictionary['Lang_Framework']; ?></span>
        </a>
        <button class="navbar-toggler px-1 py-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo htmlentities(basename($_SERVER['REQUEST_URI']))=='userGuide' ? 'active' : ''; ?>" href="/userGuide"><i class="bi bi-person-lines-fill px-1"></i><?php echo Application::$app->language->dictionary['Lang_About']; ?></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <i class="nav-link active bi bi-moon-fill" id="toggleMode" role="button"></i>
                </li>
                <li class="nav-item">
                    <a href="/language" class="nav-link active"><?php echo Application::$app->language->dictionary['Lang_Footer']; ?><i class="bi bi-translate px-1"></i></a>
                </li>
                <?php if (!Application::iGuest()){ ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <strong><?php echo Application::$app->user->getDisplay('Username'); ?></strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-speedometer2 px-1"></i><?php echo Application::$app->language->dictionary['Navbar_Dash']; ?></a></li>
                            <?php if (Application::$app->user->getDisplay('GroupId') == 1){ ?>
                            <li><a class="dropdown-item" href="/setting"><i class="bi bi-gear px-1"></i><?php echo Application::$app->language->dictionary['Navbar_Set']; ?></a></li>
                            <?php } ?>
                            <li><a class="dropdown-item" href="/profile"><i class="bi bi-person px-1"></i><?php echo Application::$app->language->dictionary['Navbar_Pro']; ?></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/logout"><i class="bi bi-door-closed px-1"></i><?php echo Application::$app->language->dictionary['Navbar_SignO']; ?></a></li>
                        </ul>
                    </li>
                <?php }else{ ?>
                    <li class="nav-item">
                        <a href="/login" class="nav-link active py-1"><button type="button" class="btn btn-primary btn-sm"><i class="bi bi-door-open"></i> <?php echo Application::$app->language->dictionary['Lang_Login']; ?></button></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5 mb-4">
    <div class="row">
        {{content}}
    </div>
</div>
<footer class="fixed-bottom bg-light shadow border-top">
    <div class="container">
        <div class="row">
            <div class="col fw-bolder">
                <small><?php echo Application::$app->language->dictionary['Copy']; ?></small>
                <div class="float-end">
                    <a class="nav-link active" href="https://github.com/xdayeh/WiseChain" target="_blank">
                        <i class="bi bi-github"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo JS; ?>jquery-3.6.3.min.js" crossorigin></script>
<script src="<?php echo JS; ?>bootstrap.min.js" crossorigin></script>
<script src="<?php echo JS; ?>bootstrap.bundle.min.js" crossorigin></script>
<script src="<?php echo JS; ?>react.production.min.js" crossorigin></script>
<script src="<?php echo JS; ?>react-dom.production.min.js" crossorigin></script>
<script src="<?php echo JS; ?>babel.min.js" crossorigin></script>
<script src="<?php echo JS; ?>web3.min.js" crossorigin></script>
<script src="<?php echo JS; ?>main.js" ></script>
<script src="<?php echo JS; ?>react.js"></script>
<script src="<?php echo JS; ?>web3.js"></script>
</body>
</html>