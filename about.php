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
    <link rel="stylesheet" href="./css/about.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon_mb.png">

    <meta name="description" content="Born in Germany, Michael started by creating a photo festival there and then joined Paris in 1993. Self-taught and curious, his talent and his demanding eye quickly opened doors for him. First seduced by the ephemeral aspect of magazines, he collaborates with VOGUE, Worlds of Interiors, New-York Times and many others.">

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"
/>
    <style ></style>
    <title>About page</title>
</head>
<body>
<?php include_once 'templates/header.php'; ?>

    <main class="main">
        <!-- intro BEGIN -->
        <section id="intro" class="intro">
          <picture class="img-cover intro__hero">
            <img src="img/About image.jpg" alt="Deformers attemped deseption">
          </picture>
          <div class="container-fluid intro__container">
            <div class="intro__content">
              <h1 class="intro__title">ABOUT</h1>
            </div>
          </div>
          <a href="#intro" class="js-scroll-target scroll-up intro__scroll-up is-hidden">
            <svg width="16" height="38" viewBox="0 0 16 38" xmlns="http://www.w3.org/2000/svg" class="scroll-up__icon">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.68767 6.67492L7.05163 0.310959C7.44216 -0.0795628 8.07532 -0.0795628 8.46584 0.310959L14.8298 6.67492C15.2203 7.06545 15.2203 7.69861 14.8298 8.08913C14.4393 8.47966 13.8061 8.47966 13.4156 8.08913L8.75874 3.43228L8.75874 37.0181L6.75874 37.0181L6.75874 3.43228L2.10188 8.08913C1.71136 8.47966 1.07819 8.47966 0.68767 8.08913C0.297146 7.69861 0.297146 7.06544 0.68767 6.67492Z"/>
            </svg>
          </a>
        </section>
        <section class="info">
            <div class="about-header">
                <h2>Who is Michael Baumgarten?</h2>
            </div>
            <div class="about-main">
                <p>Born in Germany, Michael started by creating a photo festival there and then joined Paris in 1993. Self-taught and curious, his talent and his demanding eye quickly opened doors for him. First seduced by the ephemeral aspect of magazines, he collaborates with VOGUE, Worlds of Interiors, New-York Times and many others. At the same time, he broadened his work to luxury (Hermès, Giorgio Armani, etc.).<br><br>
                    For the past 30 years, eager for new experiences and sharing, he has invested in animation and digital creation of images that he deploys in galleries, the metaverse or public space.<br><br>
                    The point of view is nothing without intelligence. His personal work is a mirror to his quasi philosophical questionings. And by questioning himself, he raises us.<br><br>
                    Marie-Agnès Gaillard</p>
            </div>
            <div class="about-contact">
                <p>Contact</p>
                <a href="mailto:paris@michaelbaumgarten.com">paris@michaelbaumgarten.com</a>
            </div>
        </section>
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