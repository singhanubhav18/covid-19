<?php
    include "logic.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">

    <scrpit src="https://kit.fontawesome.com/996973c893.js" crossorgin="anonymous"></scrpit>

    <link rel="stylesheet"href=style.css>
    <link rel = "icon" type = "image/ico" href = "icon.png">




    <title>Covid-19</title>
    

    
</head>
<body>

    <div  class="container-fluid bg-light p-5 text-center my-3">
        <h1>Co<span><img src ="covid.jpg" style ="width :50px;height:50px;"></span>vid-19 tracker</h1>
        <p style="color:Blue" ><i>Stay safe and healthy!</i></p>
        <p style="color:Blue" ><i>All because we CARE!</i></p>
    </div>

    <div  class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Confirmed</h5>
                <?php echo $total_confirmed;?>
                
                
            </div>
            <div class="col-4 text-success">
                <h5>Recovered</h5>
                <?php echo $total_recovered;?>
            </div>
            <div class="col-4 text-danger">
                <h5>Deceased</h5>
                <?php echo $total_deaths;?>
            </div>
        </div>
    
    
    </div>

    <div class="container-fluid">
        <div class="table-responsive">
        <table class="table">
            <thead class="bg-light">
                <tr>
                        
                    <th scope="col">Countries</th>
                    <th scope="col">Active Cases</th>
                    <th scope="col">Recovered</th>
                    <th scope="col">Deceased</th>


                </tr>
            </thead>
            <tbody>
                <?php
                
                    foreach($data as $key => $value){

                        
                        $today_case = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
                        $today_recoverey= $value[$days_count]['recovered'] -  $value[$days_count_prev]['recovered'];
                        $today_death= $value[$days_count]['deaths'] -  $value[$days_count_prev]['deaths'];
                        


                      
                    
                        
                    

                        ?>
                        
                        
                        
                    <tr>
                        <th><?php echo $key;?></th>

                        <td>
                    <?php echo $value[$days_count]['confirmed'];?>
                    
                    <?php if($today_case != 0){?>
                        <small class="text-warning pl-3"><i class="fas fa-arrow-up"></i><?php echo $today_case;?></small>
                        <?php
                    }
                        ?>
                    
                    </td>

                    <td>
                    <?php echo $value[$days_count]['recovered'];?>

                    <?php if($today_recoverey != 0){?>
                        <small class="text-success pl-3"><i class="fas fa-arrow-up"></i><?php echo $today_recoverey;?></small>
                        <?php
                    }
                        ?>
                    
                    
                    
                    </td>

                    <td>
                    <?php echo $value[$days_count]['deaths'];?>
                    <?php if($today_death != 0){?>
                    <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $today_death;?></small>
                        <?php
                    }
                        ?>
                    
                    <?php?>
                    </td>
                    </tr>
                    
                    <?php
            }
                ?>
                
                    
            </tbody>
        </table>
        
        </div>
    </div>
    <footer class="footer mt-auto py-3 bg-dark">
  <div class="container text-center">
    <span class="text-muted">Copyright &copy;2020,Singha</span>
  </div>
</footer>

</body>
</html>