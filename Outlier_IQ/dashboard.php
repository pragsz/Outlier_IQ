<?php
session_start();
if(isset($_SESSION['username'])){
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Outlier IQ</title>
      <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="assets/css/styles.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  </head>
  <body>


      <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand"><b>OUTLIER IQ</b></a>
      <form class="row g-3" role="search">
        <div class="col-auto">
          <a target="_blank" style="border-radius:0px;" class="btn btn-outline-success" href="http://localhost:5000">RTA</a> 
        </div>
        <div class="col-auto">
          <a style="border-radius:0px;text-align:center" href="logout.php" class="btn btn-outline-success" type="submit">LOGOUT</a>
        </div>
      </form>
    </div>
  </nav>

    <script>
        $(document).ready(function(){
            refreshDiv();
        });

        function refreshDiv() {
            $.ajax({
                type: 'POST',
                url: 'ajax.php',
                data: { sensor:"d01"},
                success: function(response) {
                    $('#refreshDiv').html(response);
                }
            });
        }
        setInterval(refreshDiv, 15000);
    </script>


    <?php
    include_once "modals.php"
    ?>
        <center>
            <br>
            <div id="refreshDiv"></div>

            <br>

            <?php

            $data=array(
                  "D01"=>array("https://thingspeak.com/channels/2475344/widgets/821331","https://thingspeak.com/channels/2475344/widgets/821332","D01","Computer Lab (4001)","10.0.60.197","d8bc38e4cd30","","#D01"),
                  "D02"=>array("https://thingspeak.com/channels/2475344/widgets/821333","https://thingspeak.com/channels/2475344/widgets/821334","D02","Cse Hod (3001)","10.0.60.40","d8bc38e59a18","","#D02"),
                  "D03"=>array("https://thingspeak.com/channels/2475344/widgets/821335","https://thingspeak.com/channels/2475344/widgets/821336","D03","Server Room","10.0.60.103","d8bc38e583f0","","#D03"),
                  "D04"=>array("https://thingspeak.com/channels/2475348/widgets/821344","https://thingspeak.com/channels/2475348/widgets/821345","D04","Food Court","10.0.60.54","d8bc38e5a034","","#D04"),
                  "D05"=>array("https://thingspeak.com/channels/2475348/widgets/821347","https://thingspeak.com/channels/2475348/widgets/821349","D05","Outdoor","10.0.60.50","d8bc38e59d90","","#D05"),
                  "D06"=>array("https://thingspeak.com/channels/2475348/widgets/821350","https://thingspeak.com/channels/2475348/widgets/821351","D06","Faculty House","10.0.60.20","d8bc38e54820","","#D06"),
            );


            foreach ($data as $row)
            {
            ?>
        <div class="table-responsive">
        <table style="width: 80%"  class="table">
            <tr>
                <td class="text-center">
                    <iframe class="iframe"   width="320" height="250" style="border:none" src=<?php echo $row[0]?>></iframe>
                    <iframe class="iframe"  width="320" height="250" style="border: none" src="<?php echo $row[1]?>"></iframe>
                </td>
                <td align="center">
                    <table id="desktop" style="margin-top: 5%;text-align: center;"  class="table"  >
                        <tr>
                            <td>
                                Device ID
                            </td>
                            <td>
                                <?php echo $row[2]?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Location
                            </td>
                            <td>
                                <?php echo $row[3]?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                IP
                            </td>
                            <td>
                                <?php echo $row[4]?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                MAC
                            </td>
                            <td>
                                <?php echo $row[5]?>
                            </td>
                        </tr>
<!--                        <tr>-->
<!--                            <td>-->
<!--                                Status-->
<!--                            </td>-->
<!--                            <td>-->
<!--                                d8bc38e4cd30-->
<!--                            </td>-->
<!--                        </tr>-->
                        <tr>
                            <td colspan="2">
                                <button  data-toggle="modal" data-target=<?php echo $row[7]?> style="border-radius: 0px" class="btn btn-primary">Visualize</button>
                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
        </table>
            <table id="mobile" style="margin-top: 5%;text-align: center;"  class="table"  >
                <tr>
                    <td>
                        Device ID
                    </td>
                    <td>
                        <?php echo $row[2]?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Location
                    </td>
                    <td>
                        <?php echo $row[3]?>
                    </td>
                </tr>
                <tr>
                    <td>
                        IP
                    </td>
                    <td>
                        <?php echo $row[4]?>
                    </td>
                </tr>
                <tr>
                    <td>
                        MAC
                    </td>
                    <td>
                        <?php echo $row[5]?>
                    </td>
                </tr>
<!--                <tr>-->
<!--                    <td>-->
<!--                        Status-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        d8bc38e4cd30-->
<!--                    </td>-->
<!--                </tr>-->
                <tr>
                    <td colspan="2">
                        <button  data-toggle="modal" data-target=<?php echo $row[7]?> style="border-radius: 0px" class="btn btn-primary">Visualize</button>
                    </td>
                </tr>

            </table>
            </td>
            </tr>

            </table>


        </div>
                <?php
            }
            ?>
        </center>



<!--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



  </body>
</html>

<?php
}
else{
    header("location:index.php?status=0");
}
    ?>
