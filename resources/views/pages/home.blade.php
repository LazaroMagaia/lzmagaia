@include("template.header")


<div class="header">

    @include("template.navbar")
    
    <div class="home_page">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="desc">
                        <h1>Olá! eu sou <br> <span>Lázaro Lourenço Magaia</span></h1>
                        <p>Sou um densevolvedor com 2 anos de expericiência e com conhecimentos sólidos em web e app, uso as mais actualizadas linguagens de programação</p>
                        <div style="margin-top: 3rem">
                            <a href="/contacto" class="btn-desc">Contactar</a>
                        </div>    
                    </div>
                </div><!--col-->
                <div class="col-md-6">
                    <div class="best-deal d-flex justify-content-center align-items-center">
                        <img src="./images/bestdeal.png" alt="">
                        <p>Do melhor para o melhor</p>
                    </div>
                    <div class="title-home-img">
                        <img src="/images/woman.png">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!--header-->

<div class="home-content">
    <div class="worked-with container">
        <div class="d-flex justify-content-center flex-wrap">
            <i class="fa-brands fa-php"></i>
            <i class="fa-brands fa-laravel"></i>
            <i class="fa-brands fa-node-js"></i>
            <i class="fa-brands fa-js"></i>
            <i class="fa-brands fa-wordpress"></i>
            <i class="fa-brands fa-vuejs"></i>
            <i class="fa-brands fa-react"></i>
            <i class="fa-brands fa-github"></i>
        </div>
    </div>

    <div class="service container" id="service-me">
        <div class="title d-flex justify-content-center algn-items-center">
            <div>
                <h1 class="d-flex justify-content-center ">Meus servicos</h1>
                <p>Em meus poucos anos de expericiência descobri oque torna os meus<br> productos incriveis, é a
                    <span>autenticacidade</span> 
                </p>
            </div>

        </div>
        
        <div class="service-desc container">
            <div class="row">
                <div class="col-md-4 service-single">
                    <center>
                        <img src="./images/developer.png">
                        <h3>Developer</h3>
                        <p>
                            Neste serviço eu densevolvo um site para si ou sua empresa usando
                            as melhores tecnologias disponiveís.
                        </p>
                        <a href="" class="btn-full-primary">saber mais</a>
                    </center>
 
                </div>
                <div class="col-md-4 service-single">
                    <center>
                        <img src="./images/uiux.png">
                        <h3>designer</h3>
                        <p>
                            Neste serviço coloco o seu desenho em photoshop para o html, css e js
                            ou outra tecnologia disponivel
                        </p>
                        <a href="" class="btn-full-primary">saber mais</a>
                    </center>
 
                </div>
                <div class="col-md-4 service-single">
                    <center>
                        <img src="./images/designer.png">
                        <h3>SEO</h3>
                        <p>
                            Neste serviço eu faço a optimização do seu site para melhor localizar o
                            site nos sistemas de busca.
                        </p>
                        <a href="" class="btn-full-primary">saber mais</a>
                    </center>
 
                </div>
            </div>
        </div>
    </div>

    <div class="about-me container" id="about-me">
        <div class="row">
            <div class="col-md-6">
                <img src="./images/about-me.png" alt="" srcset="">
            </div>
            <div class="col-md-6 desc">
                <h1>Sobre mim</h1>
                <p>
                    Sou densevolvedor web e design web.
                    Tenho paixão pelo densevolvimento web, uso os melhores metodos de denvolvimento
                    e as melhores praticas da praça, fui formado pela Universidade Eduardo Mondlane,
                    em Egenharia informatica.
                </p>
                <div class="name-desc">
                    <div class="d-flex justify-content-between">
                        <h2>Nome</h2>
                        <p>Lazaro Magaia</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <h2>Telemóvel</h2>
                        <p>(+258) 827017601</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <h2>Email</h2>
                        <p>Lazaromagaia@lzmagaia.site</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="project container">
        <center>
            <h1>Projectos recentes</h1>
            <p>Nesta secção ficam os meus projectos recentes e talvez os melhores que já fiz.</p>
        </center>
        <div class="works container">
            <div class="row">
                <div class='col-md-6'>
                    <div class='card-portfolio bg-nft'>
                      <img class='img-works' src="./images/NftLandingpage.png" />
                      <h1>NFT website</h1>
                      <h3>06/09/2021</h3>  
                      <p>Nft é o assunto do momento e porque não ter um site e gerenciar as suas criptomoedas ?</p>
                      <a href="">ver mais <img src="./images/seta.png"/></a>
                    </div>
                </div>

                <div class='col-md-6'>
                    <div class='card-portfolio bg-trustycs'>
                      <img class='img-works' src="./images/trustycs.png" />
                      <h1>Trustycs website</h1>
                      <h3 class="text-white">12/06/2022</h3>  
                      <p class="text-white">Trustycs é um website focado em sistemas de gestão como o PHC e é um grande parceiro</p>
                      <a href="https://trustycs.co.mz/" target="blank">ver mais <img src="./images/seta.png"/></a>
                    </div>
                </div>      
            </div>    
        </div>
    </div>

    <div class="clients container">
        <div class="d-flex justify-content-center text-center py-5">
            <div class="title-desc">
                <h1>Veja oque os meus clientes dizem</h1>
                <p>
                    Me importo muito com as avaliações de quem já usufruir dos meus
                    servicos e aqui estão alguns dos comentarios deles.
                </p>
            </div>
        </div>

        <div class="d-flex justify-content-center flex-wrap">

            <div class="box-client">
                <div class="client-images d-flex px-2">
                    <img src="./images/usernull.png" alt="">
                    <div>
                        <h3>Mauro Nhavoto</h3>
                        <p>20/03/2022</p>
                    </div>
                </div>
                <p>
                    Consigo alcançar os meus clientes e de todo país em poucos cliques,
                    trabalhar com lazaro magaia foi a melhor decisão
                </p>
            </div>

            <div class="box-client container">
                <div class="client-images d-flex px-2">
                    <img src="./images/usernull.png" alt="">
                    <div>
                        <h3>Lizandra Luis</h3>
                        <p>10/01/2021</p>
                    </div>
                </div>
                <p>
                    Estou trabalhando com lazaro magaia em meus projectos e tenho
                    tido bons resultados
                </p>
            </div>

        </div>
        
    </div>

    <div class="newsletter">
        <div class="container">
            <div class="d-flex justify-content-center text-center">
                <div>
                    <h1>Se inscreva para receber novidades</h1>
                    <p>
                        Receba novidades do nosso site, em casa, no trabalho e onde estiver,
                        com as novidades também podes receber promoções, eventos e muito mais.
                        não perca tempo e inscreve-te
                    </p>
                  <div id="Newsletter"></div>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="contact">
            <div>
                <h1>Contacto</h1>
                <h3>Tem algum projecto ? conte-me</h3>
                <p> <i class="fa-regular fa-envelope"></i> lazaromagaia@lzmagaia.site</p>
                <a href="/contacto">contar</a>
            </div>

        </div>
    </div>

    <div class="footer-navbar">
        <div class="container text-center">
            <a href="">Home</a>
            <a href="">About Us</a>
            <a href="">Services</a>
        </div>
        <div class="footer-social-icons text-center">
            <a href="https://github.com/LazaroMagaia/"><i class="fa-brands fa-github"></i></a>
            
            <a href="https://www.facebook.com/people/Llmagaia/100082239521389/">
                <i class="fa-brands fa-facebook"></i></a>
            
            <a href="https://www.instagram.com/lzmagaia/"><i class="fa-brands fa-instagram"></i></a>
            
            <a href="https://wa.me/827017601"><i class="fa-brands fa-whatsapp"></i></a>
           
        </div>
    </div>
</div>


@include("template.footer")