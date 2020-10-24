<?php
require 'db_connect.php';
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title></title>
  <meta name="designer" content="Alberto Hartzet">
<meta name="programer" content="Alberto Hartzet">
<meta name="author" content="Alberto Hartzet">
<meta name="description" content="One page navigation with pure CSS">
<meta property="og:url" content="https://codepen.io/hrtzt/details/NPZKRN">
<meta property="og:image" content="https://pbs.twimg.com/media/CCNJN_XUMAAJSzU.jpg:large">
<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css'>
    
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      html, body, .page {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  transition: all .6s cubic-bezier(.5, .2, .2, 1.1);
  -webkit-transition: all .6s cubic-bezier(.5, .2, .2, 1.1);
  -moz-transition: all .6s cubic-bezier(.5, .2, .2, 1.1);
  -o-transition: all .6s cubic-bezier(.5, .2, .2, 1.1);  
  color: #fff;
  overflow: hidden; 
}

* 
{
  font-family: 'open sans', 'lato', 'helvetica', sans-serif;
}

.page 
          {
  position: absolute;
              overflow-y: scroll;
}

#p1 {
  left: 0;
}

#p2, #p3, #p4, #p5 {
  left: 200%;
}

#p1 { background: black; }
#p2 { background: #f5af19; }
#p3 { background: #3A2073; }

#t2:target #p2,
#t3:target #p3,
#t4:target #p4,
#t5:target #p5 {
  transform: translateX(-190%);
  -webkit-transform: translateX(-190%);
  -moz-transform: translateX(-190%);
  -o-transform: translateX(-190%);
  transition-delay: .4s !important;
}

#t2:target #p1, 
#t3:target #p1,
#t4:target #p1,
#t5:target #p1{
  background: black;
}

#t2:target #p1 .icon, 
#t3:target #p1 .icon,
#t4:target #p1 .icon,
#t5:target #p1 .icon {
  -webkit-filter: blur(3px);
}

.icon {
  color: #fff;
  font-size: 32px;
  display: block;
}

ul .icon:hover {
  opacity: 0.5;
}

.page .icon .title {
  line-height: 2;
}

#t2:target ul .icon,
#t3:target ul .icon,
#t4:target ul .icon,
#t5:target ul .icon{
  transform: scale(.6);
  -webkit-transform: scale(.6);
  -moz-transform: scale(.6);
  -o-transform: scale(.6);
  transition-delay: .25s;
}

#t2:target #dos,
#t3:target #tres,
#t4:target #cuatro,
#t4:target #cinco {
  transform: scale(1.2) !important;
  -webkit-transform: scale(1.2) !important;
  -moz-transform: scale(1.2) !important;
  -o-transform: scale(1.2) !important;
}

ul {
  position: fixed;
  z-index: 1;
  top: 0;
  bottom: 0;
  left: 0;
  margin: auto;
  height: 280px;
  width: 10%;
  padding: 0;
  text-align: center;
 }

#menu .icon {
  margin: 30px 0;
  transition: all .5s ease-out !important;
  -webkit-transition: all .5s ease-out;
  -moz-transition: all .5s ease-out;
  -o-transition: all .5s ease-out;
}

a {
  text-decoration: none;
}

.title, .hint {
  display: block;
}

.title {
  font-size: 38px;
}

.hint {
  font-size: 13px;
}
          
.ddd
          {
              font-size: normal 30px ;
              font-family: 'Satisfy', cursive;
          }

#p4 .hint {
  display: inherit !important;
}

.hint {
  color: yellow;
  transition: all 250ms ease-out;
  -webkit-transition: all 250ms ease-out;
  -moz-transition: all 250ms ease-out;
  -o-transition: all 250ms ease-out;
}

.line-trough {
  text-decoration: line-through;
}
@import url("https://fonts.googleapis.com/css?family=Lato:400,700");
.container {
  width: auto;
  margin: auto;
}
a {
  text-transform: uppercase;
  text-decoration: none;
  font-weight: 700;
}
@keyframes top {
  from {
    transform: translate(0rem, 0);
  }
  to {
    transform: translate(0rem, 3.5rem);
  }
}
@keyframes bottom {
  from {
    transform: translate(-11.5rem, 0);
  }
  to {
    transform: translate(0rem, 0);
  }
}
.btn {
  position: relative;
  letter-spacing: 0.15em;
  margin: 0 auto;
  padding: 1rem 2.5rem;
  background: transparent;
  outline: none;
  font-size: 28px;
  color: white;
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.15s;
}
.btn::after, .btn::before {
  content: "";
  position: absolute;
  height: 40%;
  width: 10%;
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  z-index: -2;
  border-radius: 50%;
}
.btn::before {
  background-color: #bf860d;
  top: -0.75rem;
  left: 0.5rem;
  animation: top 2s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.25s infinite alternate;
}
.btn::after {
  background-color: #f5af19;
  top: 3rem;
  left: 13rem;
  animation: bottom 2s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.5s infinite alternate;
}
.btn:hover {
  color: #3A2073;
}
.btn:hover::before, .btn:hover::after {
  top: 0;
  height: 100%;
  width: 100%;
  border-radius: 0;
  animation: none;
}
.btn:hover::after {
  left: 0rem;
}
.btn:hover::before {
  top: 0.5rem;
  left: 0.35rem;
}

#t2:target .page#p2 .icon,
#t3:target .page#p3 .icon,
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

  <div  id="t1">
  <div id="t2">
    <div  id="t3">
          <ul id="menu">
            <a href="#t1"><li class="icon fa fa-pencil" id="uno"></li></a>
            <a href="#t2"><li class="icon fa fa-play" id="dos"></li></a>
            <a href="#t3"><li class="icon fa fa-shopping-cart" id="tres"></li></a>
          </ul>
         <?php
                  $query= "SELECT blog_desc,vedio_link,image FROM recipe WHERE recipe_id=".$id;
                  $result=$conn->query($query);
         ?>
          <div class="page" id="p1">
              <?php 
                while($row=$result->fetch_assoc())
                {?>
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-lg-12" style="padding-top:50px">
                      <center><img src="<?php echo $row['image']; ?>" height="400vh" width="50%"></center>
                          </div>
                  </div>
              <div class="row" style=" padding-top:50px;padding-left:250px;color:#f5af19;">
                  <?php
                    
                    echo $row['blog_desc'];
                  ?>
              </div>
                  </div>
          </div>
          <div class="page" id="p2">
              <div class="hint" style=" padding-top:50px;padding-left:250px">
                  <?php echo $row['vedio_link'];?>
              </div>
              <?php } ?>
          </div>  
          <div class="page" id="p3">
              <div class="hint" style="padding-left:70vh;padding-top:40vh">
              <div class="container"><a class="btn" href="https://www.bigbasket.com/">Go Shoppin'!</a></div>
              </div>
          </div>
    </div>
  </div>
</div>
</body>

</html>
