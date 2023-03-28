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
    <link rel="stylesheet" href="./css/books.css">

    <link rel="icon" type="image/x-icon" href="./img/favicon_mb.png">

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"
/>
    <style ></style>
    <title>Books page</title>
</head>
<body>
<?php include_once 'templates/header.php'; ?>

    <main class="main">
        <!-- intro BEGIN -->
        <section id="intro" class="intro">
          <picture class="img-cover intro__hero">
            <img src="img/collectors.jpg" alt="Deformers attemped deseption">
          </picture>
          <div class="container-fluid intro__container">
            <div class="intro__content">
              <h1 class="intro__title">Collectors</h1>
            </div>
          </div>
          <a href="#intro" class="js-scroll-target scroll-up intro__scroll-up is-hidden">
            <svg width="16" height="38" viewBox="0 0 16 38" xmlns="http://www.w3.org/2000/svg" class="scroll-up__icon">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.68767 6.67492L7.05163 0.310959C7.44216 -0.0795628 8.07532 -0.0795628 8.46584 0.310959L14.8298 6.67492C15.2203 7.06545 15.2203 7.69861 14.8298 8.08913C14.4393 8.47966 13.8061 8.47966 13.4156 8.08913L8.75874 3.43228L8.75874 37.0181L6.75874 37.0181L6.75874 3.43228L2.10188 8.08913C1.71136 8.47966 1.07819 8.47966 0.68767 8.08913C0.297146 7.69861 0.297146 7.06544 0.68767 6.67492Z"/>
            </svg>
          </a>
        </section>
        <!-- intro END -->
        <div class="book">
            <div class="book-container">
                <div class="book-descriotion book-right">
                    <h3>Shifted 
                        Realities</h3>
                    <p>This is not a book of art photographs. It is a world, unknown, close to ours and yet so different.
Through 29 series of photographs that make up SHIFTED REALITIES, Michael Baumgarten transforms the ordinary into the extraordinary. </p>
                    <button href="">
                        <a href="./books/bookShifted.php">
                            View the book
                        </a>
                    </button>
                </div>
                <img src="img/books/image 1.jpg" alt="">
                <h3 class="hidenText">Shifted 
                    Realities</h3>

            </div>
        </div>
        <div class="book">
            <div class="book-container">
                <div class="book-descriotion book-right">
                    <h3>True Trips</h3>
                    <p>Michael Baumgarten sees things we don't. Fortunately, during his travels, he has photographed them.
He delivers TRUE TRIPS, an odyssey of enigmatic and powerful photos and videos. It's not about fixing memories but about entering a world. His world.
Incongruous, whimsical, mysterious, funny or disturbing.
And it tingles!</p>
                    <button href="">
                        <a href="./books/bookTrue.php">
                            View the book
                        </a>
                    </button>
                </div>
                <img src="img/books/true 1.jpg" alt="">
                <h3 class="hidenText">True Trips</h3>

            </div>
        </div>
        <div class="book">
            <div class="book-container rev">
                <h3 class="hidenText">Book Curiosites</h3>

                <img src="img/books/2022-12-10-Michael-Books51042 1.jpg" alt="">
                <div class="book-descriotion book-left ">
                    <h3>CURIOSITéS Esthétiques</h3>
                    <p>Dioramas came a long way, depicting historical, religious, didactic scenes.
This newspaper shows us 14 playful, ironic microcosmoi pieced together out of 19th century engravings. These paper cuts are quotes out
of the time when the diorama was invented, but discuss contemporary themes.</p>
                    <button href="">
                        <a href="./books/bookCurisosites.php">
                            View the book
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <div class="book">
            <div class="book-container rev">
                <h3 class="hidenText">Attempted
                    deception</h3>

                <img src="img/books/2022-12-10-Michael-Books51069 1 2 1.jpg" alt="">
                <div class="book-descriotion book-left ">
                    <h3>Attempted
                        deception</h3>
                        <p>The Deformers are Anna Burns and Michael Baumgarten and Attempted Deception
is the world they live in. Some may call it escapism, they may just call it their home.
Join their inland empire you may not want to return.</p>
                    <button href="">
                        <a href="./books/bookAttemped.php">
                            View the book
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <div class="book">
            <div class="book-container rev">
                <h3 class="hidenText">Anna&michael’s pole dance</h3>
                <img src="img/books/2023-01-23-Book Images PoleDance51954 1.jpg" alt="">
                <div class="book-descriotion book-left ">
                    <h3>Anna&michael’s pole dance</h3>
                    <p>Nobody poles like you! Michael Baumgarten and Anna Burns challenge the perception of Pole Dance and make it an artform.
They transfer pole dancing out shady bars and competition gyms into your own hand
as 3 tiny precious thumb cinemas.</p>
                    <button href="">
                        <a href="./books/bookPole.php">
                            View the book
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <?php include_once 'templates/footer.php'; ?>
        <?php include_once 'templates/newsletter.php'; ?>

      </main>
      <script type="text/javascript" src="./js/jquery-3.6.0.min.js?v=323662462465"></script>
    <script src="./node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./js/hamburger.js"></script>
    <script type="text/javascript" src="./js/fslightbox.js?v=323662462465"></script>
    <script type="text/javascript" src="./js/main.js?v=323662462465"></script>
    <script src="./js/newsletter.js"></script>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
</body>
</html>