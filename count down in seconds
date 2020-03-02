<?php
session_start();
if(isset($_POST['submit']))
{
    $_SESSION['toseconds'] = $_POST['toseconds'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Count Down</title>
    <!-- bootstrap css -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
        #c_time {
            font-size: 25px;
            font-weight: 500;
        }
        #count {
            font-size: 74px;
            font-weight: 700;
        }
        #count_to {
            font-size: 25px;
            font-weight: 500;
        }
    </style>
</head>
<body onload="clock()">
    <div class="text-center mt-5">
        <h1 style="font-size: 27px;">Count Down in Seconds</h1>
    </div>
    <div class="container-fluid pt-3">
        <div class="row my-3">
            <div class="col-1 col-md-1 col-lg-1"></div>
            <div class="col-10 col-md-10 col-lg-10">
                <div id="clk" class="border py-3 mt-2 text-center">
                    <script type="text/javascript">
                        function clock(str) {
                            setInterval(function(){
                                var xmlhttp = new XMLHttpRequest();
                                xmlhttp.onreadystatechange = function() {
                                    if (this.readyState == 4 && this.status == 200) {
                                        document.getElementById("clk").innerHTML = this.responseText;
                                    }
                                };
                                xmlhttp.open("GET", "countdown.php", true);
                                xmlhttp.send();
                            },0);
                        }
                    </script>
                    
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-1 col-md-2 col-lg-2"></div>
            <div class="col-10 col-md-8 col-lg-8">
                <form method="post">
                    <input type="number" name="toseconds" value="<?php if(isset($_POST['toseconds'])){echo $_POST['toseconds'];} ?>">
                    <input type="submit" name="submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
