<?php include 'header2.php';
session_start();
 
    require_once('contact.inc.php');

     $recordss = mysqli_query($con,"SELECT * FROM contactdata"); 

    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($con,"DELETE FROM contactdata WHERE id = $id");
        

         ?>
 
               <script >
                  alert('hello...You have successfully delected a record');
              
                  window.location.href = "viewcontact.php?welcome";
               
               </script>";
                <?php
        

      
      //$query = "DELETE FROM contactdata WHERE id = $id";
    }
 ?>

  <?php

                      if (isset($_POST['save'])) {  

                         $a = $_POST['check_list'];
                        
                         //$b= implode(",", $a);

                         
                         
 
                        $checkbox = count($a);
                          $userid= $_SESSION['id'];
                       //  print_r($_SESSION['insert']);
                           
                         
                          $i =0;
                          $_SESSION['selected'] = [];


                           //for ($i=0; $i < $checkbox; $i++) { 
                          while ($i < $checkbox){

                          $insert = $_POST['check_list'][$i];

                          $_SESSION['insert']=$insert;

                          
                          $wend = "SELECT * FROM contactdata WHERE id = $insert";
 
                          $results = mysqli_query($con,$wend);   
                          if ($row = mysqli_fetch_assoc($results)) {

                            $fname=$row['fname'];
                            $lname=$row['lname'];
                            $gender=$row['gender'];
                            $pnum=$row['pnum'];

                            

                       
                            //print_r($row);
                              $sql= "INSERT INTO logbook(fname,lname,gender,pnum,checkbox,userid) VALUES('$fname','$lname','$gender','$pnum','$insert','$userid')";
                                                     //  print_r($sql);
                                                          $result= mysqli_query($con,$sql);
                                                          if($result==true){

                           $wen = "SELECT * FROM logbook WHERE checkbox = $insert";
 
                          $result = mysqli_query($con,$wen);   
                          if ($row = mysqli_fetch_assoc($result)) {



                            $lname=$row['lname'];
                            $gender=$row['gender'];
                            $_SESSION['selected'][] =[
                              "hname" => $row['fname'],
                              "fnum" => $row['pnum'],
                            ];
                                      
                            }else{

                              echo "Not fetched from the database";
                            }

                            $wens = "SELECT pnum FROM logbook WHERE pnum = $insert";
                             $results = mysqli_query($con,$wens);   
                          
                            }else{
                              echo "failed";
                            }
                              $i++;
                          } 
                        }

                        ?>
                        <script >
                          window.location.href = "sendsms2.php";
                        </script>
                    <?php
                      }
                    ?>



  <!--end of header-->  
	<div class="container mt-5">
	<div class="row">
 <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                      <aside  style="background-color: #052146">
                      <center><a href="userdashnew.php" class="text-center" style="font-size: 25px;color: white;">Dashboard</a></center>
                          <!-- /input-group -->
                          <hr>
                      </aside>
                      <aside class=" author_widget">
                          <h4>Welcome <small style="text-transform: capitalize;"><?php echo $_SESSION['fname'].'&nbsp'. $_SESSION['lname']; ?></small></h4>
                          <hr>
                      </aside>
                      <aside class="">
                          <h3 class="widget_title lead"> <a href="sendsms2.php" ><i class="fa fa-comment-o"></i> Send SMS</a></h3><hr>
                          <h3 class="widget_title lead"><a href="contactbook.php"><i class="fa fa-vcard-o"></i> Contact Book</a></h3><hr>
                          <h3 class="widget_title lead"><a href=""><i class="fa fa-credit-card-alt"></i> Buy Credit</a></h3><hr>
                          <h3 class="widget_title lead"> <a href="smslogs.php"><i class="  fa fa-envelope-o"></i> Send Sms Log</a></h3><hr>
                          <h3 class="widget_title lead"><a href="account.php"><i class="fas fa-users"></i> Account Settings</a></h3><hr>
                          <h3 class="widget_title lead"><a href="Homepage.php"><i class=" fa fa-power-off"></i> LOG OUT</a></h3>
                      </aside>
                      <hr>
              </div>
          </div>


          <div class="col-md-8 col-lg-8 col-sm-8">



            <p class="lead text-center" style="background-color:#052146;color: white;font-weight: bold">View Contact </p  >
            <p></p>
              <div class="card-group">
                <div class="card-body">
                  <div class="table-responsive">
                    <form class="form-group" method="POST" action="">      
                      <table class="table table-striped">
                      <thead class="thead-dark" style="background-color:#052146;color: white;">
                        <tr>
                          <td>S/N</td>
                          <td>First Name</td>
                          <td>Last Name</td>
                          <td>Gender</td>
                          <td>Phone Number</td>
                          <td colspan="">select</td>
                          <td>Action</td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $cnt=1;
                        while ($row = mysqli_fetch_array($records)) {?>
                          
                            <tr>
                              <td><?php echo $cnt; ?></td>
                              <td><?php echo $row['fname']; ?></td>
                                <td><?php echo $row['lname']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                              <td><?php echo $row['pnum']; ?></td>
                              
                              <td><input type="checkbox" value="<?php echo $row['id']; ?>" name="check_list[]" class="form-check-input ml-2"></td>
                              <td><a href="viewcontact.php?delete=<?php echo $row['id']; ?>" class="btn btn-outline-danger" ><i class=" fa fa-remove"></a></td>
                            </tr>
                         <?php 

                         $cnt=$cnt+1;}

                          ?>
                       <!-- 
                        <tr>
                          <td>1</td>
                          <td>Ademuyiwa</td>
                          <td>AdeJare</td>
                          <td>Male</td>
                          <td>08182888927</td>
                          <td><input type="checkbox" name="#" class="form-check-input ml-5"></td>
                        </tr>-->



                      </tbody>
                      

                   
                    </table>

                <button class="btn btn-outline-info" href="" name="save" >Select Contact</button>
                 </form>
                   
                  </div>

                </div>
    
          </div><!--End of card-group-->


</div><!--End of col-md-9-->
      </div>

</div>
      <style>
      	 @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700');
@import url('https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700');
body{
  background-color: #fafaff;
}
      	.card{
  box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2);
}#card-effect:hover {
    z-index: 3;
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05); 
}
    #card-effect:hover:after {
      opacity: 1;
      visibility: visible; 
  }
    #card-effect:hover .work-text {
      -webkit-transition-delay: .2s;
      -o-transition-delay: .2s;
      transition-delay: .2s;
      opacity: 1;
      visibility: visible;
      margin-top: 0px; 
  }
  .blog_right_sidebar{
    border:1px solid #eeeeee;
    background:#fafaff;
    padding:30px
  }

  .blog_right_sidebar .widget_title{
    font-size:15px;
    text-align:left;
    padding:2px 0px;
    margin-bottom:10px;
  }
  .blog_right_sidebar .author_widget{
    text-align:center
  }
  .blog_right_sidebar .author_widget h4{
    font-size:18px;
    line-height:20px;
    color:#222;
    margin-bottom:5px;
    margin-top:30px
    background-color:tar ;
  }

  a:hover{
        text-decoration: none;
  }
  a{
    text-decoration: none;
    color:black;
  }
      </style>
       <?php include 'footer.php' ?>
</body>
</html>