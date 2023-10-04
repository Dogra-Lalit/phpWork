<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
</head>
<body>
    <?php include 'navigation.php'; 
     $menuItems = array(
        'Home' => '/project/php/website/',
        'Services' => '#',
        'About' => 'about.php',
        'Contact' => '#',
     );
     echo generateNavigation($menuItems);
    ?>
    <?php include 'carousel.php'; 
    $carouselItems = array(
        array(
            'image' =>'images/chicago.jpg',
            'caption' =>'First slide label',
            'desc' =>'Some representative placeholder content for the first slide.',
            'interval'=>'10000',
        ),
        array(
            'image' =>'images/la.jpg',
            'caption' =>'Second slide label',
            'desc' =>'Some representative placeholder content for the second slide.',
            'interval'=>'2000',
        ),
        array(
            'image' =>'images/ny.jpg',
            'caption' =>'Third slide label',
            'desc' =>'Some representative placeholder content for the third slide',
            'interval'=>'',
        ),
    );
    //echo "<pre>";print_r($carouselItems);exit;
    echo generateCarousel($carouselItems);
    ?>
    <section class="my-5">
        <div>
            <h3 class="text-center">About Us
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded",function(){
            var navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(function(navLink){
                navLink.addEventListener("click",function(){
                    navLinks.forEach(function(link){
                        link.classList.remove("active");
                    });
                    navLink.classList.add("active");
                })
            })

        });
 

    </script>

</body>

</html>