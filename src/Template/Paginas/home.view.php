<main id="home">
    <section class="banner">
        <div class="">
            <div class="swiper banner-swiper">
                <div class="swiper-wrapper">
                    <?php foreach(range(0,9) as $i) : ?>
                        <div class="swiper-slide d-none d-lg-block">
                            <div class="ratio ratio-21x9">
                                <img class="w-100 h-100 object-fit-cover" src="<?= asset('images/backgrounds/banner.png') ?>" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide d-block d-lg-none">
                            <div class="ratio ratio-6x9">
                                <img class="w-100 h-100 object-fit-cover" src="<?= asset('images/backgrounds/banner.png') ?>" alt="">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!--<div class="swiper-pagination"></div>-->
                <div class="swiper-button-next arrows"></div>
                <div class="swiper-button-prev arrows"></div>
            </div>
        </div>
    </section>
    <section class="historia py-lg-4 position-relative py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center justify-content-center" data-aos="fade-right">
                    <div class="ratio ratio-16x9">
                        <img class="" src="<?= asset('images/banners/historia.png') ?>" alt="">
                        <p class="d-none d-lg-block sombra-amarela"></p>
                    </div>
                    <!--<img src="<?= asset('images/banners/sombra-amarela.png') ?>" alt="">-->
                </div>
                <div class="col-lg-6 ps-lg-4 d-flex align-items-center text-center text-sm-start mt-2 mt-sm-0">
                    <div class="flex-column ps-lg-2">
                        <p class="p-16 p-400 text-warning">SOBRE NÓS</p>
                        <h2 class="h2 text-primary">Nossa história</h2>
                        <p class="p-16 p-400 pt-1">
                        O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas 
                        indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro.
                        </p>
                        <button class="btn-header btn btn-warning-custom rounded-36 text-white p-700 p-16 mt-1">Saiba mais</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="empreendimentos position-relative bg-secondary " >
        <div class="padding-top-border-section">
            <!--<svg class="riscos" width="772" height="519" viewBox="0 0 772 519" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1331.38 -811.833C1224.93 -918.57 1098.02 -972 946.954 -972H547.533C396.092 -972 268.446 -918.941 161.62 -811.833C55.1653 -705.096 2 -578.322 2 -427.555V-27.4453C2 123.322 55.1653 250.096 161.62 356.833C268.074 463.57 395.101 517 546.046 517H945.467C1096.91 517 1224.55 463.941 1331.38 356.833C1437.96 250.096 1491 123.322 1491 -27.4453V-427.555C1491.12 -578.322 1437.96 -705.096 1331.38 -811.833ZM1201.87 -27.4453C1201.87 42.0636 1175.85 102.791 1126.65 151.893C1077.08 201.365 1015.61 226.967 945.591 226.967H546.046C476.77 226.967 416.664 200.623 367.589 152.14C317.893 103.162 291.125 42.4347 291.125 -27.4453V-427.555C291.125 -497.064 317.15 -557.791 366.35 -606.893C415.921 -656.365 477.389 -681.967 547.409 -681.967H946.83C1016.11 -681.967 1076.21 -655.623 1125.29 -607.14C1174.98 -558.162 1201.75 -497.435 1201.75 -427.555V-227.438L1201.87 -27.4453Z" stroke="black" stroke-opacity="0.15" stroke-width="3"/>
            </svg>-->
            <div class="border-section position-relative z-index-background"></div>
            <div class="container">
                <div class="row">
                    <div class="w-100 text-center border-section-titulo">
                        <p class="p-16 p-400 text-warning">DESTAQUES</p>
                        <h2 class="h2 text-primary">Empreendimentos</h2>
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center flex-column" data-aos="fade-up-right">
                        <ul class="nav nav-pills mb-3 w-100" id="pills-tab" role="tablist">
                            <li class="nav-item caxias" role="presentation">
                                <button class="nav-link active rounded-36 text-white p-700 p-24" id="pills-home-tab" 
                                data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Caxias do Sul</button>
                            </li>
                            <li class="nav-item petropolis" role="presentation">
                                <button class="nav-link rounded-36 text-white p-700 p-24" id="pills-profile-tab" 
                                data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Nova Petrópolis</button>
                            </li>
                        </ul>
                        <div class="tab-content w-100" id="pills-tabContent">
                            <div class="tab-pane fade show active w-100" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="swiper empreendimentos-swiper">
                                    <div class="swiper-wrapper mb-4 p-sm-1">
                                        <?php foreach(range(0,9) as $i) : ?>
                                            <div class="swiper-slide flex-column d-flex col-lg-6 col-12 pe-md-3 pe-lg-0">
                                                <div class="row">
                                                    <div class="col-lg-6 bg-white rounded-36-left p-s p-sm-4 p-md-2 text-center text-sm-start">
                                                        <div class="d-xl-flex d-lg-block gap-1 m-auto pt-2 pt-sm-0 position-lg-absolute">
                                                            <button class="mb-lg-0-50 mb-xl-0 btn rounded-36 py-0-25 px-0-50 p-12 p-700 border-2 btn-outline-warning">ENTREGA EM JUNHO</button>
                                                            <button class=" btn rounded-36 py-0-25 px-0-50 p-12 p-700 border-2 btn-outline-warning">ÚLTIMAS UNIDADES</button>
                                                        </div>
                                                        <h2 class="p-700 h2-32 text-dark mt-2">
                                                        Zarah Ian Residence
                                                        </h2>
                                                        <ul class="m-0 list-unstyled text-cinza-texto mt-3">
                                                            <li class="mb-0-25">
                                                                <svg class="me-0-50" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7 1C4.23935 1 2 3.26405 2 6.05514C2 10.5313 7 15 7 15C7 15 12 10.5313 12 6.05514C12 3.26405 9.76065 1 7 1ZM7 8.23012C5.81057 8.23012 4.84875 7.25769 4.84875 6.05514C4.84875 4.8526 5.81057 3.88017 7 3.88017C8.18943 3.88017 9.15125 4.8526 9.15125 6.05514C9.15125 7.25769 8.18943 8.23012 7 8.23012Z" stroke="#3C7EBF" stroke-linejoin="round"/>
                                                                </svg>
                                                                Caxias do Sul
                                                            </li>
                                                            <li class="mb-0-25">
                                                                <svg class="me-0-50" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7 1C4.23935 1 2 3.26405 2 6.05514C2 10.5313 7 15 7 15C7 15 12 10.5313 12 6.05514C12 3.26405 9.76065 1 7 1ZM7 8.23012C5.81057 8.23012 4.84875 7.25769 4.84875 6.05514C4.84875 4.8526 5.81057 3.88017 7 3.88017C8.18943 3.88017 9.15125 4.8526 9.15125 6.05514C9.15125 7.25769 8.18943 8.23012 7 8.23012Z" stroke="#3C7EBF" stroke-linejoin="round"/>
                                                                </svg>
                                                                Rio Branco
                                                            </li>
                                                            <li class="mb-0-25">
                                                                <svg class="me-0-50" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M2.40001 2V5.46457M2.40001 5.46457V6.76378M2.40001 5.46457C2.40001 4.74703 3.02681 4.16535 3.80001 4.16535H6.29081C7.01893 4.16535 7.68292 4.58175 8.00001 5.2372V5.2372M2.40001 6.76378H1.93335C1.41788 6.76378 1.00001 7.15156 1.00001 7.62992L1 9.9685C1 10.4469 1.41787 10.8346 1.93333 10.8346H14.0667C14.5821 10.8346 15 10.4469 15 9.9685L15 7.62992C15 7.15156 14.5821 6.76378 14.0667 6.76378H13.6M2.40001 6.76378H8.00001M8.00001 6.76378V5.2372M8.00001 6.76378H13.6M8.00001 5.2372V5.2372C8.31709 4.58175 8.98108 4.16535 9.70921 4.16535H12.2C12.9732 4.16535 13.6 4.74703 13.6 5.46457M13.6 6.76378V5.46457M13.6 5.46457V2M2.4 13V10.8346M13.6 13V10.8346" stroke="#3C7EBF" stroke-linecap="round"/>
                                                                </svg>
                                                                2
                                                            </li>
                                                            <li class="mb-0-25">
                                                                <svg class="me-0-50" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3 14.978V3.94099C3 2.32179 4.38639 1 6.08472 1C7.78306 1 9.16945 2.32179 9.16945 3.94099M6.83569 8.98584V14.978M9.16945 8.98584V11.9819M9.16945 13.1164V15M11.5032 8.98584V13.4138M12 7.02518H6.3389L6.67394 5.80252C6.97433 4.72305 8.00257 3.97404 9.16945 3.97404C10.3363 3.97404 11.3646 4.72305 11.665 5.80252L12 7.02518Z" stroke="#3C7EBF" stroke-miterlimit="10" stroke-linejoin="round"/>
                                                                </svg>
                                                                2
                                                            </li>
                                                            <li class="mb-0-25">
                                                                <svg class="me-0-50" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4 8.5H6M12 8.5H10M4 11.5H3C1.89543 11.5 1 10.6046 1 9.5V8.32843C1 7.79799 1.21071 7.28929 1.58579 6.91421L2.70972 5.79028C2.90124 5.59876 3.05187 5.37033 3.15246 5.11885L3.84754 3.38115C3.94813 3.12967 4.09876 2.90124 4.29028 2.70972L4.41421 2.58579C4.78929 2.21071 5.29799 2 5.82843 2H10.1716C10.702 2 11.2107 2.21071 11.5858 2.58579L11.7097 2.70972C11.9012 2.90124 12.0519 3.12967 12.1525 3.38115L12.8475 5.11885C12.9481 5.37033 13.0988 5.59876 13.2903 5.79028L14.4142 6.91421C14.7893 7.28929 15 7.79799 15 8.32843V9.5C15 10.6046 14.1046 11.5 13 11.5H12M4 11.5V12.5C4 12.7761 4.22386 13 4.5 13V13C4.77614 13 5 12.7761 5 12.5V11.5M4 11.5H5M5 11.5H11M12 11.5V12.5C12 12.7761 11.7761 13 11.5 13V13C11.2239 13 11 12.7761 11 12.5V11.5M12 11.5H11" stroke="#3C7EBF" stroke-linecap="round"/>
                                                                </svg>
                                                                2 e 1
                                                            </li>
                                                            <li class="mb-0-25">
                                                                <svg class="me-0-50" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M13 1H1V13H13V1Z" stroke="#3C7EBF" stroke-miterlimit="10" stroke-linejoin="round" stroke-dasharray="4 2"/>
                                                                </svg>
                                                                59 e 56m²
                                                            </li>
                                                        </ul>
                                                        <button class="btn-header btn btn-warning-custom rounded-36 text-white p-700 p-16 mt-2 mb-2 mb-sm-0">
                                                            <svg class="me-0-50" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="8" cy="8.5" r="7.25" stroke="white" stroke-width="1.5"/>
                                                                <path d="M8 5.07153V11.9287M4.57143 8.5001H11.4286" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                            </svg>
                                                            Detalhes
                                                        </button>
                                                    </div>
                                                    <div class="col-lg-6 ps-0 pe-lg-3 p-0">
                                                        <div class="ratio ratio-6x9 h-100 w-100">
                                                            <img class="w-100 h-100 object-fit-cover rounded-36-right" src="<?= asset('images/banners/empreendimentos.png') ?>" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="swiper-pagination color-warning"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="tab-pane fade show active w-100" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="swiper empreendimentos-swiper">
                                    <div class="swiper-wrapper mb-4 p-sm-1">
                                        <?php foreach(range(0,9) as $i) : ?>
                                            <div class="swiper-slide flex-column d-flex col-lg-6 col-12 pe-md-3 pe-lg-0">
                                                <div class="row">
                                                    <div class="col-lg-6 bg-white rounded-36-left p-s p-sm-4 p-md-2 text-center text-sm-start">
                                                        <div class="d-xl-flex d-lg-block gap-1 m-auto pt-2 pt-sm-0 position-lg-absolute">
                                                            <button class="mb-lg-0-50 mb-xl-0 btn rounded-36 py-0-25 px-0-50 p-12 p-700 border-2 btn-outline-warning">ENTREGA EM JUNHO</button>
                                                            <button class=" btn rounded-36 py-0-25 px-0-50 p-12 p-700 border-2 btn-outline-warning">ÚLTIMAS UNIDADES</button>
                                                        </div>
                                                        <h2 class="p-700 h2-32 text-dark mt-2">
                                                        HEHEHEE
                                                        </h2>
                                                        <ul class="m-0 list-unstyled text-cinza-texto mt-3">
                                                            <li class="mb-0-25">
                                                                <svg class="me-0-50" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7 1C4.23935 1 2 3.26405 2 6.05514C2 10.5313 7 15 7 15C7 15 12 10.5313 12 6.05514C12 3.26405 9.76065 1 7 1ZM7 8.23012C5.81057 8.23012 4.84875 7.25769 4.84875 6.05514C4.84875 4.8526 5.81057 3.88017 7 3.88017C8.18943 3.88017 9.15125 4.8526 9.15125 6.05514C9.15125 7.25769 8.18943 8.23012 7 8.23012Z" stroke="#3C7EBF" stroke-linejoin="round"/>
                                                                </svg>
                                                                Caxias do Sul
                                                            </li>
                                                            <li class="mb-0-25">
                                                                <svg class="me-0-50" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7 1C4.23935 1 2 3.26405 2 6.05514C2 10.5313 7 15 7 15C7 15 12 10.5313 12 6.05514C12 3.26405 9.76065 1 7 1ZM7 8.23012C5.81057 8.23012 4.84875 7.25769 4.84875 6.05514C4.84875 4.8526 5.81057 3.88017 7 3.88017C8.18943 3.88017 9.15125 4.8526 9.15125 6.05514C9.15125 7.25769 8.18943 8.23012 7 8.23012Z" stroke="#3C7EBF" stroke-linejoin="round"/>
                                                                </svg>
                                                                Rio Branco
                                                            </li>
                                                            <li class="mb-0-25">
                                                                <svg class="me-0-50" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M2.40001 2V5.46457M2.40001 5.46457V6.76378M2.40001 5.46457C2.40001 4.74703 3.02681 4.16535 3.80001 4.16535H6.29081C7.01893 4.16535 7.68292 4.58175 8.00001 5.2372V5.2372M2.40001 6.76378H1.93335C1.41788 6.76378 1.00001 7.15156 1.00001 7.62992L1 9.9685C1 10.4469 1.41787 10.8346 1.93333 10.8346H14.0667C14.5821 10.8346 15 10.4469 15 9.9685L15 7.62992C15 7.15156 14.5821 6.76378 14.0667 6.76378H13.6M2.40001 6.76378H8.00001M8.00001 6.76378V5.2372M8.00001 6.76378H13.6M8.00001 5.2372V5.2372C8.31709 4.58175 8.98108 4.16535 9.70921 4.16535H12.2C12.9732 4.16535 13.6 4.74703 13.6 5.46457M13.6 6.76378V5.46457M13.6 5.46457V2M2.4 13V10.8346M13.6 13V10.8346" stroke="#3C7EBF" stroke-linecap="round"/>
                                                                </svg>
                                                                2
                                                            </li>
                                                            <li class="mb-0-25">
                                                                <svg class="me-0-50" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M3 14.978V3.94099C3 2.32179 4.38639 1 6.08472 1C7.78306 1 9.16945 2.32179 9.16945 3.94099M6.83569 8.98584V14.978M9.16945 8.98584V11.9819M9.16945 13.1164V15M11.5032 8.98584V13.4138M12 7.02518H6.3389L6.67394 5.80252C6.97433 4.72305 8.00257 3.97404 9.16945 3.97404C10.3363 3.97404 11.3646 4.72305 11.665 5.80252L12 7.02518Z" stroke="#3C7EBF" stroke-miterlimit="10" stroke-linejoin="round"/>
                                                                </svg>
                                                                2
                                                            </li>
                                                            <li class="mb-0-25">
                                                                <svg class="me-0-50" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4 8.5H6M12 8.5H10M4 11.5H3C1.89543 11.5 1 10.6046 1 9.5V8.32843C1 7.79799 1.21071 7.28929 1.58579 6.91421L2.70972 5.79028C2.90124 5.59876 3.05187 5.37033 3.15246 5.11885L3.84754 3.38115C3.94813 3.12967 4.09876 2.90124 4.29028 2.70972L4.41421 2.58579C4.78929 2.21071 5.29799 2 5.82843 2H10.1716C10.702 2 11.2107 2.21071 11.5858 2.58579L11.7097 2.70972C11.9012 2.90124 12.0519 3.12967 12.1525 3.38115L12.8475 5.11885C12.9481 5.37033 13.0988 5.59876 13.2903 5.79028L14.4142 6.91421C14.7893 7.28929 15 7.79799 15 8.32843V9.5C15 10.6046 14.1046 11.5 13 11.5H12M4 11.5V12.5C4 12.7761 4.22386 13 4.5 13V13C4.77614 13 5 12.7761 5 12.5V11.5M4 11.5H5M5 11.5H11M12 11.5V12.5C12 12.7761 11.7761 13 11.5 13V13C11.2239 13 11 12.7761 11 12.5V11.5M12 11.5H11" stroke="#3C7EBF" stroke-linecap="round"/>
                                                                </svg>
                                                                2 e 1
                                                            </li>
                                                            <li class="mb-0-25">
                                                                <svg class="me-0-50" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M13 1H1V13H13V1Z" stroke="#3C7EBF" stroke-miterlimit="10" stroke-linejoin="round" stroke-dasharray="4 2"/>
                                                                </svg>
                                                                59 e 56m²
                                                            </li>
                                                        </ul>
                                                        <button class="btn-header btn btn-warning-custom rounded-36 text-white p-700 p-16 mt-2 mb-2 mb-sm-0">
                                                            <svg class="me-0-50" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="8" cy="8.5" r="7.25" stroke="white" stroke-width="1.5"/>
                                                                <path d="M8 5.07153V11.9287M4.57143 8.5001H11.4286" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                            </svg>
                                                            Detalhes
                                                        </button>
                                                    </div>
                                                    <div class="col-lg-6 ps-0 pe-lg-3 p-0">
                                                        <div class="ratio ratio-6x9 h-100 w-100">
                                                            <img class="w-100 h-100 object-fit-cover rounded-36-right" src="<?= asset('images/banners/empreendimentos.png') ?>" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="swiper-pagination color-warning"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="depoimentos padding-top-negativo-section position-relative bg-white mb-4">
        <div class="padding-top-border-section">
            <div class="border-section position-relative z-index-background"></div>
            <div class="container-custom">
                <div class="row">
                    <div class="w-100 text-center border-section-titulo">
                        <p class="p-16 p-400 text-warning">DEPOIMENTOS</p>
                        <h2 class="h2 text-primary">Quem confia</h2>
                    </div>
                    <div class="swiper depoimentos-swiper p-3" data-aos="fade-down">
                        <div class="swiper-wrapper mb-2 mb-md-0">
                            <?php foreach(range(0,9) as $i) : ?>
                                <div class="swiper-slide p-0">
                                    <div class="row">
                                        <div class="col-lg-8 padding-interno bg-white rounded-36-left rounded-36-top d-flex align-items-center flex-column position-relative text-center text-sm-start">
                                        <p class="p-16 p-400">Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500, quando um impressor desconhecido 
                                        pegou uma galera de tipos e os embaralhou para fazer um livro de espécimes de tipos.Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão.</p>
                                        <br><br>
                                        <p class="text-start w-100 p-16 p-700">
                                            Felipe Correa
                                        </p>
                                            <svg class="position-absolute bottom-0 end-0 m-2" width="94" height="77" viewBox="0 0 94 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M94 -3.23355e-06L94 19.2899C94 25.7729 92.945 32.5217 90.835 39.5362C88.6195 46.657 85.4545 53.4589 81.3401 59.942C77.2256 66.5314 72.2671 72.2174 66.4646 77L49.8485 65.3623C54.7015 58.3478 58.4467 51.1208 61.0842 43.6812C63.7217 36.3478 65.0404 28.3768 65.0404 19.7681L65.0404 -5.76528e-06L94 -3.23355e-06ZM44.1515 -7.59144e-06L44.1515 19.2898C44.1515 25.7729 43.0965 32.5217 40.9865 39.5362C38.771 46.657 35.6061 53.4589 31.4916 59.942C27.3771 66.5314 22.4186 72.2174 16.6162 77L3.13336e-06 65.3623C4.85298 58.3478 8.59821 51.1208 11.2357 43.6812C13.8732 36.3478 15.1919 28.3768 15.1919 19.7681L15.1919 -1.01232e-05L44.1515 -7.59144e-06Z" fill="url(#paint0_linear_301_989)"/>
                                                <defs>
                                                <linearGradient id="paint0_linear_301_989" x1="47" y1="77" x2="47" y2="-4.10887e-06" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FF8E2E"/>
                                                <stop offset="1" stop-color="#FFBD2E"/>
                                                </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="col-lg-4 p-0">
                                            <div class="ratio ratio-1x1 w-100 h-100">
                                                <img class="w-100 h-100 object-fit-cover rounded-36-right rounded-36-bottom" src="<?= asset('images/banners/depoimentos.png') ?>" alt="">
                                            </div>
                                        </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination color-warning"></div>
                    <div class="swiper-button-next arrows color-primary end-0 none-lg"></div>
                    <div class="swiper-button-prev arrows color-primary start-0 none-lg"></div>
                </div>
            </div>
        </div>
        <div class="container position-relative">
            <div class="row px-xl-2 px-xxl-1">
                <div class="w-100 text-center mt-4 pt-2">
                    <p class="p-16 p-400 text-warning">ÚLTIMAS NOTÍCIAS</p>
                    <h2 class="h2 text-primary">Blog</h2>
                </div>
                <div class="swiper blog-swiper mt-3" data-aos="fade-left">
                    <div class="swiper-wrapper mb-4">
                        <?php foreach(range(0,9) as $i) : ?>
                            <div class="swiper-slide">
                                    <div class="sombraa"></div>
                                    <div class="ratio ratio-1x1 h-100 w-100">
                                        <img class="w-100 h-100 object-fit-cover rounded-36" src="<?= asset('images/banners/blog.png') ?>" alt="">
                                    </div>
                                    <div class="conteudo mx-3 my-2">
                                    <button class="mb-lg-0-50 mb-xl-0 btn rounded-36 py-0-25 px-0-50 p-12 p-700 border-2 btn-primary text-white" >DICAS</button>
                                    <p class="text-white p-22-l-22 p-700 mt-1">5 dicas para você encontrar o imóvel perfeito!</p>
                                    <p class="text-white p-16-l-16 p-400">O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. [...]</p>
                                    </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination color-white position-absolute"></div>
                    <!--<div class="swiper-button-next arrows"></div>
                    <div class="swiper-button-prev arrows"></div>-->
                </div>
            </div>
        </div>
        <svg class="position-relative bottom-0 w-100 svg-footer" width="1920" height="200" viewBox="0 0 1920 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 70C0 70 228 0 960 0C1692 0 1920 70 1920 70V200C1920 200 1692 200 960 200C228 200 0 200 0 200V70Z" fill="url(#paint0_linear_301_1099)"/>
            <defs>
            <linearGradient id="paint0_linear_301_1099" x1="1.43051e-05" y1="200" x2="960" y2="6.86646e-05" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FF8E2E"/>
            <stop offset="1" stop-color="#FFBD2E"/>
            </linearGradient>
            </defs>
        </svg>
    </section>
    <!--<section class="depoimentos padding-top-negativo-section position-relative bg-white">
        <div class="padding-top-border-section">
            <div class="border-section-blog position-relative z-index-background"></div>
           
        </div>
    </section>-->
    
</main> 