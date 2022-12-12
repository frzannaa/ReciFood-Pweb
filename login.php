<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title> Login </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/koki.jpg" rel="icon">
  <link href="assets/img/koki.jpg" rel="apple-touch-icon">
    <!-- di bawah ini source google font -->
    <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&family=Roboto:wght@100&display=swap');</style>
    <!-- di bawah ini source bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- di bawah ini source style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <div class="header">
        <div class="row">
            <div class="col-md-4">
                <div class="textlogo">ReciFood</div>
            </div>


            <div class="col-md-3"></div>
            <div class="col-md-5">
                <div class="boxlogin">
                    <form class="form-inline" role="form" method="POST" action="proseslogin.php" >
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                          
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-default" style="color: black;"><b>Log in </b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="hero">
        <div class="row">
            <div class="col-md-6 text">
           
                <h3> Secret Recipe by ReciFood!  </h3>
                <div class="texthero">
                    “Food is not rational. <br>
                  Food is culture, habit, craving and identity.” 
                </div>
            </div>


            <div class="col-md-6">
                <div class="formhero">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h1>Sign Up</h1>
                           

                          
                          <form role="form" method="GET" action="prosessignup.php" >
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><h4>Username</h4></label>
                                    <input type="input" class="form-control" id="username" name="username" placeholder="Enter Username">
                                </div>
                             <div class="form-group">
                                    <label for="exampleInputEmail1"><h4>Nama Lengkap</h4></label>
                                    <input type="input" class="form-control" id="nama" name="nama" placeholder="Enter Nama Lengkap ">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><h4>Email</h4></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"><h4>Password</h4></label>
                                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"><h4>Ulangi Password</h4></label>
                                    <input type="password" class="form-control" id="password2"  name="password2" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
            <h3>&copy; recifood_its</h3>
    </div>
</body>
</html>
