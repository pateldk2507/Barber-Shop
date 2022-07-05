<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Barber Shop</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/barberIcon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        
        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


        <style>
            .card{
                border-radius: 25px;
                padding: 5px;
                height: 100%;
            }
        </style>


    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php 
        
            include_once "navbar.php";

        ?>


   <!-- Appointment Content -->
    <div class="container">
            <h5 class="mt-4">What service you would like to book today?</h5>

            <div class="row p-5">
                <div class="col-sm mb-4">
                    <div class="card" style="width: 18rem;">
                        
                        <div class="card-body">
                          <h5 class="card-title">Need Hair styling</h5>
                          <p class="card-text">We have professional team of hair styling which definatly gives you a better look you wanted to..</p>
                          <a href="#" class="btn btn-primary">Book it now!</a>
                        </div>
                      </div>
                </div>

                <div class="col-sm mb-4">
                    <div class="card" style="width: 18rem;">
                        
                        <div class="card-body">
                          <h5 class="card-title">Want to colour your hair?</h5>
                          <p class="card-text">We have variety of hair color available from the famous brand you love.</p>
                          <a href="#" class="btn btn-primary">Book it now!</a>
                        </div>
                      </div>
                </div>

                <div class="col-sm mb-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Do you have acne or any skin problem?</h5>
                          <p class="card-text">Don't worry we'll take care of your skin and we guarantee that our treatment gives 100% of result within 30 days.</p>
                          <a href="#" class="btn btn-primary">Book it now!</a>
                        </div>
                      </div>
                </div>
            </div>
    </div>



</body>
</html>