<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sipna Club's</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./Activity.css">
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
              <a class="nav-link" href="carnival.html">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ActivityForm.php">Add Activity</a>
            </li>
          </ul>
        </div>
      </nav>


<h1>Activity Details</h1>
<div class="container" >
          <form action="Activity.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <label>Club Name:</label>
                  <input type="text" class="form-control" placeholder="Club Name" name="ClubName" id="ClubName">
              </div>
              <div class="form-group">
                  <label>Activity Name:</label>
                  <input type="text" class="form-control" placeholder="Activity Name" name="activityName" id="activityName">
              </div>
              <div class="form-group">
                <label>Details</label>
                <textarea class="form-control" placeholder="Details" name="details" id="details"></textarea>
            </div>
            <div class="form-group">
              <label>Last Date:</label>
              <input type="date" class="form-control" name="LastDate" id="LastDate">
          </div>
          <div class="form-group">
              <label>Result Date:</label>
              <input type="date" class="form-control" name="ResultDate" id="ResultDate">
          </div>
          <div class="form-group">
              <label>Registraion link:</label>
              <input type="text" class="form-control" name="registrationLink" id="registrationLink">
          </div>
          
          <button class="btn btn-primary" type="submit" name="Submit">Submit</button>
          </form>
        </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>