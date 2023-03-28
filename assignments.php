<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/media.css">
    <link rel="stylesheet" href="./css/projects.css">
    <link rel="stylesheet" href="./slick/slick.css">
    <link rel="stylesheet" href="./slick/slick-theme.css">
    <link rel="stylesheet" href="./css/assignments.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon_mb.png">

    <meta name="description" content="For the last 3 decades I have created countless commissioned visual projects.
In the 90's and 00's I communicated mostly via the printed media, I fell in love with the ephemeral aspect of magazines and the audience I could reach outside a white cube. I created visual and installation projects for Italian Vogue, World of Interiors, Hermès, Giorgio Armani, British and French Vogue, New York Times, Jean Paul Gaultier to name a few.">


    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"
/>
    <style ></style>
    <title>Assignments page</title>
</head>
<body>
<?php include_once 'templates/header.php'; ?>

    <main class="main">
        <!-- intro BEGIN -->
        <section id="intro" class="intro">
          <picture class="img-cover intro__hero">
            <img src="img/mex.jpg" alt="Deformers">
          </picture>
          <div class="container-fluid intro__container">
            <div class="intro__content">
              <h1 class="intro__title">assignments</h1>
            </div>
          </div>
          <a href="#intro" class="js-scroll-target scroll-up intro__scroll-up is-hidden">
            <svg width="16" height="38" viewBox="0 0 16 38" xmlns="http://www.w3.org/2000/svg" class="scroll-up__icon">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.68767 6.67492L7.05163 0.310959C7.44216 -0.0795628 8.07532 -0.0795628 8.46584 0.310959L14.8298 6.67492C15.2203 7.06545 15.2203 7.69861 14.8298 8.08913C14.4393 8.47966 13.8061 8.47966 13.4156 8.08913L8.75874 3.43228L8.75874 37.0181L6.75874 37.0181L6.75874 3.43228L2.10188 8.08913C1.71136 8.47966 1.07819 8.47966 0.68767 8.08913C0.297146 7.69861 0.297146 7.06544 0.68767 6.67492Z"/>
            </svg>
          </a>
        </section>
        <!-- intro END -->
        <!-- project-about BEGIN -->
        <div class="project-about">
          <div class="container project-about__container">
            <div class="project-about__content">
              <div class="content project-about__text">
                <p>For the last 3 decades I have created countless commissioned visual projects.
</p>
                <p>In the 90's and 00's I communicated mostly via the printed media, I fell in love 
with the ephemeral aspect of magazines and the audience I could reach outside a white cube. I created visual and installation projects for Italian Vogue, World of Interiors, Hermès, Giorgio Armani, British and French Vogue, New York Times, Jean Paul Gaultier to name a few. In the 10's and 20's I have added animations and the digital creation of image spaces to my means of expression and I am exploring them in the public space, galleries and the metaverse. 
</p>
              </div>
              <!-- <div class="content project-about__text-moore">
                <p class="is-hide">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita veniam iste eaque distinctio quibusdam tenetur sint, quisquam neque reiciendis consectetur dolores omnis fugiat nihil enim ullam quis nisi aut molestias.</p>
                <p class="is-hide">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita veniam iste eaque distinctio quibusdam tenetur sint, quisquam neque reiciendis consectetur dolores omnis fugiat nihil enim ullam quis nisi aut molestias.</p>
              </div>
              <a href="javascript:;" class="js-link-moore link-moore project-about__link-moore" data-title-active="Hide all text">Read more</a> -->
            </div>
          </div>
        </div>
        <!-- project-about END -->
        <!-- project-list BEGIN -->
        <div class="project-list">
        <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/003-Vogue Gioiello Books/02-gioello-reshot-cartier.jpg" alt="Nature is a fraund">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Vogue Gioiello Books</h2>
                <a href="./img/assignments/003-Vogue Gioiello Books/02-gioello-reshot-cartier.jpg" class="project-card__view-project" data-fslightbox="gallery-fiftyOne">View project</a>
                <a href="./img/assignments/003-Vogue Gioiello Books/01-vogue gioello-dior-11611.jpg" class="project-card__view-project" data-fslightbox="gallery-fiftyOne"> </a>
                <a href="./img/assignments/003-Vogue Gioiello Books/03-vogue gioello-HW--11633.jpg" class="project-card__view-project" data-fslightbox="gallery-fiftyOne"> </a>
                <a href="./img/assignments/003-Vogue Gioiello Books/04-vogue gioello-HW--11624.jpg" class="project-card__view-project" data-fslightbox="gallery-fiftyOne"> </a>
                <a href="./img/assignments/003-Vogue Gioiello Books/05-vogue gioello-HW--11673.jpg" class="project-card__view-project" data-fslightbox="gallery-fiftyOne"> </a>
              </div>
            </div>
          </section>
          <!-- project-card BEGIN -->
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <!-- <img src="./img/assignments/048-Vogue Italia Manga/07-VogueItalia-Manga-08.jpg" alt="Nature is a fraund"> -->
                <video src="./img/video/vogue_italia_manga_garden (1080p).mp4" type="video/mp4" autoplay muted></video>
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Vogue Italia Manga</h2>
                <a href="./img/assignments/048-Vogue Italia Manga/07-VogueItalia-Manga-08.jpg" class="project-card__view-project" data-fslightbox="gallery-one">View project</a>
                <!-- <a href="./img/video/vogue_italia_manga_garden (1080p).mp4" class="project-card__view-project" data-fslightbox="gallery-one"></a> -->
                <a href="./img/assignments/048-Vogue Italia Manga/01-VogueItalia-Manga-01.jpg" class="project-card__view-project" data-fslightbox="gallery-one"> </a>
                <a href="./img/assignments/048-Vogue Italia Manga/02-VogueItalia-Manga-03.jpg" class="project-card__view-project" data-fslightbox="gallery-one"> </a>
                <a href="./img/assignments/048-Vogue Italia Manga/03-VogueItalia-Manga-04.jpg" class="project-card__view-project" data-fslightbox="gallery-one"> </a>
                <a href="./img/assignments/048-Vogue Italia Manga/04-VogueItalia-Manga-05.jpg" class="project-card__view-project" data-fslightbox="gallery-one"> </a>
                <a href="./img/assignments/048-Vogue Italia Manga/05-VogueItalia-Manga-06.jpg" class="project-card__view-project" data-fslightbox="gallery-one"> </a>
                <a href="./img/assignments/048-Vogue Italia Manga/06-VogueItalia-Manga-07.jpg" class="project-card__view-project" data-fslightbox="gallery-one"> </a>
                <a href="./img/assignments/048-Vogue Italia Manga/08-VogueItalia-Manga-09.jpg" class="project-card__view-project" data-fslightbox="gallery-one"> </a>
                <a href="./img/assignments/048-Vogue Italia Manga/09-VogueItalia-Manga-10.jpg" class="project-card__view-project" data-fslightbox="gallery-one"> </a>
                <a href="./img/video/manga_flowers_for_vogue_italia (1080p).mp4" class="project-card__view-project" data-fslightbox="gallery-one"></a>

              </div>
            </div>
          </section>
          <!-- project-card END -->   
          <!-- project-card BEGIN -->
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/043-Vogue Gioiello Handpainting/01-VogueGio-Handpainting-01.jpg" alt="Hocus pocus">
                <div class="shadow"></div>
              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Vogue Gioiello Handpainting</h2>
                <a href="./img/assignments/043-Vogue Gioiello Handpainting/01-VogueGio-Handpainting-01.jpg" class="project-card__view-project" data-fslightbox="gallery-two">View project</a>
                <a href="./img/assignments/043-Vogue Gioiello Handpainting/02-VogueGio-Handpainting-02.jpg" class="project-card__view-project" data-fslightbox="gallery-two"></a>
                <a href="./img/assignments/043-Vogue Gioiello Handpainting/03-VogueGio-Handpainting-03.jpg" class="project-card__view-project" data-fslightbox="gallery-two"></a>
                <a href="./img/assignments/043-Vogue Gioiello Handpainting/04-VogueGio-Handpainting-04.jpg" class="project-card__view-project" data-fslightbox="gallery-two"></a>
              </div>
            </div>
          </section>
          <!-- project-card END -->
          <!-- project-card BEGIN -->
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/049-Vogue Nippon Alice/01-VogueNippon-Alice-01.jpg" alt="Meat hoax">
                <div class="shadow"></div>
            </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Vogue Nippon Alice</h2>
                <a href="./img/video/vogue_japan_alice_in_wonderland (720p).mp4" class="project-card__view-project" data-fslightbox="gallery-three">View project</a>
                <a href="./img/assignments/049-Vogue Nippon Alice/01-VogueNippon-Alice-01.jpg" class="project-card__view-project" data-fslightbox="gallery-three"></a>
                <a href="./img/assignments/049-Vogue Nippon Alice/02-VogueNippon-Alice-02.jpg" class="project-card__view-project" data-fslightbox="gallery-three"></a>
                <a href="./img/assignments/049-Vogue Nippon Alice/03-VogueNippon-Alice-03.jpg" class="project-card__view-project" data-fslightbox="gallery-three"></a>
                <a href="./img/assignments/049-Vogue Nippon Alice/04-VogueNippon-Alice-04.jpg" class="project-card__view-project" data-fslightbox="gallery-three"></a>
                <a href="./img/assignments/049-Vogue Nippon Alice/05-VogueNippon-Alice-05.jpg" class="project-card__view-project" data-fslightbox="gallery-three"></a>
                <a href="./img/assignments/049-Vogue Nippon Alice/06-VogueNippon-Alice-06.jpg" class="project-card__view-project" data-fslightbox="gallery-three"></a>
              </div>
            </div>
          </section>
          <!-- project-card END -->
          <!-- project-card BEGIN -->
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/041-Vogue Gioiello Dreameye/02-VogueGio-Dreameye-02.jpg" alt="Colored artefacts">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Vogue Gioiello Dreameye</h2>
                <a href="./img/assignments/041-Vogue Gioiello Dreameye/02-VogueGio-Dreameye-02.jpg" class="project-card__view-project" data-fslightbox="gallery-four">View project</a>
                <a href="./img/assignments/041-Vogue Gioiello Dreameye/01-VogueGio-Dreameye-01.jpg" class="project-card__view-project" data-fslightbox="gallery-four"></a>
                <a href="./img/assignments/041-Vogue Gioiello Dreameye/03-VogueGio-Dreameye-03.jpg" class="project-card__view-project" data-fslightbox="gallery-four"></a>
                <a href="./img/assignments/041-Vogue Gioiello Dreameye/04-VogueGio-Dreameye-04.jpg" class="project-card__view-project" data-fslightbox="gallery-four"></a>
                <a href="./img/assignments/041-Vogue Gioiello Dreameye/05-VogueGio-Dreameye-05.jpg" class="project-card__view-project" data-fslightbox="gallery-four"></a>
              </div>
            </div>
          </section>
          <!-- project-card END -->
          <!-- project-card BEGIN -->
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/053-Into the wild-Vogue UK Animals/02-VUK_Animals_fin_002.jpg" alt="Limbo land">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Brilish vogue</h2>
                <a href="./img/video/british_vogue_into_the_wild (1080p).mp4" class="project-card__view-project" data-fslightbox="gallery-five">View project</a>
                <a href="./img/assignments/053-Into the wild-Vogue UK Animals/02-VUK_Animals_fin_002.jpg" class="project-card__view-project" data-fslightbox="gallery-five"></a>
                <a href="./img/assignments/053-Into the wild-Vogue UK Animals/01-VUK_Animals_fin_001.jpg" class="project-card__view-project" data-fslightbox="gallery-five"></a>
                <a href="./img/assignments/053-Into the wild-Vogue UK Animals/03-VUK_Animals_fin_003.jpg" class="project-card__view-project" data-fslightbox="gallery-five"></a>
                <a href="./img/assignments/053-Into the wild-Vogue UK Animals/04-VUK_Animals_fin_004.jpg" class="project-card__view-project" data-fslightbox="gallery-five"></a>
              </div>
            </div>
          </section>
          <!-- project-card END -->
          <!-- project-card BEGIN -->
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/007-Casa Vogue Dream in Lace/03-VCA_Dream-Lace_fin_003.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Casa Vogue <br>Dream in Lace</h2>
                <a href="./img/assignments/007-Casa Vogue Dream in Lace/03-VCA_Dream-Lace_fin_003.jpg" class="project-card__view-project" data-fslightbox="gallery-six">View project</a>
                <a href="./img/assignments/007-Casa Vogue Dream in Lace/01-VCA_Dream-Lace_fin_001.jpg" class="project-card__view-project" data-fslightbox="gallery-six"></a>
                <a href="./img/assignments/007-Casa Vogue Dream in Lace/02-VCA_Dream-Lace_fin_002.jpg" class="project-card__view-project" data-fslightbox="gallery-six"></a>
                <a href="./img/assignments/007-Casa Vogue Dream in Lace/04-VCA_Dream-Lace_fin_005.jpg" class="project-card__view-project" data-fslightbox="gallery-six"></a>
              </div>
            </div>
          </section>
          <!-- project-card END -->
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/new-img/mexico.jpg" alt="Army of fetiches">
                <div class="shadow"></div>
              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Vogue Mexico Underwater Garden</h2>
                <a href="./img/assignments/002-Vogue Mexico Underwater Garden/02-VOGUE_MEX_main_0088v2.jpg" class="project-card__view-project" data-fslightbox="gallery-seven">View project</a>
                <a href="./img/assignments/002-Vogue Mexico Underwater Garden/01-VOGUE_MEX_0767v3.jpg" class="project-card__view-project" data-fslightbox="gallery-seven"></a>
                <a href="./img/assignments/002-Vogue Mexico Underwater Garden/03-VOGUE_MEX_0217v2.jpg" class="project-card__view-project" data-fslightbox="gallery-seven"></a>
                <a href="./img/assignments/002-Vogue Mexico Underwater Garden/04-VOGUE_MEX_0479v3.jpg" class="project-card__view-project" data-fslightbox="gallery-seven"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <!-- <img src="./img/video/eden (1440p).mp4" alt="Army of fetiches"> -->
                <video src="./img/video/eden (1440p).mp4" type="video/mp4" autoplay muted></video>
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Eden</h2>
                <a href="./img/video/eden (1440p).mp4" class="project-card__view-project" data-fslightbox="gallery-eight">View project</a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="img/new-img/mali.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Casa Vogue <br>Mali is Music
                </h2>
                <a href="./img/assignments/009-Casa Vogue Mali is Music/05_MaliIsMusic-.jpg" class="project-card__view-project" data-fslightbox="gallery-nine">View project</a>
                <a href="./img/assignments/009-Casa Vogue Mali is Music/01_MaliIsMusic-.jpg" class="project-card__view-project" data-fslightbox="gallery-nine"></a>
                <a href="./img/assignments/009-Casa Vogue Mali is Music/02_MaliIsMusic-.jpg" class="project-card__view-project" data-fslightbox="gallery-nine"></a>
                <a href="./img/assignments/009-Casa Vogue Mali is Music/03_MaliIsMusic-.jpg" class="project-card__view-project" data-fslightbox="gallery-nine"></a>
                <a href="./img/assignments/009-Casa Vogue Mali is Music/04_MaliIsMusic-.jpg" class="project-card__view-project" data-fslightbox="gallery-nine"></a>
                <a href="./img/assignments/009-Casa Vogue Mali is Music/06_MaliIsMusic-.jpg" class="project-card__view-project" data-fslightbox="gallery-nine"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/022-Hermes/01-Hermes-01.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Hermes</h2>
                <a href="./img/assignments/022-Hermes/01-Hermes-01.jpg" class="project-card__view-project" data-fslightbox="gallery-ten">View project</a>
                <a href="./img/assignments/022-Hermes/02-Hermes-09.jpg" class="project-card__view-project" data-fslightbox="gallery-ten"></a>
                <a href="./img/assignments/022-Hermes/03-Hermes-02.jpg" class="project-card__view-project" data-fslightbox="gallery-ten"></a>
                <a href="./img/assignments/022-Hermes/04-Hermes-05.jpg" class="project-card__view-project" data-fslightbox="gallery-ten"></a>
                <a href="./img/assignments/022-Hermes/05-Hermes-06.jpg" class="project-card__view-project" data-fslightbox="gallery-ten"></a>
                <a href="./img/assignments/022-Hermes/06-Hermes-04.jpg" class="project-card__view-project" data-fslightbox="gallery-ten"></a>
                <a href="./img/assignments/022-Hermes/07-Hermes-08.jpg" class="project-card__view-project" data-fslightbox="gallery-ten"></a>
                <a href="./img/assignments/022-Hermes/08-Hermes-07.jpg" class="project-card__view-project" data-fslightbox="gallery-ten"></a>
                <a href="./img/assignments/022-Hermes/09-Hermes-03.jpg" class="project-card__view-project" data-fslightbox="gallery-ten"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/054-Vogue UK Butterfly/04-VogueUK-Butterfly-01.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Vogue UK Butterfly</h2>
                <a href="img/video/phyllium_1080x1920_v5.mp4 (1080p).mp4" class="project-card__view-project" data-fslightbox="gallery-eleven">View project</a>
                <a href="img/video/vogue_uk_broken_butterfly (1080p).mp4" class="project-card__view-project" data-fslightbox="gallery-eleven"></a>
                <a href="./img/assignments/054-Vogue UK Butterfly/04-VogueUK-Butterfly-01.jpg" class="project-card__view-project" data-fslightbox="gallery-eleven"></a>
                <a href="./img/assignments/054-Vogue UK Butterfly/02-VogueUK-Butterfly-04.jpg" class="project-card__view-project" data-fslightbox="gallery-eleven"></a>
                <a href="./img/assignments/054-Vogue UK Butterfly/03-VogueUK-Butterfly-02.jpg" class="project-card__view-project" data-fslightbox="gallery-eleven"></a>
                <a href="./img/assignments/054-Vogue UK Butterfly/01-VogueUK-Butterfly-03.jpg" class="project-card__view-project" data-fslightbox="gallery-eleven"></a>

              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/016-Celine/01-Casa-Celine-01.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Celine<h2>
                <a style="font-family: 'Outfit';" href="./img/video/celine_e_com_intro (1080p).mp4" class="project-card__view-project" data-fslightbox="gallery-twelve">View project</a>
                <a href="./img/assignments/016-Celine/01-Casa-Celine-01.jpg" class="project-card__view-project" data-fslightbox="gallery-twelve"></a>
                <a href="./img/assignments/016-Celine/02-Casa-Celine-08.jpg" class="project-card__view-project" data-fslightbox="gallery-twelve"></a>
                <a href="./img/assignments/016-Celine/03-Casa-Celine-03.jpg" class="project-card__view-project" data-fslightbox="gallery-twelve"></a>
                <a href="./img/assignments/016-Celine/04-Casa-Celine-04.jpg" class="project-card__view-project" data-fslightbox="gallery-twelve"></a>
                <a href="./img/assignments/016-Celine/05-Casa-Celine-05.jpg" class="project-card__view-project" data-fslightbox="gallery-twelve"></a>
                <a href="./img/video/celine_animated_bags (1080p).mp4" class="project-card__view-project" data-fslightbox="gallery-twelve"></a>
                <a href="./img/assignments/016-Celine/06-Casa-Celine-02.jpg" class="project-card__view-project" data-fslightbox="gallery-twelve"></a>
                <a href="./img/assignments/016-Celine/07-Casa-Celine-06.jpg" class="project-card__view-project" data-fslightbox="gallery-twelve"></a>
                <a href="./img/assignments/016-Celine/08-Casa-Celine-07.jpg" class="project-card__view-project" data-fslightbox="gallery-twelve"></a>
                <a href="./img/assignments/016-Celine/09-Casa-Celine-12.jpg" class="project-card__view-project" data-fslightbox="gallery-twelve"></a>
                <a href="./img/assignments/016-Celine/10-Casa-Celine-09.jpg" class="project-card__view-project" data-fslightbox="gallery-twelve"></a>
                <a href="./img/assignments/016-Celine/11-Casa-Celine-10.jpg" class="project-card__view-project" data-fslightbox="gallery-twelve"></a>
                <a href="./img/assignments/016-Celine/12-Casa-Celine-11.jpg" class="project-card__view-project" data-fslightbox="gallery-twelve"></a>
                <a href="./img/assignments/016-Celine/CEL_WINTER16_FIN_DP Logo 150-44 copy.jpg" class="project-card__view-project" data-fslightbox="gallery-twelve"></a>
                <a href="./img/assignments/016-Celine/celine reshoot 27433.jpg" class="project-card__view-project" data-fslightbox="gallery-twelve"></a>
                <a href="./img/assignments/016-Celine/Celine_campaign_beach_14v4_RGB.jpg" class="project-card__view-project" data-fslightbox="gallery-twelve"></a>
                <a href="./img/assignments/016-Celine/Celine_campaign_suite_25450v4_RGB.jpg" class="project-card__view-project" data-fslightbox="gallery-twelve"></a>
                <a href="./img/assignments/016-Celine/Celine_campaign_suite_25497v4_RGB.jpg" class="project-card__view-project" data-fslightbox="gallery-twelve"></a>
                <a href="./img/video/celine_animated_bags-2 (1080p).mp4" class="project-card__view-project" data-fslightbox="gallery-twelve"></a>

              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/006-Casa Vogue Dog Beds/01-CV-Dog Beds04-finnoframe.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Casa Vogue Dog Beds</h2>
                <a href="./img/assignments/006-Casa Vogue Dog Beds/01-CV-Dog Beds04-finnoframe.jpg" class="project-card__view-project" data-fslightbox="gallery-thirteen">View project</a>
                <a href="./img/assignments/006-Casa Vogue Dog Beds/02-CV-Dog Beds03-fincrop.jpg" class="project-card__view-project" data-fslightbox="gallery-thirteen"></a>
                <a href="./img/assignments/006-Casa Vogue Dog Beds/03-CV-Dog Beds02-fincrop.jpg" class="project-card__view-project" data-fslightbox="gallery-thirteen"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/005-Bloom Nitjinksy/02-BLO_Nitjisky-Beauties_fin_004.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Bloom Nitjinksy</h2>
                <a href="./img/assignments/005-Bloom Nitjinksy/02-BLO_Nitjisky-Beauties_fin_004.jpg" class="project-card__view-project" data-fslightbox="gallery-fourteen">View project</a>
                <a href="./img/assignments/005-Bloom Nitjinksy/01-BLO_Nitjisky-Beauties_fin_003.jpg" class="project-card__view-project" data-fslightbox="gallery-fourteen"></a>
                <a href="./img/assignments/005-Bloom Nitjinksy/03-BLO_Nitjisky-Beauties_fin_001.jpg" class="project-card__view-project" data-fslightbox="gallery-fourteen"></a>
                <a href="./img/assignments/005-Bloom Nitjinksy/04-BLO_Nitjisky-Beauties_fin_002.jpg" class="project-card__view-project" data-fslightbox="gallery-fourteen"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/058-WOI Planes/01-WOI_Plane_fin_001.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">world of interiors planes</h2>
                <a href="./img/assignments/058-WOI Planes/01-WOI_Plane_fin_001.jpg" class="project-card__view-project" data-fslightbox="gallery-fifteen">View project</a>
                <a href="./img/assignments/058-WOI Planes/02-WOI_Plane_fin_011.jpg" class="project-card__view-project" data-fslightbox="gallery-fifteen"></a>
                <a href="./img/assignments/058-WOI Planes/03-WOI_Plane_fin_008.jpg" class="project-card__view-project" data-fslightbox="gallery-fifteen"></a>
                <a href="./img/assignments/058-WOI Planes/04-WOI_Plane_fin_005.jpg" class="project-card__view-project" data-fslightbox="gallery-fifteen"></a>
                <a href="./img/assignments/058-WOI Planes/05-WOI_Plane_fin_010.jpg" class="project-card__view-project" data-fslightbox="gallery-fifteen"></a>
                <a href="./img/assignments/058-WOI Planes/06-WOI_Plane_fin_007.jpg" class="project-card__view-project" data-fslightbox="gallery-fifteen"></a>
                <a href="./img/assignments/058-WOI Planes/07-WOI_Plane_fin_012.jpg" class="project-card__view-project" data-fslightbox="gallery-fifteen"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/004-Armani Gio/03-Armani-Gio-02 copy.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Armani Gio</h2>
                <a href="./img/assignments/004-Armani Gio/03-Armani-Gio-02 copy.jpg" class="project-card__view-project" data-fslightbox="gallery-sixteen">View project</a>
                <a href="./img/assignments/004-Armani Gio/01-Armani-Gio-03 copy.jpg" class="project-card__view-project" data-fslightbox="gallery-sixteen"></a>
                <a href="./img/assignments/004-Armani Gio/02-Armani-Gio-01 copy.jpg" class="project-card__view-project" data-fslightbox="gallery-sixteen"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/018-Doingbird/04-Doingbird_fin_004.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Doingbird</h2>
                <a href="./img/assignments/018-Doingbird/01-Doingbird_fin_001.jpg" class="project-card__view-project" data-fslightbox="gallery-seventeen">View project</a>
                <a href="./img/assignments/018-Doingbird/02-Doingbird_fin_002.jpg" class="project-card__view-project" data-fslightbox="gallery-seventeen"></a>
                <a href="./img/assignments/018-Doingbird/03-Doingbird_fin_003.jpg" class="project-card__view-project" data-fslightbox="gallery-seventeen"></a>
                <a href="./img/assignments/018-Doingbird/04-Doingbird_fin_004.jpg" class="project-card__view-project" data-fslightbox="gallery-seventeen"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/015-Casa Vogue Trompe L_Oueil/VCA_Trompe-Loeil_fin_001.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Casa Vogue <br>Trompe L'Oueil</h2>
                <a href="./img/assignments/015-Casa Vogue Trompe L_Oueil/VCA_Trompe-Loeil_fin_001.jpg" class="project-card__view-project" data-fslightbox="gallery-eighteen">View project</a>
                <a href="./img/assignments/015-Casa Vogue Trompe L_Oueil/VCA_Trompe-Loeil_fin_002.jpg" class="project-card__view-project" data-fslightbox="gallery-eighteen"></a>
                <a href="./img/assignments/015-Casa Vogue Trompe L_Oueil/VCA_Trompe-Loeil_fin_003.jpg" class="project-card__view-project" data-fslightbox="gallery-eighteen"></a>
                <a href="./img/assignments/015-Casa Vogue Trompe L_Oueil/VCA_Trompe-Loeil_fin_004.jpg" class="project-card__view-project" data-fslightbox="gallery-eighteen"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/019-Dries van Noten/10-Casa-DriesNoten-02.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Dries van Noten</h2>
                <a href="./img/assignments/019-Dries van Noten/10-Casa-DriesNoten-02.jpg" class="project-card__view-project" data-fslightbox="gallery-nineteen">View project</a>
                <a href="./img/assignments/019-Dries van Noten/01-Casa-DriesNoten-13.jpg" class="project-card__view-project" data-fslightbox="gallery-nineteen"></a>
                <a href="./img/assignments/019-Dries van Noten/02-Dries-Van-Noten_fin_030.jpg" class="project-card__view-project" data-fslightbox="gallery-nineteen"></a>
                <a href="./img/assignments/019-Dries van Noten/03-Dries-Van-Noten_fin_028.jpg" class="project-card__view-project" data-fslightbox="gallery-nineteen"></a>
                <a href="./img/assignments/019-Dries van Noten/04-Dries-Van-Noten_fin_029.jpg" class="project-card__view-project" data-fslightbox="gallery-nineteen"></a>
                <a href="./img/assignments/019-Dries van Noten/05-Dries-Van-Noten_fin_019.jpg" class="project-card__view-project" data-fslightbox="gallery-nineteen"></a>
                <a href="./img/assignments/019-Dries van Noten/06-Casa-DriesNoten-12.jpg" class="project-card__view-project" data-fslightbox="gallery-nineteen"></a>
                <a href="./img/assignments/019-Dries van Noten/07-Casa-DriesNoten-06.jpg" class="project-card__view-project" data-fslightbox="gallery-nineteen"></a>
                <a href="./img/assignments/019-Dries van Noten/08-VCA_Caravan-Crop_fin_002.jpg" class="project-card__view-project" data-fslightbox="gallery-nineteen"></a>
                <a href="./img/assignments/019-Dries van Noten/09-VCA_Caravan-Crop_fin_001.jpg" class="project-card__view-project" data-fslightbox="gallery-nineteen"></a>
                <a href="./img/assignments/019-Dries van Noten/11-Casa-DriesNoten-04.jpg" class="project-card__view-project" data-fslightbox="gallery-nineteen"></a>
                <a href="./img/assignments/019-Dries van Noten/12-Casa-DriesNoten-10.jpg" class="project-card__view-project" data-fslightbox="gallery-nineteen"></a>
                <a href="./img/assignments/019-Dries van Noten/13-Casa-DriesNoten-05.jpg" class="project-card__view-project" data-fslightbox="gallery-nineteen"></a>
                <a href="./img/assignments/019-Dries van Noten/14-Casa-DriesNoten-01.jpg" class="project-card__view-project" data-fslightbox="gallery-nineteen"></a>
                <a href="./img/assignments/019-Dries van Noten/15-Casa-DriesNoten-03.jpg" class="project-card__view-project" data-fslightbox="gallery-nineteen"></a>
                <a href="./img/assignments/019-Dries van Noten/16-Casa-DriesNoten-11.jpg" class="project-card__view-project" data-fslightbox="gallery-nineteen"></a>
                <a href="./img/assignments/019-Dries van Noten/17-Casa-DriesNoten-08.jpg" class="project-card__view-project" data-fslightbox="gallery-nineteen"></a>
                <a href="./img/assignments/019-Dries van Noten/18-Casa-DriesNoten-09.jpg" class="project-card__view-project" data-fslightbox="gallery-nineteen"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/045-Vogue Gioiello Sculptures/05-VogueGio-Sculptures-05.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Vogue Gioiello Sculptures</h2>
                <a href="./img/assignments/045-Vogue Gioiello Sculptures/05-VogueGio-Sculptures-05.jpg" class="project-card__view-project" data-fslightbox="gallery-twenty">View project</a>
                <a href="./img/assignments/045-Vogue Gioiello Sculptures/01-VogueGio-Sculptures-01.jpg" class="project-card__view-project" data-fslightbox="gallery-twenty"></a>
                <a href="./img/assignments/045-Vogue Gioiello Sculptures/02-VogueGio-Sculptures-02.jpg" class="project-card__view-project" data-fslightbox="gallery-twenty"></a>
                <a href="./img/assignments/045-Vogue Gioiello Sculptures/03-VogueGio-Sculptures-03.jpg" class="project-card__view-project" data-fslightbox="gallery-twenty"></a>
                <a href="./img/assignments/045-Vogue Gioiello Sculptures/04-VogueGio-Sculptures-04.jpg" class="project-card__view-project" data-fslightbox="gallery-twenty"></a>
                <a href="./img/assignments/045-Vogue Gioiello Sculptures/06-VogueGio-Sculptures-06.jpg" class="project-card__view-project" data-fslightbox="gallery-twenty"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/014-Casa Vogue Steinberg Inspiration/05-VCA_Steinberg_fin_001.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title"> Casa Vogue Steinberg Inspirations</h2>
                <a href="./img/assignments/014-Casa Vogue Steinberg Inspiration/05-VCA_Steinberg_fin_001.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyOne">View project</a>
                <a href="./img/assignments/014-Casa Vogue Steinberg Inspiration/01-VCA_Steinberg_fin_004.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyOne"></a>
                <a href="./img/assignments/014-Casa Vogue Steinberg Inspiration/02-VCA_Steinberg_fin_003_cmyk.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyOne"></a>
                <a href="./img/assignments/014-Casa Vogue Steinberg Inspiration/03-VCA_Steinberg_fin_005.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyOne"></a>
                <a href="./img/assignments/014-Casa Vogue Steinberg Inspiration/04-VCA_Steinberg_fin_002_cmyk.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyOne"></a>
                <a href="./img/assignments/014-Casa Vogue Steinberg Inspiration/06-VCA_Steinberg_fin_007.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyOne"></a>
                <a href="./img/assignments/014-Casa Vogue Steinberg Inspiration/07-VCA_Steinberg_fin_006.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyOne"></a>
                <a href="./img/assignments/014-Casa Vogue Steinberg Inspiration/08-VCA_Steinberg_fin_008.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyOne"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/040-Vogue Germany Astrocakes/12-VogueGerman-Astrocakes-08.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Vogue Germany Astrocakes</h2>
                <a href="./img/assignments/040-Vogue Germany Astrocakes/12-VogueGerman-Astrocakes-08.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyTwo">View project</a>
                <a href="./img/assignments/040-Vogue Germany Astrocakes/01-VogueGerman-Astrocakes-02.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyTwo"></a>
                <a href="./img/assignments/040-Vogue Germany Astrocakes/02-VogueGerman-Astrocakes-11.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyTwo"></a>
                <a href="./img/assignments/040-Vogue Germany Astrocakes/03-VogueGerman-Astrocakes-05.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyTwo"></a>
                <a href="./img/assignments/040-Vogue Germany Astrocakes/04-VogueGerman-Astrocakes-03.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyTwo"></a>
                <a href="./img/assignments/040-Vogue Germany Astrocakes/05-VogueGerman-Astrocakes-06.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyTwo"></a>
                <a href="./img/assignments/040-Vogue Germany Astrocakes/06-VogueGerman-Astrocakes-12.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyTwo"></a>
                <a href="./img/assignments/040-Vogue Germany Astrocakes/07-VogueGerman-Astrocakes-07.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyTwo"></a>
                <a href="./img/assignments/040-Vogue Germany Astrocakes/08-VogueGerman-Astrocakes-10.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyTwo"></a>
                <a href="./img/assignments/040-Vogue Germany Astrocakes/09-VogueGerman-Astrocakes-09.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyTwo"></a>
                <a href="./img/assignments/040-Vogue Germany Astrocakes/10-VogueGerman-Astrocakes-04.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyTwo"></a>
                <a href="./img/assignments/040-Vogue Germany Astrocakes/11-VogueGerman-Astrocakes-01.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyTwo"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/024-Jean Paul Gaultier/01-Gaultier-.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Jean Paul Gaultier</h2>
                <a href="./img/video/jean-1.mp4" class="project-card__view-project" data-fslightbox="gallery-twentyThree">View project</a>
                <a href="./img/video/jean-2.mp4" class="project-card__view-project" data-fslightbox="gallery-twentyThree"></a>
                <a href="./img/video/jean-3.mp4" class="project-card__view-project" data-fslightbox="gallery-twentyThree"></a>
                <a href="./img/video/jean-4.mp4" class="project-card__view-project" data-fslightbox="gallery-twentyThree"></a>
                <a href="./img/video/jean-5.mp4" class="project-card__view-project" data-fslightbox="gallery-twentyThree"></a>
                <a href="./img/video/jean-6.mp4" class="project-card__view-project" data-fslightbox="gallery-twentyThree"></a>
                <a href="./img/video/jean-7.mp4" class="project-card__view-project" data-fslightbox="gallery-twentyThree"></a>
                <a href="./img/assignments/024-Jean Paul Gaultier/01-Gaultier-.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyThree"></a>
                <a href="./img/assignments/024-Jean Paul Gaultier/02-Gaultier-.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyThree"></a>
                <a href="./img/assignments/024-Jean Paul Gaultier/03-Gaultier-.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyThree"></a>
                <a href="./img/assignments/024-Jean Paul Gaultier/04-Gaultier-.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyThree"></a>
                <a href="./img/assignments/024-Jean Paul Gaultier/05-Gaultier-.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyThree"></a>
                <a href="./img/assignments/024-Jean Paul Gaultier/06-Gaultier-.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyThree"></a>
                <a href="./img/assignments/024-Jean Paul Gaultier/07-Gaultier-.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyThree"></a>
                <a href="./img/assignments/024-Jean Paul Gaultier/08-Gaultier-.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyThree"></a>
                <a href="./img/assignments/024-Jean Paul Gaultier/09-Gaultier-.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyThree"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/008-Casa Vogue Dress me Up/05-VCA_Dress-me-up_fin_004.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Casa Vogue <br>Dress me Up</h2>
                <a href="./img/assignments/008-Casa Vogue Dress me Up/05-VCA_Dress-me-up_fin_004.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyFour">View project</a>
                <a href="./img/assignments/008-Casa Vogue Dress me Up/01-VCA_Dress-me-up_fin_002.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyFour"></a>
                <a href="./img/assignments/008-Casa Vogue Dress me Up/02-miba20080923e001.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyFour"></a>
                <a href="./img/assignments/008-Casa Vogue Dress me Up/03-VCA_Dress-me-up_fin_003.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyFour"></a>
                <a href="./img/assignments/008-Casa Vogue Dress me Up/04-miba20080923e004.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyFour"></a>
                <a href="./img/assignments/008-Casa Vogue Dress me Up/06-VCA_Dress-me-up_fin_006.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyFour"></a>
                <a href="./img/assignments/008-Casa Vogue Dress me Up/07-VCA_Dress-me-up_fin_001.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyFour"></a>
                <a href="./img/assignments/008-Casa Vogue Dress me Up/08-miba20080923e003.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyFour"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/032-Telegraph CGI Flowers/DT_Flowers_fin_001.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Telegraph CGI Flowers</h2>
                <a href="./img/flowers_in_the_pavement (540p).mp4" class="project-card__view-project" data-fslightbox="gallery-twentyFive">View project</a>
                <a href="./img/assignments/032-Telegraph CGI Flowers/DT_Flowers_fin_001.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyFive"></a>
                <a href="./img/assignments/032-Telegraph CGI Flowers/DT_Flowers_fin_002.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyFive"></a>
                <a href="./img/assignments/032-Telegraph CGI Flowers/DT_Flowers_fin_003.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyFive"></a>
                <a href="./img/assignments/032-Telegraph CGI Flowers/DT_Flowers_fin_004.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyFive"></a>
                <a href="./img/assignments/032-Telegraph CGI Flowers/DT_Flowers_fin_005.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyFive"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/031-Repossi/01-Repossi_set01_0367v4.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Repossi</h2>
                <a href="./img/assignments/031-Repossi/01-Repossi_set01_0367v4.jpg" class="project-card__view-project" data-fslightbox="gallery-twentySix">View project</a>
                <a href="./img/assignments/031-Repossi/02-Repossi_set01_0175v2.jpg" class="project-card__view-project" data-fslightbox="gallery-twentySix"></a>
                <a href="./img/video/repossi (1080p).mp4" class="project-card__view-project" data-fslightbox="gallery-twentySix"></a>
                <a href="./img/assignments/031-Repossi/03-Repossi_set01_0413.jpg" class="project-card__view-project" data-fslightbox="gallery-twentySix"></a>
                <a href="./img/assignments/031-Repossi/04-Repossi_set01_0336.jpg" class="project-card__view-project" data-fslightbox="gallery-twentySix"></a>
                <a href="./img/video/repossi-2 (1080p).mp4" class="project-card__view-project" data-fslightbox="gallery-twentySix"></a>
                <a href="./img/assignments/031-Repossi/05-Repossi_set01_0183v2.jpg" class="project-card__view-project" data-fslightbox="gallery-twentySix"></a>
                <a href="./img/assignments/031-Repossi/06-Repossi_set01_0428_a.jpg" class="project-card__view-project" data-fslightbox="gallery-twentySix"></a>
                <a href="./img/video/repossi-3 (1080p).mp4" class="project-card__view-project" data-fslightbox="gallery-twentySix"></a>
                <a href="./img/assignments/031-Repossi/07-Repossi_set01_0242.jpg" class="project-card__view-project" data-fslightbox="gallery-twentySix"></a>
                <a href="./img/assignments/031-Repossi/08-Clip2_horizontal_logo_v2 (0-00-01-04).jpg" class="project-card__view-project" data-fslightbox="gallery-twentySix"></a>
                <a href="./img/assignments/031-Repossi/09-Repossi Red.jpg" class="project-card__view-project" data-fslightbox="gallery-twentySix"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/052-Vogue Pelle Allan Jones/05-VoguePelle-AllanJones-04.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Vogue Pelle <br>Allan Jones</h2>
                <a href="./img/assignments/052-Vogue Pelle Allan Jones/05-VoguePelle-AllanJones-04.jpg" class="project-card__view-project" data-fslightbox="gallery-twentySeven">View project</a>
                <a href="./img/assignments/052-Vogue Pelle Allan Jones/01-VoguePelle-AllanJones-07.jpg" class="project-card__view-project" data-fslightbox="gallery-twentySeven"></a>
                <a href="./img/assignments/052-Vogue Pelle Allan Jones/02-VoguePelle-AllanJones-02.jpg" class="project-card__view-project" data-fslightbox="gallery-twentySeven"></a>
                <a href="./img/assignments/052-Vogue Pelle Allan Jones/03-VoguePelle-AllanJones-05.jpg" class="project-card__view-project" data-fslightbox="gallery-twentySeven"></a>
                <a href="./img/assignments/052-Vogue Pelle Allan Jones/04-VoguePelle-AllanJones-08.jpg" class="project-card__view-project" data-fslightbox="gallery-twentySeven"></a>
                <a href="./img/assignments/052-Vogue Pelle Allan Jones/06-VoguePelle-AllanJones-06.jpg" class="project-card__view-project" data-fslightbox="gallery-twentySeven"></a>
                <a href="./img/assignments/052-Vogue Pelle Allan Jones/07-VoguePelle-AllanJones-01.jpg" class="project-card__view-project" data-fslightbox="gallery-twentySeven"></a>
                <a href="./img/assignments/052-Vogue Pelle Allan Jones/08-VoguePelle-AllanJones-03.jpg" class="project-card__view-project" data-fslightbox="gallery-twentySeven"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/034-Telegraph_Cosmic/01-Telegraph-Cosmos-04.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Telegraph Cosmic</h2>
                <a href="./img/assignments/034-Telegraph_Cosmic/01-Telegraph-Cosmos-04.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyEight">View project</a>
                <a href="./img/assignments/034-Telegraph_Cosmic/02-Telegraph-Cosmos-01.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyEight"></a>
                <a href="./img/assignments/034-Telegraph_Cosmic/03-Telegraph-Cosmos-02.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyEight"></a>
                <a href="./img/assignments/034-Telegraph_Cosmic/04-Telegraph-Cosmos-03.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyEight"></a>
                <a href="./img/assignments/034-Telegraph_Cosmic/05-Telegraph-Cosmos-05.jpg" class="project-card__view-project" data-fslightbox="gallery-twentyEight"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/025-Louis Vuitton/Screenshot 2022-08-27 at 15.41.31.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Louis Vuitton</h2>
                <a href="./img/video/louis_vuitton_sky_showopening_virgil_abloh (1080p).mp4" class="project-card__view-project" data-fslightbox="gallery-twentyNine">View project</a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/057-Vogue UK Pop Art/01-VogueUK-PopArt-01.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Vogue UK Pop Art</h2>
                <a href="./img/british_vogue_pop_art (720p).mp4" class="project-card__view-project" data-fslightbox="gallery-thirty">View project</a>
                <a href="./img/assignments/057-Vogue UK Pop Art/01-VogueUK-PopArt-01.jpg" class="project-card__view-project" data-fslightbox="gallery-thirty"></a>
                <a href="./img/assignments/057-Vogue UK Pop Art/02-VogueUK-PopArt-03.jpg" class="project-card__view-project" data-fslightbox="gallery-thirty"></a>
                <a href="./img/assignments/057-Vogue UK Pop Art/03-VogueUK-PopArt-02.jpg" class="project-card__view-project" data-fslightbox="gallery-thirty"></a>
                <a href="./img/assignments/057-Vogue UK Pop Art/04-VogueUK-PopArt-04.jpg" class="project-card__view-project" data-fslightbox="gallery-thirty"></a>
                <a href="./img/assignments/057-Vogue UK Pop Art/05-VogueUK-PopArt-05.jpg" class="project-card__view-project" data-fslightbox="gallery-thirty"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/027-Miu Miu/03-MiuMiu-04.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Miu Miu</h2>
                <a href="./img/assignments/027-Miu Miu/03-MiuMiu-04.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyOne">View project</a>
                <a href="./img/assignments/027-Miu Miu/01-MiuMiu-03.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyOne"></a>
                <a href="./img/assignments/027-Miu Miu/02-MiuMiu-02.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyOne"></a>
                <a href="./img/assignments/027-Miu Miu/Miu Miu49820.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyOne"></a>
                <a href="./img/assignments/027-Miu Miu/Miu Miu49854.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyOne"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/new-img/blue.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Telegraph Blue</h2>
                <a href="./img/assignments/030-Telegraph Blue/01-Telegraph-Blue-01.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyTwo">View project</a>
                <a href="./img/assignments/030-Telegraph Blue/02-Telegraph-Blue-02.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyTwo"></a>
                <a href="./img/assignments/030-Telegraph Blue/03-Telegraph-Blue-03.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyTwo"></a>
                <a href="./img/assignments/030-Telegraph Blue/04-Telegraph-Blue-04.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyTwo"></a>
                <a href="./img/assignments/030-Telegraph Blue/05-Telegraph-Blue-05.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyTwo"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/044-Vogue-Oz/05-VogueGio-Oz-03.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Vogue Gioiello oz</h2>
                <a href="./img/assignments/044-Vogue-Oz/05-VogueGio-Oz-03.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyThree">View project</a>
                <a href="./img/assignments/044-Vogue-Oz/-for intro 01-VogueGio-Oz-01.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyThree"></a>
                <a href="./img/assignments/044-Vogue-Oz/02-VogueGio-Oz-02.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyThree"></a>
                <a href="./img/assignments/044-Vogue-Oz/03-VogueGio-Oz-04.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyThree"></a>
                <a href="./img/assignments/044-Vogue-Oz/04-VogueGio-Oz-06.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyThree"></a>
                <a href="./img/assignments/044-Vogue-Oz/06-VogueGio-Oz-05.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyThree"></a>
                <a href="./img/assignments/044-Vogue-Oz/Vogue Gioiello November.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyThree"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/021-Garage Walk on the Wild Side/04-Garage-Wildside-02.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Garage <br>Walk on the Wild Side</h2>
                <a href="./img/assignments/021-Garage Walk on the Wild Side/04-Garage-Wildside-02.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyFour">View project</a>
                <a href="./img/assignments/021-Garage Walk on the Wild Side/01-Garage-Wildside-08.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyFour"></a>
                <a href="./img/assignments/021-Garage Walk on the Wild Side/02-Garage-Wildside-01.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyFour"></a>
                <a href="./img/assignments/021-Garage Walk on the Wild Side/03-Garage-Wildside-06.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyFour"></a>
                <a href="./img/assignments/021-Garage Walk on the Wild Side/05-Garage-Wildside-03.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyFour"></a>

              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/Screenshot 2023-01-26 at 21.40 copy.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Basement Jaxx Roboshock</h2>
                <a href="./img/basement_jaxx_roboshock (1080p).mp4" class="project-card__view-project" data-fslightbox="gallery-fiftyTwo">View project</a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/028-New York Times/01-NewYorkTimes-02.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">New York Times</h2>
                <a href="./img/assignments/028-New York Times/01-NewYorkTimes-02.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyFive">View project</a>
                <a href="./img/assignments/028-New York Times/02-NewYorkTimes-08.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyFive"></a>
                <a href="./img/assignments/028-New York Times/03-NewYorkTimes-05.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyFive"></a>
                <a href="./img/assignments/028-New York Times/04-NewYorkTimes-04.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyFive"></a>
                <a href="./img/assignments/028-New York Times/05-NewYorkTimes-01.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyFive"></a>
                <a href="./img/assignments/028-New York Times/06-NewYorkTimes-03.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyFive"></a>
                <a href="./img/assignments/028-New York Times/07-NewYorkTimes-06.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyFive"></a>
                <a href="./img/assignments/028-New York Times/08-NewYorkTimes-07.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyFive"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/010-Casa Vogue Pop Up Books/01-VCA_Books_fin_006.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Casa Vogue <br>Pop Up Books</h2>
                <a href="./img/assignments/010-Casa Vogue Pop Up Books/01-VCA_Books_fin_006.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtySix">View project</a>
                <a href="./img/assignments/010-Casa Vogue Pop Up Books/02-VCA_Books_fin_007.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtySix"></a>
                <a href="./img/assignments/010-Casa Vogue Pop Up Books/03-VCA_Books_fin_001.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtySix"></a>
                <a href="./img/assignments/010-Casa Vogue Pop Up Books/04-VCA_Books_fin_002.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtySix"></a>
                <a href="./img/assignments/010-Casa Vogue Pop Up Books/05-VCA_Books_fin_003.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtySix"></a>
                <a href="./img/assignments/010-Casa Vogue Pop Up Books/06-VCA_Books_fin_004_1.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtySix"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/new-img/marant.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Isabel Marant</h2>
                <a href="./img/assignments/023-Isabel Marant/04-Marant-03.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtySeven">View project</a>
                <a href="./img/assignments/023-Isabel Marant/01-Marant-01.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtySeven"></a>
                <a href="./img/assignments/023-Isabel Marant/02-Marant-02.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtySeven"></a>
                <a href="./img/assignments/023-Isabel Marant/03-Marant-06.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtySeven"></a>
                <a href="./img/assignments/023-Isabel Marant/05-Marant-04.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtySeven"></a>
                <a href="./img/assignments/023-Isabel Marant/06-Marant-05.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtySeven"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/050-Vogue Nippon Animals at night/01-VogueNippon-Night-01.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Vogue Nippon <br>Animals at night</h2>
                <a href="./img/assignments/050-Vogue Nippon Animals at night/01-VogueNippon-Night-01.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyEight">View project</a>
                <a href="./img/assignments/050-Vogue Nippon Animals at night/02-VogueNippon-Night-02.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyEight"></a>
                <a href="./img/assignments/050-Vogue Nippon Animals at night/03-VogueNippon-Night-04.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyEight"></a>
                <a href="./img/assignments/050-Vogue Nippon Animals at night/04-VogueNippon-Night-03.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyEight"></a>
                <a href="./img/assignments/050-Vogue Nippon Animals at night/05-VogueNippon-Night-05.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyEight"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/046-Vogue Gioiello Sweet Dream/01-VogueGio-Sweet Dreams-01.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Vogue Gioiello <br>Sweet Dream</h2>
                <a href="./img/assignments/046-Vogue Gioiello Sweet Dream/01-VogueGio-Sweet Dreams-01.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyNine">View project</a>
                <a href="./img/assignments/046-Vogue Gioiello Sweet Dream/02-VogueGio-Sweet Dreams-03.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyNine"></a>
                <a href="./img/assignments/046-Vogue Gioiello Sweet Dream/03-VogueGio-Sweet Dreams-04.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyNine"></a>
                <a href="./img/assignments/046-Vogue Gioiello Sweet Dream/04-VogueGio-Sweet Dreams-05.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyNine"></a>
                <a href="./img/assignments/046-Vogue Gioiello Sweet Dream/05-VogueGio-Sweet Dreams-06.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyNine"></a>
                <a href="./img/assignments/046-Vogue Gioiello Sweet Dream/06-VogueGio-Sweet Dreams-02.jpg" class="project-card__view-project" data-fslightbox="gallery-thirtyNine"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/017-Covers/04-COVER VG NOV 08_1.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Covers</h2>
                <a href="./img/assignments/017-Covers/04-COVER VG NOV 08_1.jpg" class="project-card__view-project" data-fslightbox="gallery-forty">View project</a>
                <a href="./img/assignments/017-Covers/01-Vogue_Gioeilo_DreameyeCover_Michael_Baumgarten.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/02-trompeLOueil1-fincover HR.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/03-VCA_Books_fin_005.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/05-COVER_CoverDeyrole_1.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/06-30Yearsoptical002.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/07-03Bamboo-v6with type copy_1.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/08-30Years011.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/09-30Years012_1.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/10-30YearsCakes004.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/11-30yearssigns.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/12-30Yearsdogs.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/13-30YearsTresure001.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/14-Bodino-v4cmyk.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/15-COVER VG MAR 09_3.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/16-COVER VG SETT 08_1.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/17-coverTitleHR.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/18-dogsCover.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/19-image006 copy.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/20-glitter cover high res.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/21-v gio vegetables cover tear_1.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/22-vg cover005_1.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/23-vg cover006.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/24-vg cover007.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/25-vg cover008.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/26-VGI_CoverRibbon.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/27-VGI_CoverWork.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/28-VI Cover Barvie tear yellow.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/29-Vogue Gioiello November_1.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>
                <a href="./img/assignments/017-Covers/30-Vogue Pelle Cover Cut out tear.jpg" class="project-card__view-project" data-fslightbox="gallery-forty"></a>

              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/039-Vogue China Food and Beauty/04-VogueChina-Food-03.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Vogue China <br>Food and Beauty</h2>
                <a href="./img/assignments/039-Vogue China Food and Beauty/04-VogueChina-Food-03.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyOne">View project</a>
                <a href="./img/assignments/039-Vogue China Food and Beauty/01-VogueChina-Food-05.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyOne"></a>
                <a href="./img/assignments/039-Vogue China Food and Beauty/02-VogueChina-Food-01.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyOne"></a>
                <a href="./img/assignments/039-Vogue China Food and Beauty/03-VogueChina-Food-02.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyOne"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/047-Vogue Gioiello Vegetables/02-VogueGio-Veggie-05.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Vogue Gioiello Vegetables</h2>
                <a href="./img/assignments/047-Vogue Gioiello Vegetables/02-VogueGio-Veggie-05.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyTwo">View project</a>
                <a href="./img/assignments/047-Vogue Gioiello Vegetables/01-VogueGio-Veggie-01.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyTwo"></a>
                <a href="./img/assignments/047-Vogue Gioiello Vegetables/03-VogueGio-Veggie-02.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyTwo"></a>
                <a href="./img/assignments/047-Vogue Gioiello Vegetables/04-VogueGio-Veggie-03.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyTwo"></a>
                <a href="./img/assignments/047-Vogue Gioiello Vegetables/05-VogueGio-Veggie-04.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyTwo"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/051-Vogue Nippon Cards/06-VogueNippon-Cards-06.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Vogue Nippon Cards</h2>
                <a href="./img/assignments/051-Vogue Nippon Cards/06-VogueNippon-Cards-06.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyThree">View project</a>
                <a href="./img/assignments/051-Vogue Nippon Cards/01-VogueNippon-Cards-01.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyThree"></a>
                <a href="./img/assignments/051-Vogue Nippon Cards/02-VogueNippon-Cards-02.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyThree"></a>
                <a href="./img/assignments/051-Vogue Nippon Cards/03-VogueNippon-Cards-03.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyThree"></a>
                <a href="./img/assignments/051-Vogue Nippon Cards/04-VogueNippon-Cards-04.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyThree"></a>
                <a href="./img/assignments/051-Vogue Nippon Cards/05-VogueNippon-Cards-07.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyThree"></a>
                <a href="./img/assignments/051-Vogue Nippon Cards/07-VogueNippon-Cards-11.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyThree"></a>
                <a href="./img/assignments/051-Vogue Nippon Cards/08-VogueNippon-Cards-08.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyThree"></a>
                <a href="./img/assignments/051-Vogue Nippon Cards/09-VogueNippon-Cards-10.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyThree"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/074-Logo-Hair/01-LogoBeauties-01.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Loaded Fashion Logodicction</h2>
                <a href="./img/assignments/074-Logo-Hair/01-LogoBeauties-01.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyFour">View project</a>
                <a href="./img/assignments/074-Logo-Hair/02-LogoBeauties-02.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyFour"></a>
                <a href="./img/assignments/074-Logo-Hair/03-LogoBeauties-03.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyFour"></a>
                <a href="./img/assignments/074-Logo-Hair/04-LogoBeauties-04.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyFour"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/013-Casa Vogue Scenic Curtains/03-VCA_Scenic-Curtains_fin_004.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Casa Vogue <br>Scenic Curtains</h2>
                <a href="./img/assignments/013-Casa Vogue Scenic Curtains/03-VCA_Scenic-Curtains_fin_004.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyFive">View project</a>
                <a href="./img/assignments/013-Casa Vogue Scenic Curtains/01-VCA_Scenic-Curtains_fin_005.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyFive"></a>
                <a href="./img/assignments/013-Casa Vogue Scenic Curtains/02-VCA_Scenic-Curtains_fin_007.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyFive"></a>
                <a href="./img/assignments/013-Casa Vogue Scenic Curtains/04-VCA_Scenic-Curtains_fin_001.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyFive"></a>
                <a href="./img/assignments/013-Casa Vogue Scenic Curtains/05-VCA_Scenic-Curtains_fin_006.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyFive"></a>
                <a href="./img/assignments/013-Casa Vogue Scenic Curtains/06-VCA_Scenic-Curtains_fin_002.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyFive"></a>
                <a href="./img/assignments/013-Casa Vogue Scenic Curtains/07-VCA_Scenic-Curtains_fin_003.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyFive"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/038-Vogue China Chalet/01-VogueChina-Chalet-01.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Vogue China Chalet</h2>
                <a href="./img/video/vogue_china_the_chalet_liquid_flowers (720p).mp4" class="project-card__view-project" data-fslightbox="gallery-fortySix">View project</a>
                <a href="./img/assignments/038-Vogue China Chalet/01-VogueChina-Chalet-01.jpg" class="project-card__view-project" data-fslightbox="gallery-fortySix"></a>
                <a href="./img/assignments/038-Vogue China Chalet/02-VogueChina-Chalet-02.jpg" class="project-card__view-project" data-fslightbox="gallery-fortySix"></a>
                <a href="./img/assignments/038-Vogue China Chalet/03-VogueChina-Chalet-03.jpg" class="project-card__view-project" data-fslightbox="gallery-fortySix"></a>
                <a href="./img/assignments/038-Vogue China Chalet/04-VogueChina-Chalet-04.jpg" class="project-card__view-project" data-fslightbox="gallery-fortySix"></a>
                <a href="./img/video/vogue_china_beauty_-_liquid_butterflies (720p).mp4" class="project-card__view-project" data-fslightbox="gallery-fortySix"></a>
                <a href="./img/assignments/038-Vogue China Chalet/05-VogueChina-Chalet-05.jpg" class="project-card__view-project" data-fslightbox="gallery-fortySix"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/042-vogue Gioiello Gingerbread/02-VogueGio-Gingerbread-02.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">vogue Gioiello Gingerbread</h2>
                <a href="./img/assignments/042-vogue Gioiello Gingerbread/02-VogueGio-Gingerbread-02.jpg" class="project-card__view-project" data-fslightbox="gallery-fortySeven">View project</a>
                <a href="./img/assignments/042-vogue Gioiello Gingerbread/01-VogueGio-Gingerbread-01.jpg" class="project-card__view-project" data-fslightbox="gallery-fortySeven"></a>
                <a href="./img/assignments/042-vogue Gioiello Gingerbread/03-VogueGio-Gingerbread-07.jpg" class="project-card__view-project" data-fslightbox="gallery-fortySeven"></a>
                <a href="./img/assignments/042-vogue Gioiello Gingerbread/04-VogueGio-Gingerbread-08.jpg" class="project-card__view-project" data-fslightbox="gallery-fortySeven"></a>
                <a href="./img/assignments/042-vogue Gioiello Gingerbread/05-VogueGio-Gingerbread-04.jpg" class="project-card__view-project" data-fslightbox="gallery-fortySeven"></a>
                <a href="./img/assignments/042-vogue Gioiello Gingerbread/06-VogueGio-Gingerbread-05.jpg" class="project-card__view-project" data-fslightbox="gallery-fortySeven"></a>
                <a href="./img/assignments/042-vogue Gioiello Gingerbread/07-VogueGio-Gingerbread-03.jpg" class="project-card__view-project" data-fslightbox="gallery-fortySeven"></a>
                <a href="./img/assignments/042-vogue Gioiello Gingerbread/08-VogueGio-Gingerbread-06.jpg" class="project-card__view-project" data-fslightbox="gallery-fortySeven"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/035-The Fashion The Beach/01-TheFashion-TheBeach-01.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">The Fashion The Beach</h2>
                <a href="./img/assignments/035-The Fashion The Beach/01-TheFashion-TheBeach-01.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyEight">View project</a>
                <a href="./img/assignments/035-The Fashion The Beach/02-TheFashion-TheBeach-02.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyEight"></a>
                <a href="./img/assignments/035-The Fashion The Beach/03-TheFashion-TheBeach-03.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyEight"></a>
                <a href="./img/assignments/035-The Fashion The Beach/04-TheFashion-TheBeach-04.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyEight"></a>
                <a href="./img/assignments/035-The Fashion The Beach/05-TheFashion-TheBeach-06.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyEight"></a>
                <a href="./img/assignments/035-The Fashion The Beach/06-TheFashion-TheBeach-07.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyEight"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/012-Casa Vogue Scarecrows/01-VCA_Scarecrows_fin_001.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">Casa Vogue Scarecrows</h2>
                <a href="./img/assignments/012-Casa Vogue Scarecrows/01-VCA_Scarecrows_fin_001.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyNine">View project</a>
                <a href="./img/assignments/012-Casa Vogue Scarecrows/02-VCA_Scarecrows_fin_007.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyNine"></a>
                <a href="./img/assignments/012-Casa Vogue Scarecrows/03-VCA_Scarecrows_fin_005.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyNine"></a>
                <a href="./img/assignments/012-Casa Vogue Scarecrows/04-VCA_Scarecrows_fin_003.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyNine"></a>
                <a href="./img/assignments/012-Casa Vogue Scarecrows/05-VCA_Scarecrows_fin_008.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyNine"></a>
                <a href="./img/assignments/012-Casa Vogue Scarecrows/06-VCA_Scarecrows_fin_004.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyNine"></a>
                <a href="./img/assignments/012-Casa Vogue Scarecrows/07-VCA_Scarecrows_fin_006.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyNine"></a>
                <a href="./img/assignments/012-Casa Vogue Scarecrows/08-VCA_Scarecrows_fin_012.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyNine"></a>
                <a href="./img/assignments/012-Casa Vogue Scarecrows/09-VCA_Scarecrows_fin_009.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyNine"></a>
                <a href="./img/assignments/012-Casa Vogue Scarecrows/10-VCA_Scarecrows_fin_010.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyNine"></a>
                <a href="./img/assignments/012-Casa Vogue Scarecrows/11-VCA_Scarecrows_fin_013.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyNine"></a>
                <a href="./img/assignments/012-Casa Vogue Scarecrows/12-VCA_Scarecrows_fin_014 (1).jpg" class="project-card__view-project" data-fslightbox="gallery-fortyNine"></a>
                <a href="./img/assignments/012-Casa Vogue Scarecrows/13-VCA_Scarecrows_fin_016.jpg" class="project-card__view-project" data-fslightbox="gallery-fortyNine"></a>
              </div>
            </div>
          </section>
          <section class="project-card project-list__card" onclick="clickHere(this)">
            <div class="container-fluid project-card__container">
              <picture class="img-cover project-card__img">
                <img src="./img/assignments/036-View on Color Abstract/01-View-Abstract-02.jpg" alt="Army of fetiches">
                <div class="shadow"></div>

              </picture>
              <div class="project-card__content">
                <h2 class="project-card__title">View on Color Abstract</h2>
                <a href="./img/assignments/036-View on Color Abstract/01-View-Abstract-02.jpg" class="project-card__view-project" data-fslightbox="gallery-fifty">View project</a>
                <a href="./img/assignments/036-View on Color Abstract/02-View-Abstract-01.jpg" class="project-card__view-project" data-fslightbox="gallery-fifty"></a>
                <a href="./img/assignments/036-View on Color Abstract/03-View-Abstract-03.jpg" class="project-card__view-project" data-fslightbox="gallery-fifty"></a>
                <a href="./img/assignments/036-View on Color Abstract/04-View-Abstract-04.jpg" class="project-card__view-project" data-fslightbox="gallery-fifty"></a>
              </div>
            </div>
          </section>
        </div>
        <!-- project-list END -->

        <?php include 'templates/footer.php'; ?>
        <?php include_once 'templates/newsletter.php'; ?>

      </main>
      <script type="text/javascript" src="js/jquery-3.6.0.min.js?v=323662462465"></script>
    <script src="node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="js/hamburger.js"></script>
    <script type="text/javascript" src="js/fslightbox.js?v=323662462465"></script>
    <script type="text/javascript" src="js/main.js?v=323662462465"></script>
    <script src="./js/newsletter.js"></script>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
</body>
</html>