<head>
        <meta charset="UTF-8">
        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <link href="favicon.gif" rel="shortcut icon" type="image/gif"/>
        <meta name="viewport" content="width=device-width, initial-scale=.5">
        <meta property="og:title" content="Vegard Aasen">
        <meta property="og:description" content="I'm Vegard Aasen, a full time System Developer currently working for Telenor Norge ASA with Security solutions. Main interests is cars, games and programming languages and relaxation.">
        <meta name="google-site-verification" content="2F2-RvpYA8iyYAK7FNzok9qySKu6thi5vTBWIrfnUbc" />
        <title><?php printf($configuration['version.title'] . ' v' . $configuration['version.number']);?></title>
        <?php if($configuration['use.less']=='1') {?>
        <link rel="stylesheet/less" type="text/css" href="/simplejuice/design/css/site.less?version=<?php printf($configuration['version.number'])?>" />
        <script src="/simplejuice/design/js/less.js" type="text/javascript"></script>
        <?php }else{ ?>
        <link rel="stylesheet" type="text/css" href="/simplejuice/design/css/site.css?version=<?php printf($configuration['version.number'])?>" />
        <?php } ?>
        <link rel="stylesheet" type="text/css" href="/simplejuice/design/css/animation.css?version=<?php printf($configuration['version.number'])?>" />
        <!--link rel="stylesheet" type="text/css" href="/simplejuice/design/css/m.css?version=<?php printf($configuration['version.number'])?>" /-->
    </head>