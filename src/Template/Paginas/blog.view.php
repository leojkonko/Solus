<main id="blog" class="py-3 py-lg-4">
    <section class="blog">
        <div class="container">
            <div class="row">
            <div class="col-12 text-center text-xl-start d-xl-flex justify-content-start align-items-center gap-4 my-2 filtros">
                <button class="rounded-36 text-white p-700 p-22-l-22 p-fsm-16 mx-1 mx-xl-0 my-1 my-xl-0 active">Todos</button>
                <button class="rounded-36 text-white p-700 p-22-l-22 p-fsm-16 mx-1 mx-xl-0 my-1 my-xl-0">Dicas</button>
                <button class="rounded-36 text-white p-700 p-22-l-22 p-fsm-16 mx-1 mx-xl-0 my-1 my-xl-0">Curiosidades</button>
                <button class="rounded-36 text-white p-700 p-22-l-22 p-fsm-16 mx-1 mx-xl-0 my-1 my-xl-0">Informativos</button>
            </div>
                <?php foreach(range(0,9) as $i) : ?>
                    <div class="col-lg-4 col-6  position-relative my-2 card">
                        <a href="<?= url('/blog-detalhe') ?>">
                            <div class="sombraa"></div>
                            <div class="ratio ratio-1x1 h-100 w-100">
                                <img class="w-100 h-100 object-fit-cover rounded-36" src="<?= asset('images/banners/blog.png') ?>" alt="">
                            </div>
                            <div class="conteudo mx-lg-3 my-lg-2 p-1 p-lg-0">
                                <button class="mb-lg-0-50 mb-xl-0 btn rounded-36 py-0-25 px-0-50 p-12 p-700 border-2 btn-primary text-white" >DICAS</button>
                                <p class="text-white p-22-l-22 p-700 mt-1">5 dicas para você encontrar o imóvel perfeito!</p>
                                <p class="text-white p-16-l-16 p-400 d-none d-sm-block">O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão.</p>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>