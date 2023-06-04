<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace(substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI']) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$version = isset($_GET['version']) ? urldecode(strtolower($_GET['version'])) : '';
$partner = isset($_GET['partner']) ? urldecode(strtolower($_GET['partner'])) : '';
$query_string = http_build_query($_GET);

include_once $ROOT . 'version.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <base href="<?= $BASE_HREF . ($query_string ? '?' . $query_string : '') ?>">

    <meta name="facebook-domain-verification" content="rsphzbfl7w14s55y69wph48b6fxhyo" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
<?php
$title = 'Login Page';
?>
<title><?= $title ?></title>
<meta property="og:title" content="<?= $title ?>">
<meta property="og:description" content="<?= $description ?>">
<meta name="description" content="<?= $description ?>">


    <meta property="og:title" content=<?= $title ?>">
    <meta property="og:description" content="<?= $$description ?>">
    <meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
    <meta property="og:image" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>img/main/main_bg.jpg">
    <link rel="image_src" href="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>img/main/main_bg.jpg">

    <link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">

    <link rel="stylesheet" href="https://cdn.synergy.ru/libs/bootstrap/bootstrap-4.5.2.min.css">
    <link rel="stylesheet" href="https://cdn.synergy.ru/libs/fancybox/jquery.fancybox-3.5.7.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.min.css" integrity="sha512-kftIhGv/k/oRHmfDRDEb1MxlaWlW4tiz21rx0yNC2zUWM2n4nxRtX1z3Ijmu54he3Yf9sBX4skJaCe3LTJV1rQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-text-marquee@latest/dist/jquery.text-marquee.min.css" rel="stylesheet" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">

    <link rel="stylesheet" href="libs/hamburgers/hamburgers.css">

    
    

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', '<?= $GTM_ID ?>');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body class="<?= $version ? 'version-' . $version : '' ?>" id="body">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $GTM_ID ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    
    

    <div class="wrapper">
        


    </div>

    <div hidden>
        


    </div>

    <!-- Плагины и хелперы -->
    <script src="https://cdn.synergy.ru/libs/jquery/jquery-3.4.1.js"></script>
    <script src="https://cdn.synergy.ru/libs/fancybox/jquery.fancybox-3.5.7.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.min.js" integrity="sha512-pY1t/ADgTwbfGbw0+mRGd33EroA5YgRUWhQNFpPIAdBzyoSb38FsFrf4wBTcS3GFPdTfgtpRrbGCkdl2C2OXYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="libs/hamburgers/hamburgers.js"></script>
    <script src="//cdn.jsdelivr.net/npm/jquery.marquee@1.5.0/jquery.marquee.min.js" type="text/javascript"></script>
    <!-- Скрипт ALM Lander -->
    <script src="https://syn.su/js/lander.js" defer></script>

    
<script src="js/script.login.js"></script>


</body>

</html>