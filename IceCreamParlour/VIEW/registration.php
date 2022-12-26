<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../VIEW/Includes/CSS/login.css">

    <title>Document</title>
</head>
<body>
<div class="container">
        <header>CREATE ACCOUNT</header>
        <form action="../CONTROLLER/regController.php" method="POST">
            <!--USER NAME-->
            <div class="area email">
                <div class="input-area">
                    <input type="text" name="username" placeholder="USER NAME">
                </div>
            </div>

            <!--EMAIL-->
            <div class="area email">
                <div class="input-area">
                    <input type="text" name="email" placeholder="E-MAIL ADDRESS">
                </div>
            </div>

            <!--PASSWORD-->

            <div class="area password">
                <div class="input-area">
                    <input class="pass" name="password" type="password" placeholder="PASSWORD">
                    <span class="show">SHOW</span>
                </div>
            </div>

            <!--CONFIRM PASSWORD-->

            <div class="area password">
                <div class="input-area">
                    <input  name="cpassword" type="password" placeholder="CONFIRM PASSWORD">
                </div>
            </div>



            <!--SUBMIT BUTTON-->

            <input name="submit" type="submit" value="CREATE ACCOUNT">

            <!--CREATE NEW ACCOUNT-->

            <div class="createacc-link">I ALREADY HAVE AN ACCOUNT! <a href="http://localhost/PROJECT/VIEW/login.php">LOG-IN</a></div>
        </form>
    </div>
        <script>
            var input = document.querySelector('.pass');
            var show = document.querySelector('.show');

            show.addEventListener('click', active);

            function active (){
              if(input.type === "password") {
                  input.type = "text";
                 show.style.color = "#1DA1F2";
                 show.textContent = "HIDE";
                }else{
                  input.type = "password";
                  show.style.color = "#111";
                 show.textContent = "SHOW";
                }
            }

        </script>
</body>
</html>