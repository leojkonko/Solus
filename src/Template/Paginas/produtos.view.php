<main id="produto" class="py-3 py-lg-4">
<section class="produtos position-relative py-4">
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center flex-column">
                        <ul class="nav nav-pills d-flex justify-content-center justify-content-lg-start mb-3 w-100 gap-2" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link  rounded-36 text-dark p-400 p-22-l-22 p-fsm-16" id="pills-profile-tab" 
                                data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Todos</button>
                            </li>
                            <li class="nav-item " role="presentation">
                                <button class="nav-link active rounded-36 text-dark p-400 p-22-l-22 p-fsm-16" id="pills-home-tab" 
                                data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Em construção</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-36 text-dark p-400 p-22-l-22 p-fsm-16" id="pills-profile-tab3" 
                                id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Na planta</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-36 text-dark p-400 p-22-l-22 p-fsm-16" id="pills-profile-tab" 
                                id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2" aria-selected="false">Entregues</button>
                            </li>
                        </ul>
                        <div class="tab-content w-100" id="pills-tabContent">
                            <div class="tab-pane fade show active w-100" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <?php foreach(range(0,3) as $i) : ?>    
                                    <div class="row my-2 mx-1 mx-md-0">
                                        <div class="col-lg-8 ps-0 p-0">
                                            <div class="ratio ratio-16x9 h-100 w-100">
                                                <img class="w-100 h-100 object-fit-cover rounded-36-left rounded-36-top" src="<?= asset('images/banners/apto1.png') ?>" alt="">
                                                <div class="conteudo-img d-none d-sm-block">
                                                   <div class="position-absolute bottom-0 m-2">
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-secondary icones">
                                                            <svg class="me-0-50" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7 1C4.23935 1 2 3.26405 2 6.05514C2 10.5313 7 15 7 15C7 15 12 10.5313 12 6.05514C12 3.26405 9.76065 1 7 1ZM7 8.23012C5.81057 8.23012 4.84875 7.25769 4.84875 6.05514C4.84875 4.8526 5.81057 3.88017 7 3.88017C8.18943 3.88017 9.15125 4.8526 9.15125 6.05514C9.15125 7.25769 8.18943 8.23012 7 8.23012Z" stroke="#3C7EBF" stroke-linejoin="round"></path>
                                                            </svg>
                                                            Rio Branco
                                                        </button>
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-secondary icones">
                                                            <svg class="me-0-50" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2.40001 2V5.46457M2.40001 5.46457V6.76378M2.40001 5.46457C2.40001 4.74703 3.02681 4.16535 3.80001 4.16535H6.29081C7.01893 4.16535 7.68292 4.58175 8.00001 5.2372V5.2372M2.40001 6.76378H1.93335C1.41788 6.76378 1.00001 7.15156 1.00001 7.62992L1 9.9685C1 10.4469 1.41787 10.8346 1.93333 10.8346H14.0667C14.5821 10.8346 15 10.4469 15 9.9685L15 7.62992C15 7.15156 14.5821 6.76378 14.0667 6.76378H13.6M2.40001 6.76378H8.00001M8.00001 6.76378V5.2372M8.00001 6.76378H13.6M8.00001 5.2372V5.2372C8.31709 4.58175 8.98108 4.16535 9.70921 4.16535H12.2C12.9732 4.16535 13.6 4.74703 13.6 5.46457M13.6 6.76378V5.46457M13.6 5.46457V2M2.4 13V10.8346M13.6 13V10.8346" stroke="#3C7EBF" stroke-linecap="round"/>
                                                            </svg>
                                                            2
                                                        </button>
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-secondary icones">
                                                            <svg class="me-0-50" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M3 14.978V3.94099C3 2.32179 4.38639 1 6.08472 1C7.78306 1 9.16945 2.32179 9.16945 3.94099M6.83569 8.98584V14.978M9.16945 8.98584V11.9819M9.16945 13.1164V15M11.5032 8.98584V13.4138M12 7.02518H6.3389L6.67394 5.80252C6.97433 4.72305 8.00257 3.97404 9.16945 3.97404C10.3363 3.97404 11.3646 4.72305 11.665 5.80252L12 7.02518Z" stroke="#3C7EBF" stroke-miterlimit="10" stroke-linejoin="round"/>
                                                            </svg>
                                                            2
                                                        </button>
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-secondary icones">
                                                            <svg class="me-0-50" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4 8.5H6M12 8.5H10M4 11.5H3C1.89543 11.5 1 10.6046 1 9.5V8.32843C1 7.79799 1.21071 7.28929 1.58579 6.91421L2.70972 5.79028C2.90124 5.59876 3.05187 5.37033 3.15246 5.11885L3.84754 3.38115C3.94813 3.12967 4.09876 2.90124 4.29028 2.70972L4.41421 2.58579C4.78929 2.21071 5.29799 2 5.82843 2H10.1716C10.702 2 11.2107 2.21071 11.5858 2.58579L11.7097 2.70972C11.9012 2.90124 12.0519 3.12967 12.1525 3.38115L12.8475 5.11885C12.9481 5.37033 13.0988 5.59876 13.2903 5.79028L14.4142 6.91421C14.7893 7.28929 15 7.79799 15 8.32843V9.5C15 10.6046 14.1046 11.5 13 11.5H12M4 11.5V12.5C4 12.7761 4.22386 13 4.5 13V13C4.77614 13 5 12.7761 5 12.5V11.5M4 11.5H5M5 11.5H11M12 11.5V12.5C12 12.7761 11.7761 13 11.5 13V13C11.2239 13 11 12.7761 11 12.5V11.5M12 11.5H11" stroke="#3C7EBF" stroke-linecap="round"/>
                                                            </svg>
                                                            2 e 1
                                                        </button>
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-secondary icones">
                                                            <svg class="me-0-50" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M13 1H1V13H13V1Z" stroke="#3C7EBF" stroke-miterlimit="10" stroke-linejoin="round" stroke-dasharray="4 2"/>
                                                            </svg>
                                                            59 e 56m²
                                                        </button>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 bg-secondary rounded-36-right rounded-36-bottom px-lg-3 px-2 text-center text-sm-start">
                                                <div class="conteudo-img d-block d-sm-none">
                                                   <div class="mt-2">
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-light icones">
                                                            <svg class="me-0-50" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7 1C4.23935 1 2 3.26405 2 6.05514C2 10.5313 7 15 7 15C7 15 12 10.5313 12 6.05514C12 3.26405 9.76065 1 7 1ZM7 8.23012C5.81057 8.23012 4.84875 7.25769 4.84875 6.05514C4.84875 4.8526 5.81057 3.88017 7 3.88017C8.18943 3.88017 9.15125 4.8526 9.15125 6.05514C9.15125 7.25769 8.18943 8.23012 7 8.23012Z" stroke="#3C7EBF" stroke-linejoin="round"></path>
                                                            </svg>
                                                            Rio Branco
                                                        </button>
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-light icones">
                                                            <svg class="me-0-50" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2.40001 2V5.46457M2.40001 5.46457V6.76378M2.40001 5.46457C2.40001 4.74703 3.02681 4.16535 3.80001 4.16535H6.29081C7.01893 4.16535 7.68292 4.58175 8.00001 5.2372V5.2372M2.40001 6.76378H1.93335C1.41788 6.76378 1.00001 7.15156 1.00001 7.62992L1 9.9685C1 10.4469 1.41787 10.8346 1.93333 10.8346H14.0667C14.5821 10.8346 15 10.4469 15 9.9685L15 7.62992C15 7.15156 14.5821 6.76378 14.0667 6.76378H13.6M2.40001 6.76378H8.00001M8.00001 6.76378V5.2372M8.00001 6.76378H13.6M8.00001 5.2372V5.2372C8.31709 4.58175 8.98108 4.16535 9.70921 4.16535H12.2C12.9732 4.16535 13.6 4.74703 13.6 5.46457M13.6 6.76378V5.46457M13.6 5.46457V2M2.4 13V10.8346M13.6 13V10.8346" stroke="#3C7EBF" stroke-linecap="round"/>
                                                            </svg>
                                                            2
                                                        </button>
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-light icones">
                                                            <svg class="me-0-50" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M3 14.978V3.94099C3 2.32179 4.38639 1 6.08472 1C7.78306 1 9.16945 2.32179 9.16945 3.94099M6.83569 8.98584V14.978M9.16945 8.98584V11.9819M9.16945 13.1164V15M11.5032 8.98584V13.4138M12 7.02518H6.3389L6.67394 5.80252C6.97433 4.72305 8.00257 3.97404 9.16945 3.97404C10.3363 3.97404 11.3646 4.72305 11.665 5.80252L12 7.02518Z" stroke="#3C7EBF" stroke-miterlimit="10" stroke-linejoin="round"/>
                                                            </svg>
                                                            2
                                                        </button>
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-light icones">
                                                            <svg class="me-0-50" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4 8.5H6M12 8.5H10M4 11.5H3C1.89543 11.5 1 10.6046 1 9.5V8.32843C1 7.79799 1.21071 7.28929 1.58579 6.91421L2.70972 5.79028C2.90124 5.59876 3.05187 5.37033 3.15246 5.11885L3.84754 3.38115C3.94813 3.12967 4.09876 2.90124 4.29028 2.70972L4.41421 2.58579C4.78929 2.21071 5.29799 2 5.82843 2H10.1716C10.702 2 11.2107 2.21071 11.5858 2.58579L11.7097 2.70972C11.9012 2.90124 12.0519 3.12967 12.1525 3.38115L12.8475 5.11885C12.9481 5.37033 13.0988 5.59876 13.2903 5.79028L14.4142 6.91421C14.7893 7.28929 15 7.79799 15 8.32843V9.5C15 10.6046 14.1046 11.5 13 11.5H12M4 11.5V12.5C4 12.7761 4.22386 13 4.5 13V13C4.77614 13 5 12.7761 5 12.5V11.5M4 11.5H5M5 11.5H11M12 11.5V12.5C12 12.7761 11.7761 13 11.5 13V13C11.2239 13 11 12.7761 11 12.5V11.5M12 11.5H11" stroke="#3C7EBF" stroke-linecap="round"/>
                                                            </svg>
                                                            2 e 1
                                                        </button>
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-light icones">
                                                            <svg class="me-0-50" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M13 1H1V13H13V1Z" stroke="#3C7EBF" stroke-miterlimit="10" stroke-linejoin="round" stroke-dasharray="4 2"/>
                                                            </svg>
                                                            59 e 56m²
                                                        </button>
                                                   </div>
                                                </div>
                                                <div class="d-inline-block  gap-1 mt-3 pt-sm-0">
                                                    <button class="mb-0-50 btn rounded-36 py-0-25 px-0-50 p-12 p-700 border-2 btn-outline-warning">ENTREGA EM JUNHO</button>
                                                    <button class="mb-0-50 btn rounded-36 py-0-25 px-0-50 p-12 p-700 border-2 btn-outline-warning">ÚLTIMAS UNIDADES</button>
                                                </div>
                                            <div class="mt-2">
                                                <h2 class="p-700 h2-32 text-dark mt-2">
                                                Zarah Ian Residenceeeeeeeee
                                                </h2>
                                                <p class="p-16 p-400 mt-2">
                                                Harmonia e Luminosidade, entendemos que a arte de morar bem está nos detalhes, no estilo e no conforto, transformando assim, o seu sonho de ser feliz de, entendemos que a arte de morar bem está nos detalhes, no estilo e no conforto, transformando assim, o seu sonho de ser feliz em alegria cotidiana.
                                                </p>
                                                <a href="<?= url('/produto-detalhe') ?>">
                                                    <button class="btn-header btn btn-warning-custom rounded-36 text-white p-700 p-16 mt-2 mb-3 p-1248">
                                                        Conheça mais
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            
                            <div class="tab-pane fade w-100" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <?php foreach(range(0,3) as $i) : ?>    
                                    <div class="row my-2 mx-1 mx-md-0">
                                        <div class="col-lg-8 ps-0 p-0">
                                            <div class="ratio ratio-16x9 h-100 w-100">
                                                <img class="w-100 h-100 object-fit-cover rounded-36-left rounded-36-top" src="<?= asset('images/banners/apto1.png') ?>" alt="">
                                                <div class="conteudo-img d-none d-sm-block">
                                                   <div class="position-absolute bottom-0 m-2">
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-secondary icones">
                                                            <svg class="me-0-50" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7 1C4.23935 1 2 3.26405 2 6.05514C2 10.5313 7 15 7 15C7 15 12 10.5313 12 6.05514C12 3.26405 9.76065 1 7 1ZM7 8.23012C5.81057 8.23012 4.84875 7.25769 4.84875 6.05514C4.84875 4.8526 5.81057 3.88017 7 3.88017C8.18943 3.88017 9.15125 4.8526 9.15125 6.05514C9.15125 7.25769 8.18943 8.23012 7 8.23012Z" stroke="#3C7EBF" stroke-linejoin="round"></path>
                                                            </svg>
                                                            Rio Branco
                                                        </button>
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-secondary icones">
                                                            <svg class="me-0-50" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2.40001 2V5.46457M2.40001 5.46457V6.76378M2.40001 5.46457C2.40001 4.74703 3.02681 4.16535 3.80001 4.16535H6.29081C7.01893 4.16535 7.68292 4.58175 8.00001 5.2372V5.2372M2.40001 6.76378H1.93335C1.41788 6.76378 1.00001 7.15156 1.00001 7.62992L1 9.9685C1 10.4469 1.41787 10.8346 1.93333 10.8346H14.0667C14.5821 10.8346 15 10.4469 15 9.9685L15 7.62992C15 7.15156 14.5821 6.76378 14.0667 6.76378H13.6M2.40001 6.76378H8.00001M8.00001 6.76378V5.2372M8.00001 6.76378H13.6M8.00001 5.2372V5.2372C8.31709 4.58175 8.98108 4.16535 9.70921 4.16535H12.2C12.9732 4.16535 13.6 4.74703 13.6 5.46457M13.6 6.76378V5.46457M13.6 5.46457V2M2.4 13V10.8346M13.6 13V10.8346" stroke="#3C7EBF" stroke-linecap="round"/>
                                                            </svg>
                                                            2
                                                        </button>
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-secondary icones">
                                                            <svg class="me-0-50" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M3 14.978V3.94099C3 2.32179 4.38639 1 6.08472 1C7.78306 1 9.16945 2.32179 9.16945 3.94099M6.83569 8.98584V14.978M9.16945 8.98584V11.9819M9.16945 13.1164V15M11.5032 8.98584V13.4138M12 7.02518H6.3389L6.67394 5.80252C6.97433 4.72305 8.00257 3.97404 9.16945 3.97404C10.3363 3.97404 11.3646 4.72305 11.665 5.80252L12 7.02518Z" stroke="#3C7EBF" stroke-miterlimit="10" stroke-linejoin="round"/>
                                                            </svg>
                                                            2
                                                        </button>
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-secondary icones">
                                                            <svg class="me-0-50" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4 8.5H6M12 8.5H10M4 11.5H3C1.89543 11.5 1 10.6046 1 9.5V8.32843C1 7.79799 1.21071 7.28929 1.58579 6.91421L2.70972 5.79028C2.90124 5.59876 3.05187 5.37033 3.15246 5.11885L3.84754 3.38115C3.94813 3.12967 4.09876 2.90124 4.29028 2.70972L4.41421 2.58579C4.78929 2.21071 5.29799 2 5.82843 2H10.1716C10.702 2 11.2107 2.21071 11.5858 2.58579L11.7097 2.70972C11.9012 2.90124 12.0519 3.12967 12.1525 3.38115L12.8475 5.11885C12.9481 5.37033 13.0988 5.59876 13.2903 5.79028L14.4142 6.91421C14.7893 7.28929 15 7.79799 15 8.32843V9.5C15 10.6046 14.1046 11.5 13 11.5H12M4 11.5V12.5C4 12.7761 4.22386 13 4.5 13V13C4.77614 13 5 12.7761 5 12.5V11.5M4 11.5H5M5 11.5H11M12 11.5V12.5C12 12.7761 11.7761 13 11.5 13V13C11.2239 13 11 12.7761 11 12.5V11.5M12 11.5H11" stroke="#3C7EBF" stroke-linecap="round"/>
                                                            </svg>
                                                            2 e 1
                                                        </button>
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-secondary icones">
                                                            <svg class="me-0-50" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M13 1H1V13H13V1Z" stroke="#3C7EBF" stroke-miterlimit="10" stroke-linejoin="round" stroke-dasharray="4 2"/>
                                                            </svg>
                                                            59 e 56m²
                                                        </button>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 bg-secondary rounded-36-right rounded-36-bottom px-lg-3 px-2 text-center text-sm-start">
                                                <div class="conteudo-img d-block d-sm-none">
                                                   <div class="mt-2">
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-light icones">
                                                            <svg class="me-0-50" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7 1C4.23935 1 2 3.26405 2 6.05514C2 10.5313 7 15 7 15C7 15 12 10.5313 12 6.05514C12 3.26405 9.76065 1 7 1ZM7 8.23012C5.81057 8.23012 4.84875 7.25769 4.84875 6.05514C4.84875 4.8526 5.81057 3.88017 7 3.88017C8.18943 3.88017 9.15125 4.8526 9.15125 6.05514C9.15125 7.25769 8.18943 8.23012 7 8.23012Z" stroke="#3C7EBF" stroke-linejoin="round"></path>
                                                            </svg>
                                                            Rio Branco
                                                        </button>
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-light icones">
                                                            <svg class="me-0-50" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2.40001 2V5.46457M2.40001 5.46457V6.76378M2.40001 5.46457C2.40001 4.74703 3.02681 4.16535 3.80001 4.16535H6.29081C7.01893 4.16535 7.68292 4.58175 8.00001 5.2372V5.2372M2.40001 6.76378H1.93335C1.41788 6.76378 1.00001 7.15156 1.00001 7.62992L1 9.9685C1 10.4469 1.41787 10.8346 1.93333 10.8346H14.0667C14.5821 10.8346 15 10.4469 15 9.9685L15 7.62992C15 7.15156 14.5821 6.76378 14.0667 6.76378H13.6M2.40001 6.76378H8.00001M8.00001 6.76378V5.2372M8.00001 6.76378H13.6M8.00001 5.2372V5.2372C8.31709 4.58175 8.98108 4.16535 9.70921 4.16535H12.2C12.9732 4.16535 13.6 4.74703 13.6 5.46457M13.6 6.76378V5.46457M13.6 5.46457V2M2.4 13V10.8346M13.6 13V10.8346" stroke="#3C7EBF" stroke-linecap="round"/>
                                                            </svg>
                                                            2
                                                        </button>
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-light icones">
                                                            <svg class="me-0-50" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M3 14.978V3.94099C3 2.32179 4.38639 1 6.08472 1C7.78306 1 9.16945 2.32179 9.16945 3.94099M6.83569 8.98584V14.978M9.16945 8.98584V11.9819M9.16945 13.1164V15M11.5032 8.98584V13.4138M12 7.02518H6.3389L6.67394 5.80252C6.97433 4.72305 8.00257 3.97404 9.16945 3.97404C10.3363 3.97404 11.3646 4.72305 11.665 5.80252L12 7.02518Z" stroke="#3C7EBF" stroke-miterlimit="10" stroke-linejoin="round"/>
                                                            </svg>
                                                            2
                                                        </button>
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-light icones">
                                                            <svg class="me-0-50" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4 8.5H6M12 8.5H10M4 11.5H3C1.89543 11.5 1 10.6046 1 9.5V8.32843C1 7.79799 1.21071 7.28929 1.58579 6.91421L2.70972 5.79028C2.90124 5.59876 3.05187 5.37033 3.15246 5.11885L3.84754 3.38115C3.94813 3.12967 4.09876 2.90124 4.29028 2.70972L4.41421 2.58579C4.78929 2.21071 5.29799 2 5.82843 2H10.1716C10.702 2 11.2107 2.21071 11.5858 2.58579L11.7097 2.70972C11.9012 2.90124 12.0519 3.12967 12.1525 3.38115L12.8475 5.11885C12.9481 5.37033 13.0988 5.59876 13.2903 5.79028L14.4142 6.91421C14.7893 7.28929 15 7.79799 15 8.32843V9.5C15 10.6046 14.1046 11.5 13 11.5H12M4 11.5V12.5C4 12.7761 4.22386 13 4.5 13V13C4.77614 13 5 12.7761 5 12.5V11.5M4 11.5H5M5 11.5H11M12 11.5V12.5C12 12.7761 11.7761 13 11.5 13V13C11.2239 13 11 12.7761 11 12.5V11.5M12 11.5H11" stroke="#3C7EBF" stroke-linecap="round"/>
                                                            </svg>
                                                            2 e 1
                                                        </button>
                                                        <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-light icones">
                                                            <svg class="me-0-50" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M13 1H1V13H13V1Z" stroke="#3C7EBF" stroke-miterlimit="10" stroke-linejoin="round" stroke-dasharray="4 2"/>
                                                            </svg>
                                                            59 e 56m²
                                                        </button>
                                                   </div>
                                                </div>
                                                <div class="d-inline-block  gap-1 mt-3 pt-sm-0">
                                                    <button class="mb-0-50 btn rounded-36 py-0-25 px-0-50 p-12 p-700 border-2 btn-outline-warning">ENTREGA EM JUNHO</button>
                                                    <button class="mb-0-50 btn rounded-36 py-0-25 px-0-50 p-12 p-700 border-2 btn-outline-warning">ÚLTIMAS UNIDADES</button>
                                                </div>
                                            <div class="mt-2">
                                                <h2 class="p-700 h2-32 text-dark mt-2">
                                                Teste
                                                </h2>
                                                <p class="p-16 p-400 mt-2">
                                                Harmonia e Luminosidade, entendemos que a arte de morar bem está nos detalhes, no estilo e no conforto, transformando assim, o seu sonho de ser feliz de, entendemos que a arte de morar bem está nos detalhes, no estilo e no conforto, transformando assim, o seu sonho de ser feliz em alegria cotidiana.
                                                </p>
                                                <a href="<?= url('/produto-detalhe') ?>">
                                                    <button class="btn-header btn btn-warning-custom rounded-36 text-white p-700 p-16 mt-2 mb-3">
                                                        Conheça mais
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                            <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2">..asda.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>