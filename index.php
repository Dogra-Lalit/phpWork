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
    <?php include 'navigation.php';?>
    <?php include 'carousel.php';?>
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
            });
        });
    </script>
</body>
</html>