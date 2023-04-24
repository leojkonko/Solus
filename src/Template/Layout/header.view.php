<!DOCTYPE html>
<html lang="pt-BR" class="html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="150 words" />
    <meta name="keywords" content="your tags" />
    <meta name="author" content="Agência Ellite Digital">

    <?php /* ==== Favicons ==== */ ?>
    <link rel="apple-touch-icon" sizes="57x57" href="<?= asset('images/favicons/apple-icon-57x57.png') ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= asset('images/favicons/apple-icon-60x60.png') ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= asset('images/favicons/apple-icon-72x72.png') ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= asset('images/favicons/apple-icon-76x76.png') ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= asset('images/favicons/apple-icon-114x114.png') ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= asset('images/favicons/apple-icon-120x120.png') ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= asset('images/favicons/apple-icon-144x144.png') ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= asset('images/favicons/apple-icon-152x152.png') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= asset('images/favicons/apple-icon-180x180.png') ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= asset('images/favicons/android-icon-192x192.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('images/favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= asset('images/favicons/favicon-96x96.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('images/favicons/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= asset('images/favicons/manifest.json') ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= asset('images/favicons/ms-icon-144x144.png') ?>">
    <meta name="theme-color" content="#ffffff">

    <title><?= !empty($title) ? $title . " | Projeto Padrão" : "Projeto Padrão" ?></title>

    <?php /* ==== Stylesheets ==== */ ?>
    <link rel="stylesheet" href="<?= asset('css/bootstrap.css') ?>"> <?php /* ==== Arquivo do bootstrap ==== */ ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@7/swiper-bundle.min.css" />


    <link rel="stylesheet" href="<?= asset('css/main.css') ?>"> <?php /* ==== Arquivo do front ==== */ ?>
    <?php
    /* ==== Arquivo para o pessoal do back end ==== 
    <link rel="stylesheet" href="webroot/site/dist/css/custom.css"> 
    */ ?>

    <?php /* Fonte temporária */ ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Manrope:wght@400;700&family=Montserrat:wght@400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <?php ob_start() ?>
    <header class="header py-2 text-white position-absolute z-index-2 w-100">
        <div class="container">
            <div class="row px-lg-2">
                <div class="col-6 d-flex justify-content-start">
                    <a href="">
                        <img width="220px" src="<?= asset('images/logos/logo.png') ?>" alt="">
                    </a>
                </div>
                <div class="col-6 d-flex justify-content-end gap-2">
                    <button class="btn-header btn btn-primary rounded-36 text-white p-700 p-16  d-none d-lg-inline">Área restrita
                        <svg class="ms-1" width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="2" y="1" width="10" height="10" rx="5" stroke="white" stroke-width="2"/>
                            <path d="M13 17C13 13.6863 10.3137 11 7 11C3.68629 11 1 13.6863 1 17" stroke="white" stroke-width="2"/>
                        </svg>
                    </button>
                    <button class="btn-header btn btn-primary rounded-36 text-white p-700 p-16" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <span class="d-none d-lg-inline">Menu</span>
                        <svg class="ms-0 ms-lg-1" width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="20" height="2" rx="1" fill="white"/>
                            <rect x="10" y="7" width="10" height="2" rx="1" fill="white"/>
                            <rect x="6" y="14" width="14" height="2" rx="1" fill="white"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- offcanvas -->

        <div class="offcanvas offcanvas-end bg-primary" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                    <svg class="m-auto" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 10.957L6 5.97853L11 1.00001M1 1L10.957 11" stroke="white" stroke-width="2" stroke-miterlimit="10"/>
                    </svg>
                </button>
            </div>
            <div class="offcanvas-body position-relative">
                <div>
                    <ul class="m-0">
                        <li>
                            <a class="p-24 p-700" href="<?= url('/') ?>">Home</a>
                        </li>
                        <li>
                            <a class="p-24 p-700" href="<?= url('/empresa') ?>">Sobre nós</a>
                        </li>
                        <li class="d-flex flex-column">
                            <a class="p-24 p-700" href="<?= url('/produtos') ?>">Empreendimentos</a>
                            <a class="p-16 p-400" href="<?= url('/produtos') ?>">Caxias do Sul-RS</a>
                            <a class="p-16 p-400" href="<?= url('/produtos') ?>">Nova Petrópolis-RS</a>
                        </li>
                        <li>
                            <a class="p-24 p-700" href="<?= url('/blog') ?>">Blog</a>
                        </li>
                        <li>
                            <a class="p-24 p-700" href="<?= url('/contato') ?>">Contato</a>
                        </li>
                        <li>
                            <a class="p-24 p-700" href="<?= url('/') ?>">
                                Área restrita
                                <svg class="ms-1" width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2" y="1" width="10" height="10" rx="5" stroke="white" stroke-width="2"/>
                                    <path d="M13 17C13 13.6863 10.3137 11 7 11C3.68629 11 1 13.6863 1 17" stroke="white" stroke-width="2"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="infos-header ps-2">
                        <a href="">
                            <img src="<?= asset('images/logos/logo.png') ?>" alt="">
                        </a>
                        <div class="d-flex gap-1 ps-1 pt-2">
                            <a href="" target="_blank">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_31_170)">
                                    <path d="M12 2.162C15.204 2.162 15.584 2.174 16.849 2.232C18.157 2.292 19.504 2.59 20.457 3.543C21.419 4.505 21.708 5.839 21.768 7.151C21.826 8.416 21.838 8.796 21.838 12C21.838 15.204 21.826 15.584 21.768 16.849C21.709 18.15 21.404 19.51 20.457 20.457C19.495 21.419 18.162 21.708 16.849 21.768C15.584 21.826 15.204 21.838 12 21.838C8.796 21.838 8.416 21.826 7.151 21.768C5.86 21.709 4.482 21.397 3.543 20.457C2.586 19.5 2.292 18.153 2.232 16.849C2.174 15.584 2.162 15.204 2.162 12C2.162 8.796 2.174 8.416 2.232 7.151C2.291 5.855 2.599 4.487 3.543 3.543C4.503 2.583 5.842 2.292 7.151 2.232C8.416 2.174 8.796 2.162 12 2.162ZM12 0C8.741 0 8.332 0.014 7.052 0.072C5.197 0.157 3.355 0.673 2.014 2.014C0.668 3.36 0.157 5.198 0.072 7.052C0.014 8.332 0 8.741 0 12C0 15.259 0.014 15.668 0.072 16.948C0.157 18.801 0.675 20.648 2.014 21.986C3.359 23.331 5.2 23.843 7.052 23.928C8.332 23.986 8.741 24 12 24C15.259 24 15.668 23.986 16.948 23.928C18.802 23.843 20.646 23.326 21.986 21.986C23.333 20.639 23.843 18.802 23.928 16.948C23.986 15.668 24 15.259 24 12C24 8.741 23.986 8.332 23.928 7.052C23.843 5.197 23.326 3.354 21.986 2.014C20.643 0.671 18.797 0.156 16.948 0.072C15.668 0.014 15.259 0 12 0Z" fill="white" fill-opacity="0.5"/>
                                    <path d="M12 5.83801C8.597 5.83801 5.838 8.59701 5.838 12C5.838 15.403 8.597 18.162 12 18.162C15.403 18.162 18.162 15.403 18.162 12C18.162 8.59701 15.403 5.83801 12 5.83801ZM12 16C9.791 16 8 14.209 8 12C8 9.79101 9.791 8.00001 12 8.00001C14.209 8.00001 16 9.79101 16 12C16 14.209 14.209 16 12 16Z" fill="white" fill-opacity="0.5"/>
                                    <path d="M18.406 7.03399C19.2013 7.03399 19.846 6.38928 19.846 5.59399C19.846 4.7987 19.2013 4.15399 18.406 4.15399C17.6107 4.15399 16.966 4.7987 16.966 5.59399C16.966 6.38928 17.6107 7.03399 18.406 7.03399Z" fill="white" fill-opacity="0.5"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_31_170">
                                    <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="" target="_blank">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_31_175)">
                                    <path d="M24 12.073C24 18.062 19.606 23.027 13.87 23.928V15.565H16.659L17.19 12.105H13.87V9.86C13.87 8.913 14.334 7.991 15.82 7.991H17.329V5.045C17.329 5.045 15.959 4.811 14.65 4.811C11.916 4.811 10.13 6.468 10.13 9.467V12.104H7.091V15.564H10.13V23.927C4.395 23.025 0 18.061 0 12.073C0 5.446 5.373 0.072998 12 0.072998C18.627 0.072998 24 5.445 24 12.073Z" fill="white" fill-opacity="0.5"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_31_175">
                                    <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="" target="_blank">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_31_181)">
                                    <path d="M20.4496 20.4505H16.8933V14.8811C16.8933 13.5529 16.8697 11.8439 15.0436 11.8439C13.1915 11.8439 12.9077 13.2904 12.9077 14.7853V20.4505H9.35258V8.99709H12.767V10.5618H12.8143C13.5109 9.37202 14.8047 8.6612 16.1825 8.71206C19.7873 8.71206 20.4508 11.0834 20.4508 14.1668L20.4496 20.4505ZM5.33977 7.43118C4.19967 7.43118 3.27601 6.50747 3.27601 5.36733C3.27601 4.22719 4.19967 3.30349 5.33977 3.30349C6.47987 3.30349 7.40354 4.22719 7.40354 5.36733C7.40354 6.50747 6.47987 7.43118 5.33977 7.43118ZM7.11733 20.4505H3.55748V8.99709H7.11733V20.4505ZM22.2224 0.00134427H1.77046C0.804218 -0.00930019 0.0118267 0.76538 0 1.73166V22.2684C0.0118267 23.2358 0.804218 24.0105 1.77046 23.9999H22.2224C23.1911 24.0117 23.987 23.237 24 22.2684V1.73048C23.9858 0.761831 23.1899 -0.0128484 22.2224 0.000161495" fill="white" fill-opacity="0.5"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_31_181">
                                    <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offcanvas -->
    </header>
    <?php
    $header = ob_get_contents();
    ob_end_clean();
    ?>

    <?php /* Remover essa primeira condicional */ ?>
        <?php if ($pagina_atual === "home") : ?>
            <?= $header ?>
        <?php elseif ($pagina_atual === "empresa") : ?>
            <div class="header-wrapper position-relative">
                <?= $header ?>
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class="breadcrumb-wrapper">
                            <img class="position-relative z-index-background top-0 start-0" src="<?= asset('images/backgrounds/breadcrumb1.png') ?>" alt="">
                       <div class="container">
                        <div class="position-absolute conteudo-bread z-index-1 text-lg-start text-center">
                            <h2 class="h2 p-700 text-white">Bem-vindo! Conheça mais sobre a Solus</h2>
                            <div class="mt-1">
                                <a href="">Home</a>
                                    <svg class=" mx-0-50" width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 5L1 9" stroke="gray" stroke-miterlimit="10" stroke-linejoin="round"/>
                                    </svg>
                                <a href="">Sobre nós</a>
                            </div>
                        </div>
                       </div>
                    </section>
                <?php endif; ?>
            </div>
        <?php elseif ($pagina_atual === "produtos") : ?>
            <div class="header-wrapper position-relative">
                <?= $header ?>
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class="breadcrumb-wrapper">
                            <img class="position-relative z-index-background top-0 start-0" src="<?= asset('images/backgrounds/breadcrumb3.png') ?>" alt="">
                       <div class="container">
                        <div class="position-absolute conteudo-bread z-index-1 text-lg-start text-center">
                            <h2 class="h2 p-700 text-white">Empreendimentos em Caxias do Sul</h2>
                            <div class="mt-1">
                                <a href="">Home</a>
                                    <svg class=" mx-0-50" width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 5L1 9" stroke="gray" stroke-miterlimit="10" stroke-linejoin="round"/>
                                    </svg>
                                <a href="">Sobre nós</a>
                            </div>
                        </div>
                       </div>
                    </section>
                <?php endif; ?>
            </div>
        <?php elseif ($pagina_atual === "produto_detalhe") : ?>
            <div class="header-wrapper position-relative">
                <?= $header ?>
                <?php if (!empty($breadcrumbs)) : ?>
                    <section class="breadcrumb-wrapper">
                            <img class="position-relative z-index-background top-0 start-0" src="<?= asset('images/backgrounds/breadcrumb3.png') ?>" alt="">
                       <div class="container">
                        <div class="position-absolute conteudo-bread z-index-1 text-lg-start text-center">
                            <h2 class="h2 p-700 text-white">Empreendimentos em Caxias do Sul</h2>
                            <div class="mt-1">
                                <a href="">Home</a>
                                    <svg class=" mx-0-50" width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 5L1 9" stroke="gray" stroke-miterlimit="10" stroke-linejoin="round"/>
                                    </svg>
                                <a href="">Sobre nós</a>
                            </div>
                        </div>
                       </div>
                    </section>
                <?php endif; ?>
            </div>
        <?php endif; ?>