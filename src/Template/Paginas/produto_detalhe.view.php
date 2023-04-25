<main id="produto" class="detalhe pt-3">
    <section class="imovel">
        <div class="container"> 
            <div class="row my-2 mx-1 mx-md-0">
                <div class="col-lg-8 ps-0 p-0">
                    <div class="swiper h-100 detalhes-swiper" data-aos="flip-left">
                        <div class="swiper-wrapper">
                            <?php foreach(range(0,5) as $i) : ?>
                                <div class="swiper-slide flex-column d-flex  pe-md-3, pe-lg-0">
                                    <div class="ratio ratio-16x9 h-100 w-100">
                                        <img class="w-100 h-100 object-fit-cover rounded-36-left rounded-36-top" src="<?= asset('images/banners/apto1.png') ?>" alt="">
                                            <div class="conteudo-img">
                                                <div class="position-absolute bottom-0 m-2">
                                                    <button class="me-0-50 mt-0-50 rounded-36 text-dark p-400 btn btn-secondary icones">
                                                    1 de 6
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                </div>    
                            <!--<div class="swiper-pagination color-warning"></div>-->
                            <div class="swiper-button-next arrows"></div>
                            <div class="swiper-button-prev arrows"></div>
                        </div>
                    </div>
                <div class="col-lg-4 bg-secondary rounded-36-right rounded-36-bottom px-lg-3 px-2 text-center text-sm-start">
                        <div class="d-inline-block  gap-1 mt-3 pt-sm-0">
                            <button class="mb-0-50 btn rounded-36 py-0-25 px-0-50 p-12 p-700 border-2 btn-outline-warning">ENTREGA EM JUNHO</button>
                            <button class="mb-0-50 btn rounded-36 py-0-25 px-0-50 p-12 p-700 border-2 btn-outline-warning">ÚLTIMAS UNIDADES</button>
                        </div>
                    <div class="mt-2">
                        <h2 class="p-700 h2-32 text-dark mt-2">
                        Zarah Ian Residence
                        </h2>
                        <p class="p-16 p-400 mt-2">
                        Harmonia e Luminosidade, entendemos que a arte de morar bem está nos detalhes, no estilo e no conforto, transformando assim, o seu sonho de ser feliz de, entendemos que a arte de morar bem está nos detalhes, no estilo e no conforto, transformando assim, o seu sonho de ser feliz em alegria cotidiana.
                        </p>
                        <a href="<?= url('/produto-detalhe') ?>">
                            <button class="btn-header btn btn-warning-custom rounded-36 text-white p-700 p-16 mt-2 mb-3 p-1248">
                            Tenho interesse
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="personalizar my-4" data-aos="fade-up-left">
        <div class="container">
            <div class="row p-1">
                <div class="col-lg-7 bg-secondary d-flex align-items-center flex-column p-lg-4 p-2 rounded-36-left rounded-36-top">
                    <div>
                        <h2 class="p-22-l-22 p-700 text-center text-lg-start text-primary mt-1 mt-lg-0">Imóvel do seu jeito</h2>
                        <p class="p-16 p-400 mt-2 text-center text-lg-start">
                        Com a Solus, personalizações são 100% possíveis. Desde modificações na estrutura, até personalizações internas e entrega de imóvel já mobiliado. 
                        <span class="p-700">
                        Vamos conversar sobre o seu desejo e realizar esse sonho juntos!
                        </span></p>
                        <div class="text-center text-lg-start">
                            <a href="#personalizar" onclick="alterarInput()">
                                <button class="btn-header btn btn-warning-custom rounded-36 text-white p-700 p-16 mt-2">
                                    Personalizar
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 p-0">
                    <div class="ratio ratio-16x9 h-100 w-100">
                        <img class="w-100 h-100 object-fit-cover rounded-36-right rounded-36-bottom" src="<?= asset('images/banners/produto-detalhe.png') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="descricao my-4" data-aos="fade-down-right">
        <div class="container">
            <h2 class="p-22-l-22 p-700 text-primary w-100 text-lg-start text-center">Descrição</h2>
            <p class="p-400 p-16 mt-2 px-1 text-lg-start text-center">
                O projeto idealizado pela Solus Incorporadora, foi desenvolvido de acordo com os anseios e necessidades do cliente. Pensado em cada detalhe, 
                o Residencial Aventine possui aproveitamento inteligente dos espaços proporcionando o bem-estar que você deseja em todos os ambientes, seja no seu apartamento ou na área de lazer.
            </p>
            <h2 class="p-22-l-22 p-700 text-primary w-100 text-lg-start text-center mt-4">Características</h2>
            <div class="d-flex mt-2">
                <ul class="p-400 p-16 col-lg-6 ">
                    <li>3 dormitórios com 1 ou 3 suítes</li>
                    <li>2 apartamentos por andar</li>
                    <li>Ótima infraestrutura</li>
                    <li>Projeto moderno de alta qualidade</li>
                    <li>Aquisição simplificada</li>
                    <li>Excelente localização</li>
                    <li>Pensado para o seu conforto</li>
                    <li>Janela estrategicamente posicionadas</li>
                </ul>
                <ul class="col-lg-6 p-400 p-16 ms-1 ms-sm-2">
                    <li>Espaço</li>
                    <li>Privacidade</li>
                    <li>Qualidade</li>
                    <li>Modernidade</li>
                    <li>Valorização</li>
                    <li>Localização</li>
                    <li>Otimização</li>
                    <li>Luminosidade</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="my-4" data-aos="fade-up-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 bg-secondary d-flex align-items-center flex-column p-lg-4 p-2 rounded-36-left rounded-36-top">
                    <h2 class="p-22-l-22 p-700 text-primary w-100 text-lg-start text-center mt-1 mt-lg-0">Onde você vai morar?</h2>
                    <p class="p-16 p-400 mt-2 text-lg-start text-center">
                    O bairro é um lugar tranquilo e acolhedor, onde as pessoas se conhecem e se ajudam. Nele, é possível encontrar ruas arborizadas, praças bem cuidadas e 
                    diversas opções de lazer para toda a família. Além disso, é um bairro extremamente seguro, com patrulhamento constante da polícia e câmeras de segurança em todas as ruas. 
                    As escolas são de excelente qualidade e há um hospital moderno e bem equipado para atender às necessidades de saúde da comunidade. Se busca um lugar para viver com qualidade de vida e
                    segurança, este bairro é a escolha certa!
                    </p>
                </div>
                <div class="col-lg-3 p-0">
                <iframe class="rounded-36-right rounded-36-bottom" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3484.3792685426934!2d-51.19463441164262!3d-29.15349392705367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951ea2cff5f2e973%3A0xc4e4e9080a947950!2sSolus%20Incorporadora%20Ltda!5e0!3m2!1spt-BR!2sbr!4v1682346139196!5m2!1spt-BR!2sbr" 
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="parceiros my-4" data-aos="fade-down">
        <div class="container position-relative">
            <div class="w-100 text-center mt-2">
                <p class="p-16 p-400 text-warning">PARCEIROS</p>
                <h2 class="h2 text-primary">Imobilárias Parceiras</h2>
            </div>
            <div class="swiper parceiros-swiper mt-4">
                <div class="swiper-wrapper mb-4">
                    <?php foreach(range(0,9) as $i) : ?>
                        <div class="swiper-slide p-1">
                            <div class="ratio ratio-33x9">
                                <img class="w-100 h-100 object-fit-cover" src="<?= asset('images/banners/parceiros.png') ?>" alt="">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination color-warning block-lg"></div>
                <div class="swiper-button-next arrows color-primary none-lg"></div>
                <div class="swiper-button-prev arrows color-primary none-lg"></div>
            </div>
        </div>
    </section>
    <section class="form position-relative z-index-3" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 bg-white m-lg-auto d-flex flex-column align-items-center justify-content-center py-lg-4 px-lg-4 p-2 rounded-36 shadow">
                    <h2 class="h2 text-primary">Entre em contato</h2>
                    <p class="p-16 p-400 ">
                    Preencha o formulário e a nossa equipe vai te chamar o quanto antes!
                    </p>
                    <form action="" class="w-100 px-0" id="personalizar">
                        <div class="d-flex mt-1 px-2 px-lg-0">
                            <p class="p-16 p-400 text-center w-100">
                            <input type="checkbox" id="checkbox-detalhe" class="me-1"/>
                            <label class="label" for="checkbox-detalhe"></label>
                            Li e estou ciente da <span class="border-bottom p-700">Política de Privacidade</span> da Solus Incorporadora.
                            </p>
                        </div>
                        <div class="my-2">
                            <input type="text" class="input-group p-16 p-400" placeholder="Nome completo*">
                            <div class="d-lg-flex gap-1">
                                <input type="text" class="input-group mt-1 p-16 p-400 mask-telefone" placeholder="Telefone*">
                                <input type="email" class="input-group mt-1 p-16 p-400" placeholder="Email*">
                            </div>
                            <textarea name="" id="" cols="30" rows="10" class="input-group mt-1 p-16 p-400" placeholder="Mensagem*"></textarea>
                        </div>
                        <div class="d-flex mt-1 px-2 px-lg-0">
                            <p class="p-16 p-400 text-center w-100">
                            <input type="checkbox" id="checkbox-politica" class="me-1 checkbox"/>
                            Li e estou ciente da <span class="border-bottom p-700">Política de Privacidade</span> da Solus Incorporadora.
                            </p>
                        </div>
                    </form>
                    <button class="btn-header btn btn-warning-custom rounded-36 text-white p-700 p-16 mt-2">
                            Enviar formulário
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="mais-empreendimentos empreendimentos position-relative bg-secondary " data-aos="fade-down">
        <div class="padding-top-border-section">
            <div class="border-section position-relative z-index-background"></div>
            <div class="container">
                <div class="row">
                    <div class="w-100 text-center border-section-titulo">
                        <p class="p-16 p-400 text-warning">VEJA MAIS</p>
                        <h2 class="h2 text-primary">Mais empreendimentos</h2>
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center flex-column">
                        <div class="tab-content w-100" id="pills-tabContent">
                            <div class="tab-pane fade show active w-100" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="swiper empreendimentos-swiper">
                                    <div class="swiper-wrapper mb-4 p-sm-1">
                                        <?php foreach(range(0,9) as $i) : ?>
                                            <div class="swiper-slide p-1 p-sm-0 flex-column d-flex col-lg-6 col-12 pe-md-3 pe-lg-0">
                                                <div class="row">
                                                    <div class="col-lg-6 bg-white rounded-36-left rounded-36-top p-sm-4 p-md-2 text-center text-sm-start">
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
                                                            <img class="w-100 h-100 object-fit-cover rounded-36-right rounded-36-bottom" src="<?= asset('images/banners/empreendimentos.png') ?>" alt="">
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
        <svg class="position-absolute bottom-0" width="867" height="637" viewBox="0 0 867 637" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M705.38 162.167C598.925 55.4303 472.023 2 320.954 2H-78.4672C-229.908 2 -357.554 55.0593 -464.38 162.167C-570.835 268.904 -624 395.678 -624 546.445V946.555C-624 1097.32 -570.835 1224.1 -464.38 1330.83C-357.926 1437.57 -230.899 1491 -79.9543 1491H319.467C470.907 1491 598.554 1437.94 705.38 1330.83C811.958 1224.1 865 1097.32 865 946.555V546.445C865.124 395.678 811.958 268.904 705.38 162.167ZM575.875 946.555C575.875 1016.06 549.85 1076.79 500.65 1125.89C451.079 1175.37 389.61 1200.97 319.591 1200.97H-79.9543C-149.23 1200.97 -209.336 1174.62 -258.411 1126.14C-308.107 1077.16 -334.875 1016.43 -334.875 946.555V546.445C-334.875 476.936 -308.85 416.209 -259.65 367.107C-210.079 317.635 -148.611 292.033 -78.5911 292.033H320.83C390.106 292.033 450.211 318.377 499.287 366.86C548.982 415.838 575.751 476.565 575.751 546.445V746.562L575.875 946.555Z" stroke="black" stroke-opacity="0.15" stroke-width="3"/>
        </svg>
    </section>
    <svg class="position- bottom-0" width="1920" height="28" viewBox="0 0 1920 28" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="1920" height="28" transform="matrix(1 0 0 -1 0 28)" fill="url(#paint0_linear_314_465)"/>
        <defs>
        <linearGradient id="paint0_linear_314_465" x1="1920" y1="14.0009" x2="-8.94267e-06" y2="13.9997" gradientUnits="userSpaceOnUse">
        <stop stop-color="#FFBD2E"/>
        <stop offset="1" stop-color="#FF8E2E"/>
        </linearGradient>
        </defs>
    </svg>
</main>
