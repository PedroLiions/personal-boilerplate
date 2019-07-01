<!DOCTYPE html>
<!--[if IE]><html lang="pt-br" class="lt-ie9 lt-ie8"><![endif]-->
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Kaprice</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="">
	<meta name="language" content="pt-br">
	<meta name="author" content="Agência 3xceler - Pedro Lima">

    <!--    Css Libraries -->
    <link rel="stylesheet" href="<?= node_modules_path() ?>/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="<?= node_modules_path() ?>/slick-carousel/slick/slick-theme.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/dist/css/main.css" type="text/css">

	<meta name="theme-color" content="#ffffff">
    <meta name="template-uri" content="<?= get_template_directory_uri() ?>">
</head>
<body>
	<div class="oldiewarning" aria-hidden="true" hidden="true">
		<a href="https://www.google.com.br/chrome/browser/desktop/" aria-hidden="true">
			POR FAVOR, CLIQUE AQUI E ATUALIZE SEU NAVEGADOR PARA ACESSAR O SITE.
		</a>
	</div>
    <div class="wrapper-header-top d-none d-md-block">
        <div class="container-fluid d-flex justify-content-between align-items-center">

            <div class="d-flex justify-content-between align-items-center">
                <address class="icon-wrapper">
                    <i class="icon fas fa-map-marker-alt text-danger"></i>
                    <span class="text">Rua Clélia, 1251 - Sala 64 | Lapa - São Paulo / SP</span>
                </address>
                <div class="icon-wrapper">
                    <i class="icon fas fa-phone text-danger"></i>
                    <span class="text">11 3873.7909</span>
                </div>
                <div class="icon-wrapper">
                    <i class="icon fab fa-whatsapp text-danger"></i>
                    <span class="text">11 99636.8769</span>
                </div>
            </div>

            <div class="d-flex flex-row">
                <a href="#" class="wrapper-social-icon">
                    <i class="icon fab fa-facebook-square"></i>
                </a>
                <a href="#" class="wrapper-social-icon">
                    <i class="icon fab fa-instagram"></i>
                </a>
            </div>

        </div>
    </div>

    <header class="wrapper-header">
        <div class="container-fluid">
            <div class="wrapper-logo">
                <a href="#" >
                    <img style="width: 166px; height: 42px" src="<?= get_template_directory_uri() ?>/dist/imgs/kaprice-corretora-de-seguros-logo.png" alt="">
                </a>
            </div>

            <button class="nav-toggle d-lg-none" data-toggle="close" data-nav-open="false">
                <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="32.5px" height="26.5px">
                    <defs>
                        <filter id="Filter_0">
                            <feFlood flood-color="rgb(255, 255, 255)" flood-opacity="1" result="floodOut" />
                            <feComposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut" />
                            <feBlend mode="normal" in="compOut" in2="SourceGraphic" />
                        </filter>

                    </defs>
                    <g filter="url(#Filter_0)">
                        <path fill-rule="evenodd"  stroke="rgb(64, 64, 65)" stroke-width="3px" stroke-linecap="round" stroke-linejoin="miter" fill="none"
                              d="M13.800,19.842 L27.200,19.842 "/>
                        <path fill-rule="evenodd"  stroke="rgb(64, 64, 65)" stroke-width="3px" stroke-linecap="round" stroke-linejoin="miter" fill="none"
                              d="M3.800,19.842 L8.200,19.842 "/>
                        <path fill-rule="evenodd"  stroke="rgb(64, 64, 65)" stroke-width="3px" stroke-linecap="round" stroke-linejoin="miter" fill="none"
                              d="M3.800,10.113 L27.200,10.113 "/>
                        <path fill-rule="evenodd"  stroke="rgb(64, 64, 65)" stroke-width="3px" stroke-linecap="round" stroke-linejoin="miter" fill="none"
                              d="M3.800,1.497 L27.200,1.497 "/>
                    </g>
                </svg>
            </button>

            <?php
                wp_nav_menu([
                    'theme_location' => 'header-menu',
                    'menu_class' => 'nav-menu',
                    'container_class' => 'navigation-main'
                ]);
            ?>
        </div>
    </header>
