<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sipna Club's</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="RegistrationForm.css">
</head>
<body>

    <!--Nav Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="Home.html">Sipna Club's</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="StudentHome.html">Home </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="./ActitivyGallery.php">Activity Gallary</a>
            </li>
          </ul>
        </div>
      </nav>

      <h1>Registration Form</h1>
      <div class="container" >
                <form action="ConnectNature.php" method="post">
                    <div class="form-group">
                        <label>Student Name:</label>
                        <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                    </div>
                    <div class="form-group">
                      <label>Student Id:</label>
                      <input type="email" class="form-control" placeholder="Student Id" name="email" id="email">
                  </div>
                    <div class="form-group">
                      <label for="year">Year:</label>

                        <select name="year" id="year">
                          <option value="First_Year">First Year</option>
                          <option value="Second_Year">Second Year</option>
                          <option value="Third_Year">Third Year</option>
                          <option value="Final_Year">Final Year</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="branch">Branch:</label>

                        <select name="branch" id="branch">
                          <option value="CSE">CSE</option>
                          <option value="IT">IT</option>
                          <option value="Mechanical">Mechanical</option>
                          <option value="Civil">Civil</option>
                          <option value="ENTC">ENTC</option>
                          <option value="Architecture">Architecture</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label>UTR Number:</label>
                      <input type="text" class="form-control" placeholder="UTR Number" name="utr" id="utr">
                  </div>
                    <input type="submit" value="submit" class="btn btn-primary ">

            </div>

            </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>