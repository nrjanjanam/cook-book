<?php
 require 'db_connect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Cookbook-The eRecipeBook</title>
        <link rel="icon" href="images/favicon.png">
        <!--Font-->
         <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
        
        <!-- food icons -->
        <link rel="stylesheet" type="text/css" href="css/foodicons.css">
        <!-- recipe styles -->
        <link rel="stylesheet" type="text/css" href="css/recipe.css">
        <!-- filter styles -->
	    <link rel="stylesheet" type="text/css" href="css/filter.css" />
       <!--Font Awesome-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!--bootstrap-->
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
        <!--Jquery-->
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script> 
            $(document).ready(function()
            { 
                $(".flip").click(function()
                {
                    $(".panel").slideToggle("slow");
                    $(this).children("i").toggleClass("down");
                });
                $(".flip1").click(function()
                {
                    $(".panel1").slideToggle("slow");
                    $(this).children("i").toggleClass("down");
                });
                $(".flip2").click(function()
                {
                    $(".panel2").slideToggle("slow");
                    $(this).children("i").toggleClass("down");
                });
            }); 
        </script>
        
    </head>
    <body>
        
        <!-- Header -->
        
        <div class="container-fluid fix">
            <div class="row">
                <div class="logo1 col-md-4 col-lg-3 col-xl-3" >
                    <i class="fas fa-pizza-slice" style="font-size: 2.5em;padding-top: 20px"></i>
                    <br>
                    <h2 class="heading1">Cookbook</h2>
                </div>
                <div class="col-md-4 col-lg-6 col-xl-6" style="background:white"></div>
                <div class="col-md-4 col-lg-3 col-xl-3" style="background:white">
                    <nav class="nav" style="float: right">
                        <a class="nav__item1 icon1 " href="homepage.html" data-info="Previous page"><i size="5px" class="fa fa-arrow-left "></i><span>Previous page</span></a>
                        <a class="nav__item1 icon1 " href="homepage.html" data-info="back to homepage" ><i class="fa fa-home"></i><span>back to homepage</span></a>
                        <a class="nav__item1 icon1 " href="index.html" data-info="Login or signup" ><i class="far fa-user"></i><span>Login or signup</span></a>
				    </nav>
                </div>
            </div>
        </div>
        <!--After header-->
        <div class="container-fluid  rel">
            <div class="row">
               <div class="left col-md-4 col-lg-3 col-xl-3 sidebar" >
                   
                   <br>
                   <h5>Filters</h5>
                   <ul class="list-group">
                       <li class="list-item justify-content-between ">
                           <div class="flip">
                           <i class="fas fa-angle-right rotate"></i>
                           <label for="eating_habits" >
                               Eating Habits
                               </label>
                               <span class="badge1" style="float: right">3</span>
                           </div>
                           <div  class="panel">
                           <ul class="list-group" style="list-style-type: none">
                               <li class="list-item1 justify-content-between ">
                                   <input type="checkbox" name="eating_habits" value="veg" class="common_selector eat"> Vegetarian
                               </li>
                               <li class="list-item1 justify-content-between ">
                                  <input type="checkbox" name="eating_habits" value="nonveg" class="common_selector eat"> Non-Vegetarian
                               </li>
                               <li class="list-item1 justify-content-between ">
                                   <input type="checkbox" name="eating_habits" value="egg" class="common_selector eat"> Eggitarian
                               </li>
                           </ul>
                           </div>
                       </li>
                       <li class="list-item justify-content-between " >
                           <div class="flip1">
                           <i class="fas fa-angle-right angle-edit rotate"></i>
                           
                           <label for="taste">
                               Taste
                           </label>
                           
                               <span class="badge1" style="float: right">7</span></div>
                           <div class="panel1">
                           <ul class="list-group" style="list-style-type: none">
                               <li class="list-item1 justify-content-between ">
                                   <input type="checkbox" name="taste" value="1" class="common_selector spicy"> Spicy
                               </li>
                               <li class="list-item1 justify-content-between ">
                                  <input type="checkbox" name="taste" value="1" class="common_selector sweet"> Sweet
                               </li>
                               <li class="list-item1 justify-content-between ">
                                   <input type="checkbox" name="taste" value="1" class="common_selector hot"> Hot
                               </li>
                                <li class="list-item1 justify-content-between ">
                                   <input type="checkbox" name="taste" value="1" class="common_selector creamy"> Creamy
                               </li>
                               <li class="list-item1 justify-content-between ">
                                   <input type="checkbox" name="taste" value="1" class="common_selector sour"> Sour
                               </li>
                               <li class="list-item1 justify-content-between ">
                                   <input type="checkbox" name="taste" value="1" class="common_selector smokey" > Smokey
                               </li>
                               <li class="list-item1 justify-content-between ">
                                   <input type="checkbox" name="taste" value="1" class="common_selector cheesy"> Cheesy
                               </li>
                           </ul>
                           </div>
                       </li>
                       <li class="list-item justify-content-between ">
                           <div class="flip2">
                           <i class="fas fa-angle-right angle-edit rotate"></i>
                           
                           <label for="type_of_food">
                               Type of Food
                           </label>
                           
                           <span class="badge1" style="float: right">4</span>
                               </div>
                           <div class="panel2" >
                           <ul class="list-group" style="list-style-type: none" >
                              <li class="list-item1 justify-content-between ">
                                   <input type="checkbox" name="type_of_food" value="beverages" class="common_selector food"> Beverages
                               </li> 
                               <li class="list-item1 justify-content-between ">
                                   <input type="checkbox" name="type_of_food" value="maincourse" class="common_selector food"> Main Course
                               </li>
                               <li class="list-item1 justify-content-between ">
                                   <input type="checkbox" name="type_of_food" value="desserts" class="common_selector food"> Desserts
                               </li> 
                               <li class="list-item1 justify-content-between ">
                                   <input type="checkbox" name="type_of_food" value="sides and salads" class="common_selector food"> Sides and Salads
                               </li> 
                           </ul>
                           </div>
                       </li>
                   </ul>
               </div>
               <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9">
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col">
                                <h5 class="text-center" id="textChange">All Products</h5>
                                <hr>
                           </div>
                        </div>
                       <div class="row loading">
                        </div>
                        <div class="row" id="result">
                       </div>
                   </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                
                    filter_data();
                    
                    function filter_data()
                    {
                        $('.loading').html('<div class="col"><p style="position: absolute; color: White; top: 50%; left: 42.5%; display:none"><img src="images/movin-food.gif" id="loader" width="200px"></p></div>');
                        var action='data';
                        var eat= get_filter('eat');
                        var spicy= get_filter('spicy');
                        var sweet= get_filter('sweet');
                        var hot= get_filter('hot');
                        var creamy= get_filter('creamy');
                        var smokey= get_filter('smokey');
                        var cheesy= get_filter('cheesy');
                        var sour= get_filter('sour');
                        var food= get_filter('food');
                    
                        $.ajax({
                            url:"fetch_data.php",
                            method:"POST",
                            data:{action:action,eat:eat,spicy:spicy,sweet:sweet,hot:hot,creamy:creamy,smokey:smokey,cheesy:cheesy,sour:sour,food:food},
                            success:function(response){
                            $("#result").html(response);
                            }
                        });
                    
                }
                function get_filter(classname){
                    var filterData=[];
                    $('.'+classname+':checked').each(function(){
                       filterData.push($(this).val());
                    });
                    return filterData; 
                }
                $('.common_selector').click(function()
                                           {
                    filter_data();
                });
            });
        </script>
    </body>
</html>