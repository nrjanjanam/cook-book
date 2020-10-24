<?php
require 'db_connect.php';

  if(isset($_POST['action']))
  {
      $query="SELECT * FROM recipe WHERE eating_habits!=''";
      if(isset($_POST['eat'])){
          $eat=implode("','", $_POST['eat']);
          $query .="AND eating_habits IN('".$eat."')";
          
      }
      if(isset($_POST['spicy'])){
          $query.="AND isspicy ='1'";
          
      }
      if(isset($_POST['sweet'])){
          $query.="AND issweet='1'";
          
      }
      if(isset($_POST['hot'])){
         
          $query.="AND ishot='1'";
          
      }
      if(isset($_POST['sour'])){ 
          $query.="AND issour=1";
          
      }
      if(isset($_POST['creamy'])){
          $query.="AND iscreamy=1";
          
      }
      if(isset($_POST['smokey'])){
          $query.="AND issmokey=1";
          
      }
      if(isset($_POST['cheesy'])){
          $query.="AND ischeesy=1";
          
      }
      if(isset($_POST['food'])){
          $food=implode("','", $_POST['food']);
          $query .="AND type_of_food IN('".$food."')";
          
      }
      $result= $conn->query($query);
      $output='';
      
      if($result->num_rows>0)
      {
          while($row=$result->fetch_assoc()){
              $output .='<div class="col-md-3 col-lg-4 col-sm-6 mb-2 p-3" ><div class="card"><div class="card-front"><div class="border-secondary"><img src=" '.$row['image'].'" height=" 300px" width=" 295px" style="padding-top:100px"></div></div><a href="blog.php?id='.$row['recipe_id'].'" style="text-decoration: none;"><div class="card-back lala"><div class="name"> '.$row['recipe_name'].'</div><br><div class="tagline"> '.$row['tagline'].'</div></div></a></div></div>';
          }
          
      }
      else
      {
         $output= '<h3> No Data Found</h3>'; 
      }
      echo $output;
  }  
?>