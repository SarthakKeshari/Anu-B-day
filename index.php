<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Chotti B'Day</title>
    <style>
        body{
            height: 100vh;
            animation: change 5s infinite;;
        }
        @keyframes change {
            0%{
                background:linear-gradient( pink, orange);
            }
            25%{
                background:linear-gradient(aqua, pink);
            }
            50%{
                background:linear-gradient(lime, aqua);
            }
            75%{
                background:linear-gradient(yellow, lime);
            }
            100%{
                background:linear-gradient(orange, yellow);
            }
        }
    </style>
  </head>
  <body>
    <div class="container">
        <p class="h1 text-center">Hamari Chotti Chaiwali</p>

        
        <div class="row g-3 d-flex justify-content-center">
        <div class="col-md-10">
            <label for="validationServer02" class="form-label">Enter your Birth Date</label>
            <input type="date" class="form-control" id="validationServer02" required>
        </div>

        <div class="col-10">
            <button class="btn btn-primary" onclick="validate()">Submit</button>
        </div>
        <img src="intro.jpg" alt="" style="width:50%;">
        </div>
    </div>

    

    <script>
        function validate()
        {
            var a=document.getElementById("validationServer02").value;
            
            if(a=="2019-01-20")
            {

                window.location.href="pictures.php";
                //alert("Valid");
            }
            else
            {
                alert("Please enter correct Birth Date");
            }
        }
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>