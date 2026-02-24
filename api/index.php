<?php
$cursosJson = @file_get_contents('https://inscricoes.unicesumar.edu.br/assets/images/features/dashboard/cursos.json');
if (!$cursosJson) { $cursosJson = '{"CURSOS":[]}'; }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-K974BS');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- begin Convert Experiences code--><script type="text/javascript" src="/ruxitagentjs_ICANVfgqrux_10323250822043923.js" data-dtconfig="rid=RID_2418|rpid=466127222|domain=unicesumar.edu.br|reportUrl=/rb_bf10933whx|app=ea7c4b59f27d43eb|cuc=asx9dndv|owasp=1|mel=100000|featureHash=ICANVfgqrux|lastModification=1760369162536|srsr=1000|tp=500,50,0|rdnt=0|uxrgce=1|srbbv=2|agentUri=/ruxitagentjs_ICANVfgqrux_10323250822043923.js"></script><script type="text/javascript" src="//cdn-4.convertexperiments.com/js/10047893-100412074.js"></script><!-- end Convert Experiences code -->
    <!-- SEO -->
    <title>Educação Presencial e EAD/Semipresencial - Unicesumar</title>
    <meta name="description" content="A Unicesumar tem como missão promover a educação de qualidade nas diferentes áreas do conhecimento, formando profissionais cidadãos que contribuam para o desenvolvimento de uma sociedade justa e solidária."/>
    <meta name="robots" content="noodp"/>
    <!-- OG -->
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Educação Presencial e EAD/Semipresencial - Unicesumar" />
    <meta property="og:description" content="A Unicesumar tem como missão promover a educação de qualidade nas diferentes áreas do conhecimento, formando profissionais cidadãos que contribuam para o desenvolvimento de uma sociedade justa e solidária." />
    <meta property="og:url" content="https://www.unicesumar.edu.br/" />
    <meta property="og:site_name" content="Unicesumar" />
    <meta name="facebook-domain-verification" content="z12rppijdj4mdth9tybbex6srjbuzu" />
    <meta name="twitter:title" content="Educação Presencial e EAD/Semipresencial - Unicesumar"/>
    <meta name="twitter:description" content="A Unicesumar tem como missão promover a educação de qualidade nas diferentes áreas do conhecimentoformando profissionais cidadãos que contribuam para o desenvolvimento de uma sociedade justa e solidária."/>
    <meta name="twitter:card" content="summary"/>

    <link rel="canonical" href="https://www.unicesumar.edu.br/"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="style.css" rel="stylesheet">

    <style>
      .group_block h1 {
        font-size: 25px;
    }
    .home .row.item_block {
        margin-top: 0;
    }
    .group_block.presencial {
        padding: 0;
    }

    .group_block {
        padding: 30px 0;
    }
    .content-home {
        padding-bottom: 60px;
    }
    /* Facelift ENEM */
.owl-carousel .owl-item{ max-width: 300px!important; }
.banner-wrapper {
  width: 100%;
  display: flex;
  justify-content: center;
  padding: 16px;
  padding-top: 80px;
}
@media (max-width: 768px) {
  .banner-wrapper {
    padding-top: 40px;
  }
}

.banner-picture {
  max-width: 1225px;
  width: 100%;
}

.banner-picture img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: 8px;
  cursor: pointer;
  aspect-ratio: 1225 / 350;
}

@media (max-width: 768px) {
  .banner-picture img {
    aspect-ratio: 768 / 500;
  }
}
.slider-float ul li a {
    width: auto;
    text-align: center;
    text-decoration: none;
    border-radius: 50px;
    padding: 5px;
    font-weight: 500;
    padding: 5px 25px;
}
    </style>
    <!-- imagem favicon -->
    <link rel="icon" type="image/png" href="https://inscricoes.unicesumar.edu.br/assets/images/features/seo/icon/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://inscricoes.unicesumar.edu.br/assets/images/features/seo/icon/favicon.ico">
    <script type="application/ld+json">
      {"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"É possível usar a nota do ENEM para ingressar na UniCesumar?","acceptedAnswer":{"@type":"Answer","text":"Sim! Você pode usar sua nota do ENEM para entrar na UniCesumar de forma simples e direta. O ingresso pode ser feito em cursos presenciais, semipresenciais ou a distância (EAD), conforme a modalidade disponível para o curso escolhido. Não é necessário realizar nenhuma outra prova — a sua nota do ENEM já garante a participação no processo seletivo."}},{"@type":"Question","name":"Qual a pontuação mínima exigida pela UniCesumar para o ingresso com a nota do ENEM?","acceptedAnswer":{"@type":"Answer","text":"A UniCesumar não exige uma nota mínima específica. Quanto maior for a sua pontuação no ENEM, maior pode ser o desconto na mensalidade, que pode chegar a até 100%, conforme as condições e campanhas vigentes. Consulte o portal de inscrição para saber qual benefício se aplica à sua nota."}},{"@type":"Question","name":"Como funciona o processo de inscrição utilizando a nota do ENEM na UniCesumar?","acceptedAnswer":{"@type":"Answer","text":"Para ingressar com a nota do ENEM, basta se inscrever diretamente no portal da UniCesumar e informar o ano e a pontuação obtida. Durante a inscrição, será necessário apresentar: boletim do ENEM de exames realizados entre 2015 e 2025; histórico escolar e certificado de conclusão do Ensino Médio (a conclusão deve ocorrer antes da matrícula, conforme o art. 44, inciso II, da Lei 9.394/1996); CPF e documento de identidade; certidão de nascimento ou casamento; e foto 3x4 recente. Após a análise e confirmação dos documentos, a matrícula é efetivada e o aluno pode iniciar as aulas na modalidade escolhida."}},{"@type":"Question","name":"Posso usar minha nota de anos anteriores do ENEM para me inscrever na UniCesumar?","acceptedAnswer":{"@type":"Answer","text":"Sim. A UniCesumar aceita notas do ENEM de até 10 anos anteriores, ou seja, de 2015 a 2025. Isso permite que você utilize o melhor resultado que já conquistou para garantir sua vaga."}},{"@type":"Question","name":"Há algum curso na UniCesumar que não aceita a nota do ENEM para ingresso?","acceptedAnswer":{"@type":"Answer","text":"Não. Todos os cursos de graduação da UniCesumar — presenciais, semipresenciais e a distância (EAD) — aceitam a nota do ENEM como forma de ingresso. O candidato pode escolher o curso e a modalidade que melhor se adequam à sua rotina e aos seus objetivos."}},{"@type":"Question","name":"É necessário realizar outras provas além da apresentação da nota do ENEM para ingressar na UniCesumar?","acceptedAnswer":{"@type":"Answer","text":"Não. Ao optar pelo ingresso com a nota do ENEM na UniCesumar, não é necessário realizar vestibular ou qualquer outra prova. Esse formato simplifica o processo seletivo e garante mais agilidade para o início do curso."}},{"@type":"Question","name":"Onde posso encontrar mais informações sobre ingresso na UniCesumar usando a nota do ENEM?","acceptedAnswer":{"@type":"Answer","text":"Para mais informações sobre como utilizar a nota do ENEM para ingressar na graduação da UniCesumar, seja na modalidade EAD ou presencial, consulte o regulamento institucional e as condições vigentes de desconto, que podem chegar a até 100%."}},{"@type":"Question","name":"Como calcular a nota do ENEM?","acceptedAnswer":{"@type":"Answer","text":"A nota do ENEM é calculada com base na Teoria de Resposta ao Item (TRI), que avalia a coerência dos acertos e não apenas a quantidade de respostas corretas. Para calcular a média simples, some as notas das cinco provas (Ciências Humanas, Ciências da Natureza, Linguagens, Matemática e Redação) e divida o total por cinco."}},{"@type":"Question","name":"O ENEM 2025 voltará a oferecer certificação do Ensino Médio?","acceptedAnswer":{"@type":"Answer","text":"Sim. O ENEM 2025 retomou a possibilidade de certificação de conclusão do Ensino Médio para maiores de 18 anos que indicarem essa finalidade no momento da inscrição. A lista de instituições certificadoras será divulgada por portaria específica do INEP. O Encceja continua sendo aplicado normalmente para quem busca o diploma do ensino médio."}},{"@type":"Question","name":"Como usar a participação no ENEM para ganhar desconto na UniCesumar antes da divulgação da nota?","acceptedAnswer":{"@type":"Answer","text":"É possível se inscrever na UniCesumar utilizando a comprovação de participação no ENEM, com desconto correspondente à faixa de até 450 pontos. Caso, após a divulgação das notas, a pontuação seja de 451 pontos ou mais, o aluno poderá solicitar a atualização do percentual de desconto mediante apresentação do boletim do ENEM."}},{"@type":"Question","name":"Como comprovar minha participação no ENEM para a UniCesumar?","acceptedAnswer":{"@type":"Answer","text":"Após a matrícula, o aluno deve abrir um protocolo no canal \"Lançamento de Bolsa - ENEM\" e anexar a comprovação de participação, como o boletim do ENEM ou a ficha de inscrição/comprovante de realização do ENEM 2025, para validação e lançamento da bolsa conforme o regulamento vigente."}}]}
    </script>
    <script type="text/javascript" src="https://inscricoes.unicesumar.edu.br/assets/images/features/banners/config-site.js"></script>
  </head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K974BS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Schema -->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "CollegeOrUniversity",
    "name": "UniCesumar",
    "url": "https://www.unicesumar.edu.br/",
    "logo": "https://www.unicesumar.edu.br/wp-content/themes/unicesumar/templates/assets_home/img/logo.webp",
    "contactPoint": [
      {
        "@type": "ContactPoint",
        "telephone": "44 99139 - 9006",
        "contactType": "customer service",
        "areaServed": "BR",
        "availableLanguage": "Portuguese"
      },
      {
        "@type": "ContactPoint",
        "telephone": "0800 600 6360",
        "contactType": "customer service",
        "areaServed": "BR",
        "availableLanguage": "Portuguese"
      }
    ],
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Av. Guedner, 1610",
      "addressLocality": "Maringá",
      "postalCode": "87050-390",
      "addressCountry": "BR"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": -23.443586,
      "longitude": -51.915927
    },
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday"
        ],
        "opens": "08:00",
        "closes": "20:00"
      },
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "Saturday",
        "opens": "09:00",
        "closes": "17:00"
      }
    ],
    "sameAs": [
      "https://www.facebook.com/UniCesumar",
      "https://www.instagram.com/unicesumaroficial/",
      "https://www.youtube.com/@EADUnicesumarOficial",
      "https://www.linkedin.com/school/unicesumaroficial/",
      "https://pt.wikipedia.org/wiki/Universidade_Cesumar"
    ]
  }
</script>
  <header>
      <div class="sub-menu desktop">
         <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <ul class="first_menu">
                          <li><a href="https://www.unicesumar.edu.br/atendimento/"><img class="icon-phone" src="https://www.unicesumar.edu.br/wp-content/themes/unicesumar/templates/assets_header/img/icons/icon-phone.png">Central de atendimento</a></li>
                      </ul>
                  </div>
                  <div class="col-md-6">
                      <ul class="top_account">
                          <li class="login nav-item dropdown">
                            <a href="https://studeo.unicesumar.edu.br/?_gl=1*120uson*_ga*NzQxMjA3OTg2LjE3MDI2NzI1MzQ.*_ga_QSVQ7NJYBN*MTcyODM5Nzc5Ni4xNS4xLjE3MjgzOTkzODQuMC4wLjA.#!/access/login"><img class="icon-user" src="https://www.unicesumar.edu.br/wp-content/themes/unicesumar/templates/assets_header/img/icons/icon-user.png"> Aluno</a>
                          </li>
                      </ul>
                  </div>
              </div>
         </div>
      </div>
   <div class="header-menu">
    <div class="container">
      <div class="row">
          <div class="col-lg-3 col-logo">
            <a class="logo-unicesumar" href="https://www.unicesumar.edu.br/"><img src="assets/unicesumar-brand.svg" alt="Unicesumar"></a>
            <li class="inscreva-se-wrapper login nav-item dropdown">
              <a class="inscreva-se dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Inscreva-se</a>
              <ul class="menu_login dropdown-menu">
                <div class="institucional">
                  <li><a class="dropdown-item" href="https://inscricoes.unicesumar.edu.br/">Ensino EAD/Semipresencial</a></li>
                  <li><a class="dropdown-item" href="https://venhaparaunicesumar.com.br/?home=variante">Ensino Presencial</a></li>
                </div>
              </ul>
            </li>
          </div>
          <div class="col-lg-9 col-menu">
            <div class="grid_flex">
              <div class="flex_1">
                <ul class="top_account mobile">
                  <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="https://www.unicesumar.edu.br/wp-content/themes/unicesumar/templates/assets_header/img/icons/icon-user_mobile.png"></a>
                    <ul class="dropdown-menu">
                      <div class="institucional">
                        <li><a class="dropdown-item" href="#">Sou aluno/professor presencial</a></li>
                        <li><a class="dropdown-item" href="#">Sou aluno EAD/Semipresencial</a></li>
                      </div>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="flex_2">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                  <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <img src="https://www.unicesumar.edu.br/wp-content/themes/unicesumar/templates/assets_header/img/icons/icon-menu.png">
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="https://www.unicesumar.edu.br/" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <strong>EAD/Semipresencial</strong>
                          </a>
                          <ul class="menu_institucional dropdown-menu">
                            <div class="ead">
                              <li><a class="dropdown-item" href="https://inscricoes.unicesumar.edu.br" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'botao-todos-os-cursos'});">Todos os Cursos</a></li>
                              <li><a class="dropdown-item" href="https://inscricoes.unicesumar.edu.br/graduacao/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'botao-graduacao'});">Graduação</a></li>
                              <li><a class="dropdown-item" href="https://inscricoes.unicesumar.edu.br/pos-graduacao/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'botao-pos-graduacao'});">Pós Graduação</a></li>
                              <li><a class="dropdown-item" href="https://inscricoes.unicesumar.edu.br/profissionalizante/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'botao-profissionalizantes'});">Profissionalizante</a></li>
                              <li><a class="dropdown-item" href="https://inscricoes.unicesumar.edu.br/tecnico/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'botao-tecnico'});">Técnico</a></li>
                            </div>
                          </ul>
                        </li>

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="https://www.unicesumar.edu.br/" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Presencial
                          </a>
                          <ul class="menu_institucional dropdown-menu">
                            <div class="ead">
                              <li><a class="dropdown-item" href="https://venhaparaunicesumar.com.br/graduacao/medicina/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'botao-medicina'});">Medicina</a></li>
                              <li><a class="dropdown-item" href="https://venhaparaunicesumar.com.br/graduacao/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'botao-graduacao-presencial'});">Graduação</a></li>
                              <li><a class="dropdown-item" href="https://venhaparaunicesumar.com.br/inscricao-pos/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'botao-pos-graduacao-presencial'});">Pós Graduação</a></li>
                              <li><a class="dropdown-item" href="https://www.unicesumar.edu.br/mestrado-e-doutorado/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'botao-mestrado-e-doutorado-presencial'});">Mestrado e Doutorado</a></li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item menu_aluno dropdown-toggle" href="#">Unidades</a>
                                <ul class="dropdown-menu">
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'botao-unidade-presencial-maringa'});">
                                      Maringá</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-curitiba/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'botao-unidade-presencial-curitiba'});">
                                      Curitiba</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-londrina/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'botao-unidade-presencial-londrina'});">
                                      Londrina</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-ponta-grossa/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'botao-unidade-presencial-ponta-grossa'});">
                                      Ponta Grossa</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-corumba/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'botao-unidade-presencial-corumba'});">
                                      Corumbá</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-campo-grande/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'botao-unidade-presencial-campo-grande'});">
                                      Campo Grande</a>
                                  </li>
                                </ul>
                              </li>
                            </div>
                          </ul>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href="https://venhaparaunicesumar.com.br/graduacao/medicina/">Medicina</a>
                        </li>

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pesquisa e extensão
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://www.unicesumar.edu.br/pesquisa/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'botao-pesquisa'});">Pesquisa</a></li>
                            <li><a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial/cursos-extensao/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'botao-extensao'});">Extensão</a></li>
                            <li><a class="dropdown-item" href="https://www.iceti.org.br" target="_blank" rel="noopener noreferrer nofollow" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'botao-iceti'});">ICETI</a></li>
                          </ul>
                        </li>

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="https://www.unicesumar.edu.br/" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Institucional
                          </a>
                          <ul class="menu_institucional dropdown-menu">
                            <div class="institucional">
                              <span>Institucional</span>
                              <li>
                                <a class="dropdown-item" href="https://www.unicesumar.edu.br/conheca-a-unicesumar/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'conheca-a-unicesumar'});">
                                  Conheça a Unicesumar</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="https://www.unicesumar.edu.br/ead/campus-polos-e-unidades/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'campus-polos-e-unidades'});">
                                  Polos</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="https://sistema.canalethos.com.br/vitru/home/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'canal-de-etica'});">
                                  Canal de ética</a>
                                </li>
                              <li>
                                <a class="dropdown-item" href="https://www.unicesumar.edu.br/seja-parceiro/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'abra-um-polo'});">
                                  Abra um polo</a>
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item menu_aluno dropdown-toggle" href="#">Aluno</a>
                                <ul class="dropdown-menu">
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial/aluno/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'aluno-maringa'});">
                                      Maringá</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-curitiba/aluno/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'aluno-curitiba'});">
                                      Curitiba</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-londrina/aluno/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'aluno-londrina'});">
                                      Londrina</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-ponta-grossa/aluno/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'aluno-ponta-grossa'});">
                                      Ponta Grossa</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-corumba/aluno/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'aluno-corumba'});">
                                      Corumbá</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-campo-grande/aluno/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'aluno-campo-grande'});">
                                      Campo Grande</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial/egresso/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'egresso'});">
                                  Egresso</a>
                              </li>

                              <li><a class="dropdown-item"  href="https://www.unicesumar.edu.br/educa-esporte" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'educa-esporte'});">Educa Esporte</a></li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item menu_comunidade dropdown-toggle" href="#">Comunidade</a>
                                <ul class="dropdown-menu">
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial/comunidade/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'comunidade-maringa'});">
                                      Maringá</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-curitiba/comunidade/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'comunidade-curitiba'});">
                                      Curitiba</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-londrina/comunidade/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'comunidade-londrina'});">
                                      Londrina</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-ponta-grossa/comunidade/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'comunidade-ponta-grossa'});">
                                      Ponta Grossa</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-corumba/comunidade/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'comunidade-corumba'});">
                                      Corumbá</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-campo-grande/comunidade/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'comunidade-campo-grande'});">
                                      Campo Grande</a>
                                  </li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item menu_empresa dropdown-toggle" href="#">Empresa</a>
                                <ul class="dropdown-menu">
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial/empresa/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'empresa-maringa'});">
                                      Maringá</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-curitiba/empresa/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'empresa-curitiba'});">
                                      Curitiba</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-londrina/empresa/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'empresa-londrina'});">
                                      Londrina</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-ponta-grossa/empresa/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'empresa-ponta-grossa'});">
                                      Ponta Grossa</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-corumba/empresa/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'empresa-corumba'});">
                                      Corumbá</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="https://www.unicesumar.edu.br/presencial-campo-grande/empresa/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'empresa-campo-grande'});">
                                      Campo Grande</a>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a class="dropdown-item" href="https://carreira.inhire.com.br/carreiras/vitru" target="_blank" rel="noopener noreferrer nofollow" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'trabalhe-conosco'});">
                                  Trabalhe conosco</a>
                              </li>
                            </div>
                          </ul>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href="https://www.unicesumar.edu.br/blog/" onclick="window.dataLayer.push({'event':'clickEvent','eventCategory':'unicesumar:home-b-institucional','eventAction':'botao:click','eventLabel':'botao-blog'});">Blog</a>
                        </li>
                      </ul>
                      <style>
                          .dropdown-submenu {
                            position: relative;
                          }
                          .dropdown-submenu .dropdown-menu {
                            top: 0;
                            left: 100%;
                            margin-top: -1px;
                            display: none;
                          }
                          .dropdown-submenu:hover .dropdown-menu,
                          .dropdown-submenu:focus-within .dropdown-menu {
                            display: block;
                          }
                          ul.dropdown-menu {
                              padding: 11px;
                              border-radius: 10px;
                          }
                          ul.dropdown-menu li {
                              margin-bottom: 5px;
                          }
                          @media (max-width: 991px) {
                            .dropdown-submenu .dropdown-menu {
                              position: static !important;
                              left: auto !important;
                              top: auto !important;
                              margin: 0 !important;
                              padding-left: 15px;
                              box-shadow: none;
                              border: none;
                              background: transparent;
                            }
                          }
                      </style>
                    </div>
                  </div>
                
                </nav>
              </div>
            </div>
          </div>
      </div>
     </div>
   </div>
   <div class="header-search">
    <div class="container">
      <div class="search-wrapper">
        <input id="searchCursoInput" type="text" placeholder="Encontre o curso certo pra você" aria-label="Buscar curso" autocomplete="off">
        <div id="searchCursoResults" class="search-results"></div>
      </div>
    </div>
   </div>
  </header>
  <script>
  (function() {
    var searchInput = document.getElementById('searchCursoInput');
    var searchResults = document.getElementById('searchCursoResults');
    var cursosData = <?php echo $cursosJson; ?>;
    var cursosList = (cursosData.CURSOS || []).filter(function(c) { return c.FL_ATIVO === 1; });

    function buildSearchURL(c) {
      var base = 'https://inscricoes.unicesumar.edu.br/';
      if (c.METODOLOGIA === 'Presencial') base = 'https://venhaparaunicesumar.com.br/';
      if (c.UNIDADE === 'pos-graduacao') return base + 'pos-graduacao/' + c.URL_CURSO;
      return base + (c.UNIDADE || 'graduacao') + '/' + c.URL_CURSO;
    }

    function getLabel(c) {
      if (c.UNIDADE === 'pos-graduacao') return 'Pós-Graduação';
      if (c.UNIDADE === 'tecnico') return 'Técnico';
      if (c.UNIDADE === 'profissionalizantes') return 'Profissionalizante';
      return 'Graduação';
    }

    function normalize(str) {
      return str.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
    }

    searchInput.addEventListener('input', function() {
      var query = this.value.trim();
      searchResults.innerHTML = '';
      if (query.length < 2) { searchResults.style.display = 'none'; return; }

      var norm = normalize(query);
      var matches = cursosList.filter(function(c) {
        return normalize(c.NM_CURSO).indexOf(norm) !== -1;
      }).slice(0, 8);

      if (!matches.length) { searchResults.style.display = 'none'; return; }

      matches.forEach(function(c) {
        var item = document.createElement('a');
        item.href = buildSearchURL(c);
        item.target = '_blank';
        item.className = 'search-result-item';
        item.innerHTML = '<span class="search-result-name">' + c.NM_CURSO + '</span>' +
          '<span class="search-result-badge">' + getLabel(c) + ' · ' + (c.DS_MODALIDADE || '') + '</span>';
        searchResults.appendChild(item);
      });
      searchResults.style.display = 'block';
    });

    searchInput.addEventListener('keydown', function(e) {
      if (e.key === 'Enter') {
        var first = searchResults.querySelector('.search-result-item');
        if (first) { first.click(); e.preventDefault(); }
      }
    });

    document.addEventListener('click', function(e) {
      if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
        searchResults.style.display = 'none';
      }
    });

    searchInput.addEventListener('focus', function() {
      if (this.value.trim().length >= 2 && searchResults.childElementCount) {
        searchResults.style.display = 'block';
      }
    });
  })();
  </script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.dropdown-submenu > .dropdown-toggle').forEach(function(el) {
      el.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        var submenu = this.nextElementSibling;
        var isOpen = submenu.style.display === 'block';
        document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(function(m) {
          m.style.display = 'none';
        });
        if (!isOpen) submenu.style.display = 'block';
      });
    });
  });
  </script>

  <style>
    li#liSemipresencial {
    margin-left: 1%;
}
  #showBox3 { width:160px; }
  .carousel-container {
  overflow: hidden;
}
  .carousel-container {
    overflow: hidden;
    position: relative; /* Para posicionar as setas */
  }

  .carousel {
    display: flex;
    transition: transform 0.5s ease;
  }

  .slide {
    flex: 0 0 auto;
    width: 100%;
    position: relative;
  }

  .slide img {
    width: 100%;
    height: auto;
  }

  .mobile-only {
    display: none;
  }

  .banner-prev, .banner-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
  }

  .banner-prev {
    left: 10px;
  }

  .banner-next {
    right: 10px;
  }

  #banners {
      height: auto;
      aspect-ratio: auto 1920 / 480;
    }   

  @media screen and (max-width: 430px) {
    #banners {
      height: auto;
      aspect-ratio: 16 / 10;
    }   
}

@media screen and (max-width: 768px) {
  #banners{margin-top: 0px;}
  .slide img {
    display: none;
  }
  .slide .mobile-only {
    display: block;
  }
}
@media screen and (max-width: 992px) {
  #banners{margin-top: 0px;        aspect-ratio: auto 920 / 630;}
  .slide img {
    display: none;
  }
  .slide .mobile-only {
    display: block;
  }
}
.chatbot{
  position: relative;
    z-index: 10;
}


#banners{
  width: 100%;
  max-width: 1920px;
  margin: 0 auto;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: block;
  position: relative;
}

.carousel-inner {
    aspect-ratio: 16 / 4;
}

.carousel-inner img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Faz com que a imagem preencha o container */
}

.carousel-control .fa-chevron-circle-left, .carousel-control .fa-chevron-circle-right, .carousel-control .icon-next, .carousel-control .icon-prev {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
    margin-top: -10px;
    font-size: 30px;
}

.carousel-control .fa-chevron-circle-left, .carousel-control .icon-prev {
    left: 50%;
    margin-left: -10px;
}

.carousel-control .fa-chevron-circle-right, .carousel-control .icon-next {
    right: 50%;
    margin-right: -10px;
}

.carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail> img{
  display: block;
  /*height: 660px;*/
  /*min-height: 445px;*/
  width: 100%;
  max-width:  1920px;
  object-fit: cover;
}
@media (min-width: 1200px) {
    .carousel-inner {
/*        min-height: 380px; */
        max-height: 480px;
        background-color: #f0f0f0; /* Cor de fundo para placeholder */
    }

    .container_curso{
      /*width: 1170px;*/
      width: 1260px;
    }
}
@media only screen and (max-width: 768px){

  .carousel-inner img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Faz com que a imagem preencha o container */
  }

  .carousel-inner {
      width: 100%;
      max-width: 768px;
      height: auto;
      aspect-ratio: 16/9;
  }

  .carousel-inner {
    background-color: #f0f0f0; /* Cor de fundo para placeholder */
  }
  .carousel-control {position: absolute;}
}



.carousel-container {
  position: relative;
  overflow: hidden;
  width: 100%;
}

.carousel-track {
  display: flex;
  transition: transform 0.45s ease;
  will-change: transform;
}

.slide {
  min-width: 100%;
  flex-shrink: 0;
}


.mobile-only {
  display: none;
}

@media (max-width: 768px) {
  .mobile-only { display: block; }
}

</style>

    <!-- banners -->
    <!-- <div id="banners" class="carousel-container">
      <div class="carousel">
      </div>
      <div id="arrow-left" class="arrow left" >&#10094;</div>
      <div id="arrow-right" class="arrow right" >&#10095;</div>
    </div> -->
    <div id="banners" class="carousel-container">
  <div class="carousel-track"></div>

  <button id="arrow-left" class="carousel-arrow banner-prev" aria-label="Banner anterior">
    &#10094;
  </button>
  <button id="arrow-right" class="carousel-arrow banner-next" aria-label="Próximo banner">
    &#10095;
  </button>
  <div class="banner-dots"></div>
</div>

    <!-- .End banners -->

  <div class="nichos">
    <div class="slider-float">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Áreas de interesse</h2>
            <h6>Escolha a área e dê o próximo passo</h6>
            <ul>
              <li><a id="showBoxNicho1" class="nichos active" href="javascript:void(0);">GRADUAÇÃO</a></li>
              <li><a id="showBoxNicho2" class="nichos" href="javascript:void(0);">PÓS - GRADUAÇÃO</a></li>
              <li><a id="showBoxNicho3" class="nichos" href="javascript:void(0);">PROFISSIONALIZANTES</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="nichos-itens">
          <div id="boxNicho1" class="nichos-grid">
            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/engenharias/graduacao">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/engenharia-e-arquitetura.svg"></div>
                  <div class="nichoText">
                    <h3>Engenharias e Arquitetura</h3>
                    <span>13 cursos</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/saude/graduacao">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/saude.svg"></div>
                  <div class="nichoText">
                    <h3>Saúde e Bem-Estar</h3>
                    <span>14 cursos</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/negocios/graduacao">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/gestao-e-negocio.svg"></div>
                  <div class="nichoText">
                    <h3>Gestão e Negócios</h3>
                    <span>26 cursos</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/educacao/graduacao">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/educacao.svg"></div>
                  <div class="nichoText">
                    <h3>Educação</h3>
                    <span>23 cursos</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/tecnologia/graduacao">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/tecnologia.svg"></div>
                  <div class="nichoText">
                    <h3>Tecnologia</h3>
                    <span>11 cursos</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/artes/graduacao">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/artes-e-design.svg"></div>
                  <div class="nichoText">
                    <h3>Artes e Design</h3>
                    <span>11 cursos</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/direito/graduacao">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/juridico-e-seguranca.svg"></div>
                  <div class="nichoText">
                    <h3>Jurídico e Segurança</h3>
                    <span>6 cursos</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/alimentos/graduacao">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/alimentos-e-bebidas.svg"></div>
                  <div class="nichoText">
                    <h3>Alimentos e Bebidas</h3>
                    <span>2 cursos</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/comunicacao/graduacao">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/comunicacao.svg"></div>
                  <div class="nichoText">
                    <h3>Comunicação</h3>
                    <span>5 cursos</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/saude-animal/graduacao">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/saude.svg"></div>
                  <div class="nichoText">
                    <h3>Saúde Animal</h3>
                    <span>1 curso</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/meio-ambiente/graduacao">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/agrarias-e-meio-ambiente.svg"></div>
                  <div class="nichoText">
                    <h3>Agrárias e Meio Ambiente</h3>
                    <span>3 cursos</span>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div id="boxNicho2" class="nichos-grid">
            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/tecnologia/pos-graduacao">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/tecnologia.svg"></div>
                  <div class="nichoText">
                    <h3>Tecnologia e Inovação</h3>
                    <span>15 cursos</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/negocios/pos-graduacao">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/gestao-e-negocio.svg"></div>
                  <div class="nichoText">
                    <h3>Negócios</h3>
                    <span>52 cursos</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/educacao/pos-graduacao">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/educacao.svg"></div>
                  <div class="nichoText">
                    <h3>Educação</h3>
                    <span>44 cursos</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/saude/pos-graduacao">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/saude.svg"></div>
                  <div class="nichoText">
                    <h3>Saúde e Bem Estar</h3>
                    <span>58 cursos</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/direito/pos-graduacao">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/juridico-e-seguranca.svg"></div>
                  <div class="nichoText">
                    <h3>Direito e Humanidades</h3>
                    <span>14 cursos</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/meio-ambiente/pos-graduacao">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/agrarias-e-meio-ambiente.svg"></div>
                  <div class="nichoText">
                    <h3>Meio Ambiente</h3>
                    <span>+ de 20 cursos</span>
                  </div>
                </div>
              </a>
            </div>

          </div>

          <div id="boxNicho3" class="nichos-grid">
            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/tecnologia/profissionalizante">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/tecnologia.svg"></div>
                  <div class="nichoText">
                    <h3>Tecnologia e Inovação</h3>
                    <span>11 cursos</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/negocios/profissionalizante">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/gestao-e-negocio.svg"></div>
                  <div class="nichoText">
                    <h3>Negócios</h3>
                    <span>39 cursos</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/educacao/profissionalizante">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/educacao.svg"></div>
                  <div class="nichoText">
                    <h3>Educação</h3>
                    <span>8 cursos</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/saude/profissionalizante">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/saude.svg"></div>
                  <div class="nichoText">
                    <h3>Saúde e Meio Ambiente</h3>
                    <span>6 cursos</span>
                  </div>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="https://inscricoes.unicesumar.edu.br/area/direito/profissionalizante">
                <div class="nichoContainer">
                  <div class="nichoContainerImg"><img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/icons/juridico-e-seguranca.svg"></div>
                  <div class="nichoText">
                    <h3>Direito e Humanidades</h3>
                    <span>6 cursos</span>
                  </div>
                </div>
              </a>
            </div>
          </div>

        </div>
        <div class="nichos-dots"></div>
      </div>
    </div>
  </div>

<script>
$(document).ready(function(){
  var dotsContainer = document.querySelector('.nichos-dots');
  var perPage = 6;
  var currentPage = 0;
  var totalPages = 1;
  var activeGrid = null;
  var isAnimating = false;

  function getVisibleGrid() {
    var g = document.querySelector('.nichos-grid[style*="flex"], .nichos-grid:not([style*="none"])');
    return g || document.getElementById('boxNicho1');
  }

  function nichosCarousel() {
    var isMobile = window.innerWidth <= 768;
    activeGrid = getVisibleGrid();
    if (!activeGrid || !dotsContainer) return;

    var items = activeGrid.querySelectorAll('.item');

    if (isMobile && items.length > perPage) {
      totalPages = Math.ceil(items.length / perPage);
      currentPage = 0;

      activeGrid.style.overflow = 'hidden';
      activeGrid.style.position = 'relative';

      dotsContainer.innerHTML = '';
      for (var i = 0; i < totalPages; i++) {
        var dot = document.createElement('span');
        dot.className = 'nichos-dot' + (i === 0 ? ' active' : '');
        dot.setAttribute('data-page', i);
        dot.addEventListener('click', function() {
          nichosGoTo(parseInt(this.getAttribute('data-page')));
        });
        dotsContainer.appendChild(dot);
      }

      items.forEach(function(item) { item.style.display = ''; });
      nichosGoTo(0, false);
    } else {
      totalPages = 1;
      currentPage = 0;
      dotsContainer.innerHTML = '';
      activeGrid.style.overflow = '';
      activeGrid.style.position = '';
      items.forEach(function(item) {
        item.style.display = '';
        item.style.transform = '';
        item.style.opacity = '';
        item.style.position = '';
      });
    }
  }

  function nichosGoTo(page, animate) {
    if (page < 0 || page >= totalPages || isAnimating) return;
    var direction = page > currentPage ? 1 : -1;
    var grid = activeGrid || getVisibleGrid();
    if (!grid) return;
    var items = grid.querySelectorAll('.item');
    var shouldAnimate = animate !== false && page !== currentPage;

    if (shouldAnimate) {
      isAnimating = true;
      items.forEach(function(item) {
        item.style.transition = 'transform 0.35s ease, opacity 0.35s ease';
        item.style.transform = 'translateX(' + (direction * -100) + '%)';
        item.style.opacity = '0';
      });

      setTimeout(function() {
        var start = page * perPage;
        var end = start + perPage;
        items.forEach(function(item, idx) {
          item.style.transition = 'none';
          item.style.display = (idx >= start && idx < end) ? '' : 'none';
          item.style.transform = 'translateX(' + (direction * 100) + '%)';
          item.style.opacity = '0';
        });

        requestAnimationFrame(function() {
          requestAnimationFrame(function() {
            items.forEach(function(item) {
              item.style.transition = 'transform 0.35s ease, opacity 0.35s ease';
              item.style.transform = 'translateX(0)';
              item.style.opacity = '1';
            });
            setTimeout(function() { isAnimating = false; }, 350);
          });
        });
      }, 350);
    } else {
      var start = page * perPage;
      var end = start + perPage;
      items.forEach(function(item, idx) {
        item.style.display = (idx >= start && idx < end) ? '' : 'none';
        item.style.transform = 'translateX(0)';
        item.style.opacity = '1';
        item.style.transition = '';
      });
    }

    currentPage = page;
    dotsContainer.querySelectorAll('.nichos-dot').forEach(function(d, di) {
      d.classList.toggle('active', di === page);
    });
  }

  var touchStartX = 0;
  var nichosSection = document.querySelector('.nichos');

  if (nichosSection) {
    nichosSection.addEventListener('touchstart', function(e) {
      touchStartX = e.changedTouches[0].screenX;
    }, {passive: true});

    nichosSection.addEventListener('touchend', function(e) {
      var diff = touchStartX - e.changedTouches[0].screenX;
      if (Math.abs(diff) > 50) {
        if (diff > 0 && currentPage < totalPages - 1) {
          nichosGoTo(currentPage + 1, true);
        } else if (diff < 0 && currentPage > 0) {
          nichosGoTo(currentPage - 1, true);
        }
      }
    }, {passive: true});
  }

  nichosCarousel();
  $(window).on('resize', nichosCarousel);
  $(document).on('click', 'a.nichos', function() {
    setTimeout(nichosCarousel, 150);
  });
});
</script>

<div class="cursos-dinamicos">
  <div class="container">
    <h1>Seu futuro começa aqui</h1>
    <div class="cursos-tabs">
      <button class="cursos-tab active" data-tab="EAD">EAD</button>
      <button class="cursos-tab" data-tab="Semipresencial">Semipresencial</button>
      <button class="cursos-tab" data-tab="Presencial">Presencial</button>
    </div>
    <div id="cursos-grid" class="cursos-grid"></div>
    <div class="cursos-ver-todos">
      <a id="cursos-ver-todos-link" href="https://inscricoes.unicesumar.edu.br/" target="_blank">Ver todos os cursos &rarr;</a>
    </div>
  </div>
</div>
<script>
(function(){
  var cursosData = <?php echo $cursosJson; ?>;
  var allCursos = cursosData.CURSOS || [];

  var cursosPresenciais = [
    {FL_ATIVO:1, NM_CURSO:'Medicina', DS_MODALIDADE:'Bacharelado', MODALIDADE:'Graduação', METODOLOGIA:'Presencial', UNIDADE:'graduacao', URL_CURSO:'medicina', DS_DURACAO:72, TIPO_NICHO:'Saúde e Bem-Estar'},
    {FL_ATIVO:1, NM_CURSO:'Direito', DS_MODALIDADE:'Bacharelado', MODALIDADE:'Graduação', METODOLOGIA:'Presencial', UNIDADE:'graduacao', URL_CURSO:'direito', DS_DURACAO:60, TIPO_NICHO:'Jurídico e Segurança'},
    {FL_ATIVO:1, NM_CURSO:'Odontologia', DS_MODALIDADE:'Bacharelado', MODALIDADE:'Graduação', METODOLOGIA:'Presencial', UNIDADE:'graduacao', URL_CURSO:'odontologia', DS_DURACAO:60, TIPO_NICHO:'Saúde e Bem-Estar'},
    {FL_ATIVO:1, NM_CURSO:'Medicina Veterinária', DS_MODALIDADE:'Bacharelado', MODALIDADE:'Graduação', METODOLOGIA:'Presencial', UNIDADE:'graduacao', URL_CURSO:'medicina-veterinaria', DS_DURACAO:60, TIPO_NICHO:'Saúde Animal'}
  ];

  var BADGE_STYLES = {
    'Graduação':       { bg: '#EEF5FF', color: '#0059D5' },
    'Pós-Graduação':   { bg: '#D9F1FB', color: '#009EE5' },
    'Técnico':         { bg: '#FDE5E5', color: '#F34D50' },
    'Profissionalizante': { bg: '#DBF3E8', color: '#0FAD64' },
    'Semipresencial':  { bg: '#EEF5FF', color: '#0059D5' }
  };

  function getBadgeStyle(modalidade) { return BADGE_STYLES[modalidade] || { bg: '#f0f0f0', color: '#607d8b' }; }

  function formatDuration(meses) {
    if (!meses) return '';
    if (meses >= 12 && meses % 12 === 0) {
      var anos = meses / 12;
      return anos + (anos === 1 ? ' Ano' : ' Anos');
    }
    return meses + ' Meses';
  }

  function getModalidadeLabel(c) {
    if (c.UNIDADE === 'pos-graduacao') return 'Pós-Graduação';
    if (c.UNIDADE === 'tecnico') return 'Técnico';
    if (c.UNIDADE === 'profissionalizantes') return 'Profissionalizante';
    if (c.UNIDADE === 'graduacao') return 'Graduação';
    if (c.MODALIDADE === 'Semipresencial') return 'Graduação';
    return c.MODALIDADE || '';
  }

  function buildURL(c) {
    var base = 'https://inscricoes.unicesumar.edu.br/';
    if (c.METODOLOGIA === 'Presencial') base = 'https://venhaparaunicesumar.com.br/';
    if (c.UNIDADE === 'pos-graduacao') return base + 'pos-graduacao/' + c.URL_CURSO;
    return base + c.UNIDADE + '/' + c.URL_CURSO;
  }

  var cursosFixos = {
    'EAD': ['EGRAD_ADM', 'EGRAD_NSEG', 'EGRAD_RH', 'ETEC_PODOL'],
    'Semipresencial': ['ESPRE_PED', 'ESPRE_BEDU', 'ESPRE_BIO', 'ESPRE_NUT']
  };

  var cachedCards = {};
  function getFiltered(metodologia) {
    if (cachedCards[metodologia]) return cachedCards[metodologia];
    var source = metodologia === 'Presencial' ? cursosPresenciais : allCursos;

    if (cursosFixos[metodologia]) {
      var ids = cursosFixos[metodologia];
      var filtered = [];
      ids.forEach(function(id) {
        var found = source.filter(function(c) {
          return c.FL_ATIVO === 1 && c.ID_CURSO === id;
        });
        if (found.length) filtered.push(found[0]);
      });
      cachedCards[metodologia] = filtered;
      return filtered;
    }

    var filtered = source.filter(function(c) {
      return c.FL_ATIVO === 1 && c.METODOLOGIA === metodologia;
    });
    filtered.sort(function(a, b) {
      return a.NM_CURSO.localeCompare(b.NM_CURSO);
    });
    cachedCards[metodologia] = filtered;
    return filtered;
  }

  function renderCards(metodologia) {
    var grid = document.getElementById('cursos-grid');
    var verTodosLink = document.getElementById('cursos-ver-todos-link');
    if (verTodosLink) {
      verTodosLink.href = metodologia === 'Presencial'
        ? 'https://venhaparaunicesumar.com.br/graduacao'
        : 'https://inscricoes.unicesumar.edu.br/';
    }
    var filtered = getFiltered(metodologia);
    grid.innerHTML = '';
    filtered.forEach(function(c) {
      var modalLabel = getModalidadeLabel(c);
      var badge = getBadgeStyle(modalLabel);
      var dur = formatDuration(c.DS_DURACAO);
      var topLine = (c.DS_FORMACAO || c.DS_MODALIDADE || '').toUpperCase();
      if (dur) topLine = topLine ? topLine + ' | ' + dur : dur;

      var card = document.createElement('a');
      card.href = buildURL(c);
      card.target = '_blank';
      card.className = 'curso-card';
      card.innerHTML =
        '<div class="curso-card-top">' +
          (topLine ? '<span class="curso-card-type">' + topLine + '</span>' : '') +
          '<div class="curso-card-badges">' +
            '<span class="curso-card-badge" style="background:' + badge.bg + ';color:' + badge.color + '">' + modalLabel + '</span>' +
            '<span class="curso-card-badge curso-card-badge-met">' + c.METODOLOGIA + '</span>' +
          '</div>' +
        '</div>' +
        '<h3>' + c.NM_CURSO + '</h3>' +
        '<div class="curso-card-btn">Saiba mais &gt;</div>';
      grid.appendChild(card);
    });
    if (filtered.length === 0) {
      grid.innerHTML = '<p style="color:rgba(255,255,255,0.6);text-align:center;width:100%;padding:40px 0;">Nenhum curso disponível nesta modalidade.</p>';
    }
  }

  document.querySelectorAll('.cursos-tab').forEach(function(btn) {
    btn.addEventListener('click', function() {
      document.querySelectorAll('.cursos-tab').forEach(function(b) { b.classList.remove('active'); });
      btn.classList.add('active');
      renderCards(btn.getAttribute('data-tab'));
    });
  });

  renderCards('EAD');
})();
</script>
<div class="sections-swap">
<div class="studioApp">
  <div class="container">
    <div class="studioApp-box">
      <div class="studioApp-img">
        <img src="https://www.unicesumar.edu.br/wp-content/themes/unicesumar/templates/assets_header/img/StudioApp.png" alt="StudeoApp">
      </div>
      <div class="studioApp-content">
        <h2><span>StudeoApp</span></h2>
        <p class="studioApp-subtitle">Nosso ambiente de aprendizagem na palma da sua mão.</p>
        <div class="studioApp-features">
          <div class="studioApp-feature">
            <div class="studioApp-feature-icon">
              <img src="assets/pencil.svg" alt="lápis">
            </div>
            <p>Aplicativo com nota 4,8 nas lojas virtuais.</p>
          </div>
          <div class="studioApp-feature">
            <div class="studioApp-feature-icon">
              <img src="assets/pencil.svg" alt="lápis">
            </div>
            <p>Acesso às suas atividades, aulas, fóruns e palestras.</p>
          </div>
          <div class="studioApp-feature">
            <div class="studioApp-feature-icon">
              <img src="assets/pencil.svg" alt="lápis">
            </div>
            <p>Acesso ao menu financeiro e solicitações acadêmicas.</p>
          </div>
        </div>
        <p class="studioApp-nav-text"><strong>Navegação gratuita</strong> no UniCesumar Studeo APP. Estude com o material didático digital que não consome seu pacote de dados!</p>
      </div>
      <div class="studioApp-buttons">
        <a href="https://play.google.com/store/apps/details?id=br.edu.unicesumar.studeoapp" target="_blank" rel="noopener noreferrer nofollow" class="studioApp-btn">
          <span class="studioApp-btn-icon">G</span>
          <span class="studioApp-btn-text"><small>Acesse:</small><strong>Google Play</strong></span>
        </a>
        <a href="https://apps.apple.com/br/app/studeo/id1473121289" target="_blank" rel="noopener noreferrer nofollow" class="studioApp-btn">
          <span class="studioApp-btn-icon"><img src="assets/apple.svg" alt="WhatsApp"></span>
          <span class="studioApp-btn-text"><small>Acesse:</small><strong>App Store</strong></span>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="mundo-possibilidades">
  <div class="container">
    <h2>Um mundo de <strong>possibilidades</strong> para o <em>seu futuro</em></h2>
    <div class="mundo-tabs">
      <button class="mundo-tab active" data-mundo="ead">EAD</button>
      <button class="mundo-tab" data-mundo="semi">Semipresencial</button>
      <button class="mundo-tab" data-mundo="presencial">Presencial</button>
    </div>
    <div class="mundo-cards" id="mundoCards">
      <a href="https://inscricoes.unicesumar.edu.br/graduacao/" target="_blank" class="mundo-card">
        <img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/img/ead-graduacao.webp" alt="Graduação">
        <div class="mundo-card-label"><span>Graduação</span><span class="mundo-card-arrow">&#10095;</span></div>
      </a>
      <a href="https://inscricoes.unicesumar.edu.br/pos-graduacao/" target="_blank" class="mundo-card">
        <img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/img/ead-pos-graduacao.webp" alt="Pós-Graduação">
        <div class="mundo-card-label"><span>Pós-Graduação</span><span class="mundo-card-arrow">&#10095;</span></div>
      </a>
      <a href="https://inscricoes.unicesumar.edu.br/tecnico/" target="_blank" class="mundo-card">
        <img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/img/ead-tecnicos.webp" alt="Técnicos">
        <div class="mundo-card-label"><span>Técnicos</span><span class="mundo-card-arrow">&#10095;</span></div>
      </a>
      <a href="https://inscricoes.unicesumar.edu.br/profissionalizante/" target="_blank" class="mundo-card">
        <img src="https://inscricoes.unicesumar.edu.br/assets/images/features/home/img/ead-profissionalizante.webp" alt="Profissionalizante">
        <div class="mundo-card-label"><span>Profissionalizante</span><span class="mundo-card-arrow">&#10095;</span></div>
      </a>
    </div>
  </div>
</div>
<script>
(function(){
  var mundoData = {
    ead: [
      { label: 'Graduação', href: 'https://inscricoes.unicesumar.edu.br/graduacao/', img: 'https://inscricoes.unicesumar.edu.br/assets/images/features/home/img/ead-graduacao.webp' },
      { label: 'Pós-Graduação', href: 'https://inscricoes.unicesumar.edu.br/pos-graduacao/', img: 'https://inscricoes.unicesumar.edu.br/assets/images/features/home/img/ead-pos-graduacao.webp' },
      { label: 'Técnicos', href: 'https://inscricoes.unicesumar.edu.br/tecnico/', img: 'https://inscricoes.unicesumar.edu.br/assets/images/features/home/img/ead-tecnicos.webp' },
      { label: 'Profissionalizante', href: 'https://inscricoes.unicesumar.edu.br/profissionalizante/', img: 'https://inscricoes.unicesumar.edu.br/assets/images/features/home/img/ead-profissionalizante.webp' }
    ],
    semi: [
      { label: 'Graduação', href: 'https://inscricoes.unicesumar.edu.br/graduacao/', img: 'https://inscricoes.unicesumar.edu.br/assets/images/features/home/img/semipresencial-graduacao.webp' },
      { label: 'Pós-Graduação', href: 'https://inscricoes.unicesumar.edu.br/pos-graduacao/', img: 'https://inscricoes.unicesumar.edu.br/assets/images/features/home/img/semipresencial-pos-graduacao.webp' }
    ],
    presencial: [
      { label: 'Graduação', href: 'https://venhaparaunicesumar.com.br/graduacao/', img: 'https://inscricoes.unicesumar.edu.br/assets/images/features/home/img/presencial-graduacao.webp' },
      { label: 'Pós-Graduação', href: 'https://venhaparaunicesumar.com.br/inscricao-pos/', img: 'https://inscricoes.unicesumar.edu.br/assets/images/features/home/img/presencial-pos-graduacao.webp' },
      { label: 'Mestrado e Doutorado', href: 'https://venhaparaunicesumar.com.br/graduacao/', img: 'https://inscricoes.unicesumar.edu.br/assets/images/features/home/img/presencial-mestrado.webp' }
    ]
  };

  var container = document.getElementById('mundoCards');

  function renderMundoCards(tab) {
    var items = mundoData[tab];
    container.style.opacity = '0';
    setTimeout(function(){
      container.innerHTML = '';
      items.forEach(function(item){
        var card = document.createElement('a');
        card.href = item.href;
        card.target = '_blank';
        card.className = 'mundo-card';
        card.innerHTML = '<img src="' + item.img + '" alt="' + item.label + '">' +
          '<div class="mundo-card-label"><span>' + item.label + '</span><span class="mundo-card-arrow">&#10095;</span></div>';
        container.appendChild(card);
      });
      container.style.opacity = '1';
    }, 250);
  }

  document.querySelectorAll('.mundo-tab').forEach(function(btn){
    btn.addEventListener('click', function(){
      document.querySelectorAll('.mundo-tab').forEach(function(b){ b.classList.remove('active'); });
      btn.classList.add('active');
      renderMundoCards(btn.getAttribute('data-mundo'));
    });
  });
})();
</script>
</div>
<div class="campanha-enem">
  <section class="banner-wrapper" id="banner-enem" data-analytics-name="banner_enem_home">
    <a href="https://inscricoes.unicesumar.edu.br/graduacao" target="_blank" rel="noopener noreferrer nofollow" class="banner-link" data-analytics="banner_enem" data-destination="siteexterno">
      <picture class="banner-picture">
        <source media="(max-width: 768px)" srcset="https://inscricoes.unicesumar.edu.br/assets/images/features/banners/central/51.2026/banner-campanha-enem-mobile.webp" width="768" height="500">
        <img src="https://inscricoes.unicesumar.edu.br/assets/images/features/banners/central/51.2026/banner-campanha-enem-main.webp" alt="Banner Enem" width="1225" height="350" loading="eager" fetchpriority="high">
      </picture>
    </a>
  </section>
</div>
<div class="formas-de-ingresso">
  <div class="container">
    <h2>Formas de Ingresso</h2>
    <h6>Aqui, você decide como quer começar sua jornada. Explore nossas opções e escolha a que preferir:</h6>
    <div class="ingresso-slider-wrapper">
      <button class="carousel-arrow ingresso-prev" aria-label="Anterior">&#10094;</button>
      <div class="ingresso-slider-outer">
      <div class="ingresso-slider-track">
        <div class="ingresso-card">
          <h3>ENEM</h3>
          <p>Você pode entrar na faculdade sem fazer o vestibular, apenas com a sua nota do último ENEM.</p>
        </div>
        <div class="ingresso-card">
          <h3>Segunda Graduação</h3>
          <p>Já tem um diploma e quer fazer uma nova graduação? Aqui, você elimina as matérias que já estudou no curso anterior.</p>
        </div>
        <div class="ingresso-card">
          <h3>Transferência</h3>
          <p>É possível transferir sua graduação para a universidade nota máxima no MEC e ainda aproveitar as disciplinas que você já cursou.</p>
        </div>
        <div class="ingresso-card">
          <h3>Vestibular</h3>
          <p>Realize uma prova on-line, com 15 questões objetivas de Matemática e Língua Portuguesa. Não tem taxa de inscrição e o resultado é imediato.</p>
        </div>
        <div class="ingresso-card">
          <h3>Portador de Diploma</h3>
          <p>Já tem um diploma e quer fazer uma nova graduação? Aqui, você elimina as matérias que já estudou no curso anterior.</p>
        </div>
      </div>
      </div>
      <button class="carousel-arrow ingresso-next" aria-label="Próximo">&#10095;</button>
    </div>
    <div class="ingresso-dots"></div>
  </div>
</div>
<script>
(function(){
  var track = document.querySelector('.ingresso-slider-track');
  var cards = document.querySelectorAll('.ingresso-card');
  var prev = document.querySelector('.ingresso-prev');
  var next = document.querySelector('.ingresso-next');
  var dotsContainer = document.querySelector('.ingresso-dots');
  var idx = 0;
  var visible = 3;
  var isMobile = false;

  function buildDots() {
    dotsContainer.innerHTML = '';
    for (var i = 0; i < cards.length; i++) {
      var dot = document.createElement('span');
      dot.className = 'ingresso-dot' + (i === 0 ? ' active' : '');
      dot.setAttribute('data-index', i);
      dot.addEventListener('click', function() {
        var target = parseInt(this.getAttribute('data-index'));
        cards[target].scrollIntoView({ behavior: 'smooth', inline: 'start', block: 'nearest' });
      });
      dotsContainer.appendChild(dot);
    }
  }

  function updateDots(activeIdx) {
    var dots = dotsContainer.querySelectorAll('.ingresso-dot');
    for (var i = 0; i < dots.length; i++) {
      dots[i].classList.toggle('active', i === activeIdx);
    }
  }

  function getVisible() {
    if (window.innerWidth <= 768) return 1;
    if (window.innerWidth <= 991) return 2;
    return 3;
  }

  function checkMobile() {
    return window.innerWidth <= 768;
  }

  function updateDesktop() {
    visible = getVisible();
    var max = Math.max(0, cards.length - visible);
    if (idx > max) idx = max;
    var gap = 20;
    var card = track.querySelector('.ingresso-card');
    var cardW = card.offsetWidth + gap;
    track.style.transform = 'translateX(-' + (idx * cardW) + 'px)';
    if (idx === 0) { prev.classList.remove('active'); } else { prev.classList.add('active'); }
    if (idx >= max) { next.classList.remove('active'); } else { next.classList.add('active'); }
  }

  function init() {
    var wasMobile = isMobile;
    isMobile = checkMobile();

    if (isMobile) {
      track.style.transform = '';
      buildDots();
      updateDotsFromScroll();
    } else {
      dotsContainer.innerHTML = '';
      updateDesktop();
    }
  }

  function updateDotsFromScroll() {
    if (!isMobile || cards.length === 0) return;
    var scrollLeft = track.scrollLeft;
    var cardW = cards[0].offsetWidth + 16;
    var active = Math.round(scrollLeft / cardW);
    if (active < 0) active = 0;
    if (active >= cards.length) active = cards.length - 1;
    updateDots(active);
  }

  track.addEventListener('scroll', function() {
    if (isMobile) updateDotsFromScroll();
  });

  prev.addEventListener('click', function(){ idx--; updateDesktop(); });
  next.addEventListener('click', function(){ idx++; updateDesktop(); });
  window.addEventListener('resize', init);
  init();
})();
</script>
<div class="duvidas-frequentes fac-drop">
  <div class="container">
    <h2>Perguntas frequentes</h2>
    <div class="faq-container">
      <div class="faq-item">
        <div class="faq-question">1. Quais são os diferenciais da UniCesumar? <span class="faq-arrow">&#10095;</span></div>
        <div class="faq-answer">
          <p>Na UniCesumar, a gente se orgulha de oferecer muito mais do que ensino de qualidade, <strong>com mais de 30 anos de tradição e nota máxima no MEC</strong>. Além disso, você vai encontrar uma <strong>infraestrutura moderna</strong>, com <strong>laboratórios super bem equipados e espaços pensados para práticas que fazem a diferença na sua formação</strong>. E se você prefere flexibilidade, o <strong>Studeo App</strong> permite estudar de onde estiver, com toda a praticidade que o EAD/Semipresencial oferece.</p>
          <p>Outro ponto que vale destacar é o nosso <strong>atendimento personalizado</strong>. Estamos ao seu lado <strong>em todas as etapas da sua jornada acadêmica</strong>, garantindo que sua experiência seja completa e satisfatória.</p>
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-question">2. Quais áreas de conhecimento e modalidades de ensino a UniCesumar oferece? <span class="faq-arrow">&#10095;</span></div>
        <div class="faq-answer">
          <p>Temos cursos em várias áreas do conhecimento: <a href="https://inscricoes.unicesumar.edu.br/area/engenharias-e-arquitetura" target="_blank" rel="noopener noreferrer nofollow">Engenharias e Arquitetura</a>, <a href="https://inscricoes.unicesumar.edu.br/area/tecnologia" target="_blank" rel="noopener noreferrer nofollow">Tecnologia</a>, <a href="https://inscricoes.unicesumar.edu.br/area/saude-e-bem-estar" target="_blank" rel="noopener noreferrer nofollow">Saúde e Bem-Estar</a>, <a href="https://inscricoes.unicesumar.edu.br/area/gestao-e-negocios" target="_blank" rel="noopener noreferrer nofollow">Gestão e Negócios</a>, <a href="https://inscricoes.unicesumar.edu.br/area/artes-e-design" target="_blank" rel="noopener noreferrer nofollow">Artes e Design</a>, <a href="https://inscricoes.unicesumar.edu.br/area/comunicacao" target="_blank" rel="noopener noreferrer nofollow">Comunicação</a>, <a href="https://inscricoes.unicesumar.edu.br/area/juridico-e-seguranca" target="_blank" rel="noopener noreferrer nofollow">Jurídico e Segurança</a>, entre outras.</p>
          <p>As opções abrangem <strong>graduação, pós-graduação, cursos técnicos e profissionalizantes</strong>. Você pode escolher a modalidade que mais combina com seu estilo de vida – presencial ou EAD/Semipresencial.</p>
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-question">3. Como é o atendimento ao aluno na UniCesumar? <span class="faq-arrow">&#10095;</span></div>
        <div class="faq-answer">
          <p>Na UniCesumar, o <strong>atendimento ao aluno é personalizado</strong> e acompanha o estudante em todas as etapas da sua jornada acadêmica, desde o primeiro contato até a conclusão do curso. Antes da matrícula, oferecemos suporte para esclarecer dúvidas e fornecer todas as informações necessárias.</p>
          <p>Durante o curso, tanto na modalidade EAD quanto presencial, os alunos têm acesso a <strong>tutores, professores e coordenadores</strong>, que estão sempre disponíveis para tirar dúvidas e oferecer feedbacks construtivos. Esse acompanhamento contínuo garante que cada aluno receba todo o suporte necessário para alcançar seus objetivos acadêmicos com sucesso.</p>
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-question">4. Os diplomas dos cursos presenciais e EAD têm a mesma validade? <span class="faq-arrow">&#10095;</span></div>
        <div class="faq-answer">
          <p><strong>Os diplomas da UniCesumar, seja de cursos presenciais ou EAD/Semipresencial, têm a mesma validade e são reconhecidos pelo MEC</strong>. Isso vale também para as certificações de nossos cursos técnicos e profissionalizantes.</p>
          <p>Independentemente da modalidade escolhida, o aluno terá um diploma ou certificado com <strong>validade nacional</strong>, podendo utilizá-lo para ingressar no mercado de trabalho ou continuar seus estudos em <strong>cursos de pós-graduação, mestrado e doutorado</strong>.</p>
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-question">5. A UniCesumar oferece suporte para inserção no mercado de trabalho? <span class="faq-arrow">&#10095;</span></div>
        <div class="faq-answer">
          <p><strong>Estamos conectados com o mercado de trabalho</strong> e sempre buscamos criar oportunidades para você se destacar profissionalmente. Promovemos eventos como feiras de recrutamento e <strong>mantemos parcerias com empresas</strong> que oferecem estágios e programas de trainee.</p>
          <p>Além disso, nossas <strong>atividades complementares ajudam você a desenvolver habilidades práticas e viver experiências reais da sua profissão</strong>, aumentando ainda mais suas chances de sucesso.</p>
        </div>
      </div>
      <div class="faq-item">
        <div class="faq-question">6. Como posso me inscrever nos cursos gratuitos e com certificação da UniCesumar no YouTube? <span class="faq-arrow">&#10095;</span></div>
        <div class="faq-answer">
          <p>Para se inscrever nos cursos gratuitos da UniCesumar, você precisa acessar a <a href="https://vempra.unicesumar.edu.br/cursos-gratuitos-youtube/" target="_blank" rel="noopener noreferrer nofollow">página de inscrição oficial</a>, preencher o formulário com suas informações e enviar os dados. Após a inscrição, você terá acesso a até 8 cursos on-line com até 12 horas de duração, incluindo videoaulas dinâmicas e um e-book para estudo. Ao concluir o curso, você receberá um certificado gratuito.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="ha-mais-de-35-anos">
  <div class="container">
    <h2 class="hm35-title">Há mais de 35 anos, <strong>mudamos<br class="desktop-br"> realidades</strong> com <strong>educação de excelência</strong></h2>
    <div class="hm35-carousel-wrapper">
      <button class="carousel-arrow hm35-prev" aria-label="Anterior">&#10094;</button>
      <div class="hm35-grid">
      <div class="hm35-card">
        <div class="hm35-icon"><img src="cursos-de-graduacao.svg" alt="Mais de 120 cursos de graduação"></div>
        <h3>+ de 120</h3>
        <p>cursos de graduação</p>
      </div>
      <div class="hm35-card">
        <div class="hm35-icon"><img src="cursos-de-pos-graduacao.svg" alt="Mais de 100 cursos de pós-graduação"></div>
        <h3>+ de 100</h3>
        <p>cursos de pós-graduação</p>
      </div>
      <div class="hm35-card">
        <div class="hm35-icon"><img src="alunos-indicam.svg" alt="90% dos alunos indicam"></div>
        <h3>90%</h3>
        <p>dos alunos indicam</p>
      </div>
      <div class="hm35-card">
        <div class="hm35-icon"><img src="manual-didatico.svg" alt="Material didático exclusivo e gratuito"></div>
        <p>Material didático</p>
        <h3>exclusivo e gratuito</h3>
      </div>
      <div class="hm35-card">
        <div class="hm35-icon"><img src="alunos-ead-formados.svg" alt="Mais de 150 mil alunos EAD formados"></div>
        <h3>+ de 150 mil</h3>
        <p>alunos EAD formados</p>
      </div>
      <div class="hm35-card">
        <div class="hm35-icon"><img src="alunos-empregados.svg" alt="88% dos alunos empregados"></div>
        <h3>88% <span class="hm35-inline">dos alunos empregados</span></h3>
      </div>
      <div class="hm35-card">
        <div class="hm35-icon"><img src="android-e-ios.svg" alt="Aplicativo exclusivo para Android e iOS"></div>
        <p>Aplicativo exclusivo para</p>
        <h3>Android e IOS</h3>
      </div>
      <div class="hm35-card">
        <div class="hm35-icon"><img src="professores-e-mestre-doutores.svg" alt="80% de professores e mestres doutores"></div>
        <h3>80% <span class="hm35-inline">de professores e mestres doutores</span></h3>
      </div>
      <div class="hm35-card">
        <div class="hm35-icon"><img src="polos-no-brasil.svg" alt="Mais de 1.300 polos no Brasil e no exterior"></div>
        <h3>+ de 1.300 polos</h3>
        <p>no Brasil e no exterior</p>
      </div>
      <div class="hm35-card">
        <div class="hm35-icon"><img src="maxima-no-mec.svg" alt="Universidade nota máxima no MEC"></div>
        <p>Universidade nota</p>
        <h3>Máxima no MEC</h3>
      </div>
      <div class="hm35-card">
        <div class="hm35-icon"><img src="alunos.svg" alt="Mais de 400 mil alunos"></div>
        <h3>+ de 400 mil</h3>
        <p>alunos</p>
      </div>
      </div>
      <button class="carousel-arrow hm35-next" aria-label="Próximo">&#10095;</button>
    </div>
    <div class="hm35-dots"></div>
  </div>
</div>
<script>
(function(){
  var grid = document.querySelector('.hm35-grid');
  var cards = grid.querySelectorAll('.hm35-card');
  var prev = document.querySelector('.hm35-prev');
  var next = document.querySelector('.hm35-next');
  var dotsC = document.querySelector('.hm35-dots');
  var perPage = 4;
  var page = 0;
  var totalPages = Math.ceil(cards.length / perPage);
  var isAnim = false;

  function isMobile() { return window.innerWidth <= 768; }

  function buildDots() {
    dotsC.innerHTML = '';
    for (var i = 0; i < totalPages; i++) {
      var d = document.createElement('span');
      d.className = 'hm35-dot' + (i === 0 ? ' active' : '');
      d.setAttribute('data-p', i);
      d.addEventListener('click', function(){ goTo(parseInt(this.getAttribute('data-p')), true); });
      dotsC.appendChild(d);
    }
  }

  function updateArrows() {
    if (page === 0) { prev.classList.remove('active'); } else { prev.classList.add('active'); }
    if (page >= totalPages - 1) { next.classList.remove('active'); } else { next.classList.add('active'); }
  }

  function updateDots() {
    dotsC.querySelectorAll('.hm35-dot').forEach(function(d, i){
      d.classList.toggle('active', i === page);
    });
  }

  function goTo(p, animate) {
    if (p < 0 || p >= totalPages || isAnim) return;
    var dir = p > page ? 1 : -1;
    var shouldAnimate = animate !== false && p !== page;

    if (shouldAnimate) {
      isAnim = true;
      cards.forEach(function(c){ c.style.transition = 'transform 0.3s ease, opacity 0.3s ease'; c.style.transform = 'translateX('+(dir*-100)+'%)'; c.style.opacity = '0'; });
      setTimeout(function(){
        var s = p * perPage, e = s + perPage;
        cards.forEach(function(c, i){ c.style.transition = 'none'; c.style.display = (i >= s && i < e) ? '' : 'none'; c.style.transform = 'translateX('+(dir*100)+'%)'; c.style.opacity = '0'; });
        requestAnimationFrame(function(){ requestAnimationFrame(function(){
          cards.forEach(function(c){ c.style.transition = 'transform 0.3s ease, opacity 0.3s ease'; c.style.transform = 'translateX(0)'; c.style.opacity = '1'; });
          setTimeout(function(){ isAnim = false; }, 300);
        }); });
      }, 300);
    } else {
      var s = p * perPage, e = s + perPage;
      cards.forEach(function(c, i){ c.style.display = (i >= s && i < e) ? '' : 'none'; c.style.transform = ''; c.style.opacity = ''; c.style.transition = ''; });
    }

    page = p;
    updateArrows();
    updateDots();
  }

  function init() {
    if (isMobile()) {
      totalPages = Math.ceil(cards.length / perPage);
      page = 0;
      buildDots();
      goTo(0, false);
    } else {
      cards.forEach(function(c){ c.style.display = ''; c.style.transform = ''; c.style.opacity = ''; c.style.transition = ''; });
      dotsC.innerHTML = '';
      prev.classList.remove('active');
      next.classList.remove('active');
    }
  }

  prev.addEventListener('click', function(){ if (page > 0) goTo(page - 1, true); });
  next.addEventListener('click', function(){ if (page < totalPages - 1) goTo(page + 1, true); });

  var tx = 0;
  var section = document.querySelector('.ha-mais-de-35-anos');
  section.addEventListener('touchstart', function(e){ tx = e.changedTouches[0].screenX; }, {passive:true});
  section.addEventListener('touchend', function(e){
    var diff = tx - e.changedTouches[0].screenX;
    if (isMobile() && Math.abs(diff) > 50) {
      if (diff > 0 && page < totalPages - 1) goTo(page + 1, true);
      else if (diff < 0 && page > 0) goTo(page - 1, true);
    }
  }, {passive:true});

  init();
  window.addEventListener('resize', init);
})();
</script>

<!-- Vídeos Carousel - Mobile Only -->
<section class="videos-mobile">
  <div class="container">
    <div class="videos-carousel-wrapper">
      <button class="carousel-arrow videos-prev">&#10094;</button>
      <div class="videos-carousel-track">
        <div class="video-slide active">
          <a href="https://www.youtube.com/watch?v=nj3mlzz1Tno" target="_blank" class="video-thumb">
            <img src="https://img.youtube.com/vi/nj3mlzz1Tno/hqdefault.jpg" alt="Vídeo 1">
            <span class="video-play-btn">
              <svg width="48" height="48" viewBox="0 0 68 48"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.13 34 0 34 0S12.21.13 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C.06 13.05 0 24 0 24s.06 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.87 34 48 34 48s21.79-.13 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C67.94 34.95 68 24 68 24s-.06-10.95-1.48-16.26z" fill="red"/><path d="M45 24L27 14v20" fill="white"/></svg>
            </span>
          </a>
        </div>
        <div class="video-slide">
          <a href="https://www.youtube.com/watch?v=tJugko3iO0o" target="_blank" class="video-thumb">
            <img src="https://img.youtube.com/vi/tJugko3iO0o/hqdefault.jpg" alt="Vídeo 2">
            <span class="video-play-btn">
              <svg width="48" height="48" viewBox="0 0 68 48"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.13 34 0 34 0S12.21.13 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C.06 13.05 0 24 0 24s.06 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.87 34 48 34 48s21.79-.13 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C67.94 34.95 68 24 68 24s-.06-10.95-1.48-16.26z" fill="red"/><path d="M45 24L27 14v20" fill="white"/></svg>
            </span>
          </a>
        </div>
        <div class="video-slide">
          <a href="https://www.youtube.com/watch?v=vQYHRS6w5Es" target="_blank" class="video-thumb">
            <img src="https://img.youtube.com/vi/vQYHRS6w5Es/hqdefault.jpg" alt="Vídeo 3">
            <span class="video-play-btn">
              <svg width="48" height="48" viewBox="0 0 68 48"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.13 34 0 34 0S12.21.13 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C.06 13.05 0 24 0 24s.06 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.87 34 48 34 48s21.79-.13 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C67.94 34.95 68 24 68 24s-.06-10.95-1.48-16.26z" fill="red"/><path d="M45 24L27 14v20" fill="white"/></svg>
            </span>
          </a>
        </div>
        <div class="video-slide">
          <a href="https://www.youtube.com/watch?v=MbwQhgefkVI" target="_blank" class="video-thumb">
            <img src="https://img.youtube.com/vi/MbwQhgefkVI/hqdefault.jpg" alt="Vídeo 4">
            <span class="video-play-btn">
              <svg width="48" height="48" viewBox="0 0 68 48"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.13 34 0 34 0S12.21.13 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C.06 13.05 0 24 0 24s.06 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.87 34 48 34 48s21.79-.13 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C67.94 34.95 68 24 68 24s-.06-10.95-1.48-16.26z" fill="red"/><path d="M45 24L27 14v20" fill="white"/></svg>
            </span>
          </a>
        </div>
        <div class="video-slide">
          <a href="https://www.youtube.com/watch?v=jHCcgZZ56c4" target="_blank" class="video-thumb">
            <img src="https://img.youtube.com/vi/jHCcgZZ56c4/hqdefault.jpg" alt="Vídeo 5">
            <span class="video-play-btn">
              <svg width="48" height="48" viewBox="0 0 68 48"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.13 34 0 34 0S12.21.13 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C.06 13.05 0 24 0 24s.06 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.87 34 48 34 48s21.79-.13 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C67.94 34.95 68 24 68 24s-.06-10.95-1.48-16.26z" fill="red"/><path d="M45 24L27 14v20" fill="white"/></svg>
            </span>
          </a>
        </div>
      </div>
      <button class="carousel-arrow videos-next active">&#10095;</button>
    </div>
  </div>
</section>
<script>
(function() {
  var section = document.querySelector('.videos-mobile');
  if (!section) return;
  var slides = section.querySelectorAll('.video-slide');
  var prev = section.querySelector('.videos-prev');
  var next = section.querySelector('.videos-next');
  var current = 0;
  var total = slides.length;

  function show(idx) {
    slides.forEach(function(s) { s.classList.remove('active'); });
    slides[idx].classList.add('active');
    current = idx;
    prev.classList.toggle('active', current > 0);
    next.classList.toggle('active', current < total - 1);
  }

  prev.addEventListener('click', function() { if (current > 0) show(current - 1); });
  next.addEventListener('click', function() { if (current < total - 1) show(current + 1); });

  var startX = 0;
  var track = section.querySelector('.videos-carousel-track');
  track.addEventListener('touchstart', function(e) { startX = e.touches[0].clientX; });
  track.addEventListener('touchend', function(e) {
    var diff = startX - e.changedTouches[0].clientX;
    if (diff > 40 && current < total - 1) show(current + 1);
    if (diff < -40 && current > 0) show(current - 1);
  });

  show(0);
})();
</script>

<footer>
  <div class="desktop">
    <div class="footer-contact">
      <div class="container">
        <div class="footer-contact-inner">
          <div class="footer-contact-item">
            <img src="assets/whatsapp.svg" alt="WhatsApp">
            <div><small>Contato/Whatsapp</small><strong>(47) 3301-6100</strong></div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-main">
      <div class="container">
        <div class="footer-columns">
          <div class="footer-col">
            <h6><span class="footer-arrow">&#10095;</span> Institucional</h6>
            <ul>
              <li><a href="https://www.unicesumar.edu.br/conheca-a-unicesumar/">Conheça a Unicesumar</a></li>
              <li><a href="https://www.unicesumar.edu.br/conheca-a-unicesumar/fundacao-unicesumar/">Fundação UniCesumar</a></li>
              <li><a href="https://www.unicesumar.edu.br/presencial/comunidade/">Comunidade</a></li>
              <li><a href="https://www.unicesumar.edu.br/atendimento/">Central de Atendimento</a></li>
              <li><a href="https://www.unicesumar.edu.br/assessoria-de-imprensa/">Imprensa</a></li>
              <li><a href="https://www.unicesumar.edu.br/noticias/">Notícias</a></li>
              <li><a href="https://www.unicesumar.edu.br/blog/">Blog</a></li>
              <li><a href="https://www.unicesumar.edu.br/valida-diploma/">Consultar Diploma</a></li>
              <li><a href="https://www.unicesumar.edu.br/cpa/">Comissão Própria de Avaliação</a></li>
              <li><a href="https://vitru.outbuycenter.com.br/obc/fornecedor/">Seja nosso fornecedor</a></li>
              <li><a href="https://carreira.inhire.com.br/carreiras/vitru">Trabalhe na UniCesumar</a></li>
              <li><a href="https://www.unicesumar.edu.br/politica-de-privacidade/">Política de Privacidade</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h6><span class="footer-arrow">&#10095;</span> Educação Presencial</h6>
            <ul>
              <li><a href="https://venhaparaunicesumar.com.br/graduacao">Graduação</a></li>
              <li><a href="https://venhaparaunicesumar.com.br/pos-graduacao">Pós-graduação</a></li>
              <li><a href="https://www.unicesumar.edu.br/mestrado-e-doutorado/">Mestrados e Doutorado</a></li>
              <li><a href="https://www.unicesumar.edu.br/pesquisa/">Pró-Reitoria de Pesquisa</a></li>
              <li><a href="https://www.unicesumar.edu.br/vestibular/processo-seletivo-de-verao-2026/">Processo seletivo</a></li>
              <li><a href="https://www.unicesumar.edu.br/presencial/regulamentos/">Regulamentos</a></li>
            </ul>
            <h6 style="margin-top: 60px;"><span class="footer-arrow">&#10095;</span> Cursos mais procurados</h6>
            <ul>
              <li><a href="https://venhaparaunicesumar.com.br/graduacao/medicina">Medicina</a></li>
              <li><a href="https://venhaparaunicesumar.com.br/graduacao/direito">Direito</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/graduacao/administracao">Administração</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/graduacao/nutricao">Nutrição</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/">Todos os cursos</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h6><span class="footer-arrow">&#10095;</span> Educação a Distância</h6>
            <ul>
              <li><a href="https://inscricoes.unicesumar.edu.br/graduacao/">Graduação</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/pos-graduacao/">Pós-Graduação</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/profissionalizante/">Profissionalizantes</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/tecnico/">Técnicos</a></li>
              <li><a href="https://www.unicesumar.edu.br/ead/regulamentos/">Regulamentos do EAD</a></li>
              <li><a href="https://www.unicesumar.edu.br/ead/campus-polos-e-unidades/">Unidades e polos</a></li>
            </ul>
            <h6 style="margin-top: 60px;"><span class="footer-arrow">&#10095;</span> Áreas de interesse</h6>
            <ul>
              <li><a href="https://inscricoes.unicesumar.edu.br/area/meio-ambiente/graduacao">Agricultura e sustentabilidade</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/area/tecnologia/graduacao">Ciência e tecnologia</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/area/comunicacao/graduacao">Ciências sociais e serviços</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/">Cursos de extensão</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/area/educacao/graduacao">Educação</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/area/engenharias/graduacao">Engenharias</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/area/direito/graduacao">Jurídica</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/pos-graduacao/">MBA</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/area/negocios/graduacao">Negócios</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/area/saude/graduacao">Psicologia</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/area/saude/graduacao">Saúde</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/">Todos os cursos</a></li>
            </ul>
          </div>
          <div class="footer-col footer-col-mec">
            <div class="selo-mec">
              <p>Consulte aqui o cadastro da instituição no Sitema e-MEC</p>
              <img src="https://www.unicesumar.edu.br/wp-content/themes/unicesumar/templates/assets_header/img/selo-mec.png" alt="e-MEC">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-actions">
      <div class="container">
        <div class="footer-actions-inner">
          <div class="footer-actions-buttons">
            <a href="https://www.unicesumar.edu.br/downloads/" class="footer-action-btn"><img src="assets/calendario.svg" alt="Calendário acadêmico"> Calendário acadêmico</a>
            <a href="https://docente.unicesumar.edu.br/lyceump/donline/Logon.asp" class="footer-action-btn"><img src="assets/academico.svg" alt="Acesso acadêmico"> Acesso acadêmico</a>
            <a href="https://www.unicesumar.edu.br/mapa-do-site/" class="footer-action-btn"><img src="assets/mapa.svg" alt="Mapa do site"> Mapa do site</a>
          </div>
          <a id="scrollTopButton" href="#" class="footer-back-top">Voltar ao topo <span>&#10095;</span></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="footer-bottom-inner">
          <img src="assets/unicesumar-brand.svg" alt="UniCesumar" class="footer-logo">
          <div class="footer-social-area">
            <span>Acompanhe nas redes</span>
            <div class="footer-social-icons">
              <a href="https://www.facebook.com/unaboraunicesumar" target="_blank" aria-label="Facebook">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
              </a>
              <a href="https://twitter.com/unaboraunicesumar" target="_blank" aria-label="X">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
              </a>
              <a href="https://www.instagram.com/unaboraunicesumar" target="_blank" aria-label="Instagram">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
              </a>
              <a href="https://www.linkedin.com/school/unaboraunicesumar" target="_blank" aria-label="LinkedIn">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
              </a>
              <a href="https://www.youtube.com/unaboraunicesumar" target="_blank" aria-label="YouTube">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
              </a>
              <a href="https://www.tiktok.com/@unicesumar" target="_blank" aria-label="TikTok">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mobile fac-drop">
    <div class="container">
      <div class="footer-mobile-contact">
        <a href="https://wa.me/5544991036999" target="_blank" class="footer-mobile-whatsapp">
          <img src="assets/whatsapp.svg" alt="WhatsApp">
          <div>
            <small>Contato/Whatsapp</small>
            <strong>(44) 99103-6999</strong>
          </div>
        </a>
      </div>

      <div class="faq-container">
        <div class="faq-item">
          <div class="faq-question"><span class="faq-arrow">&#10095;</span> Institucional</div>
          <div class="faq-answer">
            <ul>
              <li><a href="https://www.unicesumar.edu.br/conheca-a-unicesumar/">Conheça a UniCesumar</a></li>
              <li><a href="https://www.unicesumar.edu.br/conheca-a-unicesumar/fundacao-unicesumar/">Fundação UniCesumar</a></li>
              <li><a href="https://www.unicesumar.edu.br/presencial/comunidade/">Comunidade</a></li>
              <li><a href="https://www.unicesumar.edu.br/atendimento/">Central de Atendimento</a></li>
              <li><a href="https://www.unicesumar.edu.br/assessoria-de-imprensa/">Imprensa</a></li>
              <li><a href="https://www.unicesumar.edu.br/noticias/">Notícias</a></li>
              <li><a href="https://www.unicesumar.edu.br/blog/">Blog</a></li>
              <li><a href="https://www.unicesumar.edu.br/valida-diploma/">Consultar Diploma</a></li>
              <li><a href="https://www.unicesumar.edu.br/cpa/">Comissão Própria de Avaliação</a></li>
              <li><a href="https://vitru.outbuycenter.com.br/obc/fornecedor/">Seja nosso fornecedor</a></li>
              <li><a href="https://carreira.inhire.com.br/carreiras/vitru">Trabalhe na UniCesumar</a></li>
              <li><a href="https://www.unicesumar.edu.br/politica-de-privacidade/">Política de Privacidade</a></li>
            </ul>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question"><span class="faq-arrow">&#10095;</span> Educação Presencial</div>
          <div class="faq-answer">
            <ul>
              <li><a href="https://venhaparaunicesumar.com.br/graduacao">Graduação</a></li>
              <li><a href="https://venhaparaunicesumar.com.br/pos-graduacao">Pós-graduação</a></li>
              <li><a href="https://www.unicesumar.edu.br/mestrado-e-doutorado/">Mestrado e Doutorado</a></li>
              <li><a href="https://www.unicesumar.edu.br/pesquisa/">Pró-Reitoria de Pesquisa</a></li>
              <li><a href="https://www.unicesumar.edu.br/vestibular/processo-seletivo-de-verao-2026/">Processo seletivo</a></li>
              <li><a href="https://www.unicesumar.edu.br/presencial/regulamentos/">Regulamentos</a></li>
            </ul>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question"><span class="faq-arrow">&#10095;</span> Cursos mais procurados</div>
          <div class="faq-answer">
            <ul>
              <li><a href="https://venhaparaunicesumar.com.br/graduacao/medicina">Medicina</a></li>
              <li><a href="https://venhaparaunicesumar.com.br/graduacao/direito">Direito</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/graduacao/administracao">Administração</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/graduacao/nutricao">Nutrição</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/">Todos os cursos</a></li>
            </ul>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question"><span class="faq-arrow">&#10095;</span> Educação a Distância</div>
          <div class="faq-answer">
            <ul>
              <li><a href="https://inscricoes.unicesumar.edu.br/graduacao/">Graduação</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/pos-graduacao/">Pós-graduação</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/profissionalizante/">Profissionalizantes</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/tecnico/">Técnicos</a></li>
              <li><a href="https://www.unicesumar.edu.br/ead/campus-polos-e-unidades/">Unidades e polos</a></li>
              <li><a href="https://www.unicesumar.edu.br/ead/regulamentos/">Regulamentos do EAD</a></li>
            </ul>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question"><span class="faq-arrow">&#10095;</span> Áreas de interesse</div>
          <div class="faq-answer">
            <ul>
              <li><a href="https://inscricoes.unicesumar.edu.br/area/meio-ambiente/graduacao">Agricultura e sustentabilidade</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/area/tecnologia/graduacao">Ciência e tecnologia</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/area/comunicacao/graduacao">Ciências sociais e serviços</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/">Cursos de extensão</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/area/educacao/graduacao">Educação</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/area/engenharias/graduacao">Engenharias</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/area/direito/graduacao">Jurídica</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/pos-graduacao/">MBA</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/area/negocios/graduacao">Negócios</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/area/saude/graduacao">Psicologia</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/area/saude/graduacao">Saúde</a></li>
              <li><a href="https://inscricoes.unicesumar.edu.br/">Todos os cursos</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="footer-mobile-mec">
        <div class="selo-mec">
          <p>Consulte aqui o cadastro da instituição no Sitema e-MEC</p>
          <img src="https://www.unicesumar.edu.br/wp-content/themes/unicesumar/templates/assets_header/img/selo-mec.png" alt="e-MEC">
        </div>
      </div>

      <div class="footer-mobile-actions">
        <a href="https://www.unicesumar.edu.br/downloads/" class="footer-action-btn"><img src="assets/calendario.svg" alt="Calendário acadêmico"> Calendário acadêmico</a>
        <a href="https://docente.unicesumar.edu.br/lyceump/donline/Logon.asp" class="footer-action-btn"><img src="assets/academico.svg" alt="Acesso acadêmico"> Acesso acadêmico</a>
        <a href="https://www.unicesumar.edu.br/mapa-do-site/" class="footer-action-btn"><img src="assets/mapa.svg" alt="Mapa do site"> Mapa do site</a>
      </div>

      <div class="footer-mobile-bottom">
        <div class="footer-mobile-logo">
          <img src="assets/unicesumar-brand.svg" alt="UniCesumar" class="footer-logo">
        </div>
        <div class="footer-mobile-social">
          <span>Acompanhe nas redes</span>
          <div class="footer-social-icons">
            <a href="https://www.linkedin.com/school/unaboraunicesumar" target="_blank" aria-label="LinkedIn">
              <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
            </a>
            <a href="https://www.instagram.com/unaboraunicesumar" target="_blank" aria-label="Instagram">
              <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
            </a>
            <a href="https://twitter.com/unaboraunicesumar" target="_blank" aria-label="X">
              <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
            </a>
            <a href="https://www.facebook.com/unaboraunicesumar" target="_blank" aria-label="Facebook">
              <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            </a>
            <a href="https://www.youtube.com/unaboraunicesumar" target="_blank" aria-label="YouTube">
              <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            </a>
            <a href="https://www.tiktok.com/@unicesumar" target="_blank" aria-label="TikTok">
              <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
            </a>
          </div>
        </div>
        <a href="#" class="footer-mobile-back-top">Voltar ao topo <span>&#10095;</span></a>
      </div>
    </div>
  </div>
</footer>
<!-- OmniChat web-chat widget --> <script> window.omnichatConfig = { retailerId: "7fH7WDhxqV" }; </script> <script defer type="text/javascript"> !function() { var t = document.createElement("script"); t.type = "text/javascript"; t.defer = true; t.src = "https://static.omni.chat/web-chat/web-chat.min.js?retailerId=7fH7WDhxqV"; t.onload = function() { OmniChatWebChat.init(window.omnichatConfig); }; var e = document.getElementsByTagName("script")[0]; e.parentNode.insertBefore(t, e); }(); </script> <!-- OmniChat web-chat widget -->
</body>
</html>


<script>
  $(document).ready(function() {
      $('#showBoxNicho1').click(function() {
          $('#boxNicho1').css('display', 'flex');
          $('#boxNicho2').hide(); 
          $('#boxNicho3').hide(); 
          $('a.nichos').removeClass('active');
          $(this).addClass('active');
      });

      $('#showBoxNicho2').click(function() {
          $('#boxNicho2').css('display', 'flex');
          $('#boxNicho1').hide();
          $('#boxNicho3').hide(); 
          $('a.nichos').removeClass('active');
          $(this).addClass('active');
      });

      $('#showBoxNicho3').click(function() {
          $('#boxNicho3').css('display', 'flex');
          $('#boxNicho2').hide();
          $('#boxNicho1').hide(); 
          $('a.nichos').removeClass('active');
          $(this).addClass('active');
      });
  });
  $(document).ready(function(){
      $('.faq-question').click(function(){
          $('.faq-answer').not($(this).next()).slideUp();
          $('.faq-arrow').not($(this).find('.faq-arrow')).removeClass('rotate');
          $(this).next().slideToggle();
          $(this).find('.faq-arrow').toggleClass('rotate');
      });
  });
  $(document).ready(function() {
    $('#scrollTopButton').click(function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 400);
    });
  });
</script>
<script>
  var urlagora = window.location.href;
document.addEventListener("DOMContentLoaded", () => {

  const track = document.querySelector("#banners .carousel-track");
  const btnNext = document.getElementById("arrow-right");
  const btnPrev = document.getElementById("arrow-left");
  const dotsContainer = document.querySelector(".banner-dots");

  let currentIndex = 0;
  let slides = [];
  let dots = [];
  let isAnimating = false;
  let autoplayTimer;

  function isDateTimeWithinRange(start, end) {
    const now = new Date();
    return now >= new Date(start) && now <= new Date(end);
  }

  function buildDots() {
    dotsContainer.innerHTML = "";
    dots = [];
    slides.forEach((_, i) => {
      const dot = document.createElement("span");
      dot.className = "banner-dot" + (i === 0 ? " active" : "");
      dot.addEventListener("click", () => {
        updateSlide(i);
        resetAutoplay();
      });
      dotsContainer.appendChild(dot);
      dots.push(dot);
    });
  }

  function updateDots() {
    dots.forEach((d, i) => {
      d.classList.toggle("active", i === currentIndex);
    });
  }

  function buildSlides() {
    track.innerHTML = "";
    let index = 0;

    lerBannerv2.forEach(banner => {
      if (!isDateTimeWithinRange(banner.startDateTime, banner.endDateTime)) return;

      const slide = document.createElement("div");
      slide.className = "slide";

      const preload = index === 0 ? 'loading="eager" fetchpriority="high"' : 'loading="lazy"';

      slide.innerHTML = banner.redireciona
        ? `
          <a href="${banner.redireciona}" target="_blank" rel="noopener noreferrer nofollow"> 
            <img ${preload} width="1920" height="480" src="${banner.urlDesk}" alt="${banner.imgAlt}">
            <img class="mobile-only" ${preload} width="768" height="500" src="${banner.urlMob}" alt="${banner.imgAlt}">
          </a>`
        : `
          <img ${preload} width="1920" height="480" src="${banner.urlDesk}" alt="${banner.imgAlt}">
          <img class="mobile-only" ${preload} width="768" height="500" src="${banner.urlMob}" alt="${banner.imgAlt}">
        `;

      track.appendChild(slide);
      index++;
    });

    slides = document.querySelectorAll(".slide");
  }

  function updateSlide(index) {
    if (isAnimating || slides.length === 0) return;

    isAnimating = true;
    currentIndex = (index + slides.length) % slides.length;
    track.style.transform = `translateX(-${currentIndex * 100}%)`;
    updateDots();

    setTimeout(() => isAnimating = false, 450);
  }

  function nextSlide() {
    updateSlide(currentIndex + 1);
    resetAutoplay();
  }

  function prevSlide() {
    updateSlide(currentIndex - 1);
    resetAutoplay();
  }

  function startAutoplay() {
    autoplayTimer = setInterval(() => {
      updateSlide(currentIndex + 1);
    }, 5000);
  }

  function resetAutoplay() {
    clearInterval(autoplayTimer);
    startAutoplay();
  }

  btnNext.addEventListener("click", nextSlide);
  btnPrev.addEventListener("click", prevSlide);

  // INIT
  buildSlides();
  buildDots();
  if (slides.length > 1) {
    btnPrev.classList.add('active');
    btnNext.classList.add('active');
  }
  startAutoplay();

});

</script>