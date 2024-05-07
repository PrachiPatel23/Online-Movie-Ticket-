<?php 
include("header.php");
include("conn.php");

$con = new connec();
$tbl = "movie";
$result = $con->selectAll($tbl);
$result1 = $con->selectAll($tbl);
?>


<section class="mt-5 textcenter">
    <h5 class="tect-centre">Coming Soon</h5>

    <div class="container">
        <div class="row">
            <?php 
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                    ?>
                        <div class="col-md-3">
                            <img src="" style="width:100%; height:250px;"/>
                            <p><b>Release Date : </b> <?php echo$row["name"];?></p>
                            <p><b>Industry     : </b> <?php echo$row["name"];?></p>
                            <p><b>Language     : </b> <?php echo$row["name"];?></p>
                            <p><b>Genre        : </b> <?php echo$row["name"];?></p>
                        </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    
</section>


<?php 
include("footer.php");
?>
