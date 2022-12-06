<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sipna Club's</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
      table{
        margin-left: auto;
        margin-right: auto;
        margin-top: 40px;
        width: 80%;
        }

        table, th, td {
        border: 1px solid white;
        border-collapse: collapse;
        }
        th, td {
        background-color: #BEBEBE;
        color: black;
        padding: 15px;
        }

    </style>
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

      <table>
          <tr>
            <th>Club Name</th>
            <th>Activity Name</th>
            <th>Activity Details</th>
            <th>Last Date</th>
            <th>Result Date</th>
            <th>Registration Link</th>
          </tr>
          <?php
                $conn = new mysqli('localhost', 'root', '', 'sipna_clubs');

                // Check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }else{
                
                $sql = "SELECT * FROM activity";
                $data=mysqli_query($conn,$sql);
                $total=mysqli_num_rows($data);
                
                if($total !=0){
                  while(($result=mysqli_fetch_assoc($data))){
                          echo"
                          <tr>
                            <td>".$result['club_name']."</td>
                            <td>".$result['activity_name']."</td>
                            <td>".$result['activity_details']."</td>
                            <td>".$result['last_date']."</td>
                            <td>".$result['result_date']."</td>
                            <td>".$result['Llink']."</td>
                          </tr>
                          ";
                      }
                    }
                }

           ?>


     </table>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>