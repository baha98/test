<?PHP
include "../core/blogc.php";
$blog1C=new blogc();
$listeblog=$blog1C->afficherblog1();

//var_dump($listeEmployes->fetchAll());
?>
<html>
<head>
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/articles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <link rel="stylesheet" href="css/bootsnav.css">
  <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">   
  <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="css/slider.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="reclamation.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="js/bootsnav.js"></script>
<style>
    body{
    background-image: url(image/background-01.png);
    background-position: fixed;
    background-size: cover;
    height: 750px;
  }

  nav.navbar.bootsnav{
    border: none;
    background: none;   
    margin-top: 20px;
  }


  nav.navbar.bootsnav ul.nav > li{margin-right: 20px;}
  nav.navbar.bootsnav ul.nav > li > a{
    padding: 10px 20px;
    border-radius: 0;
    color: #fdefcf;
    text-transform: uppercase;
    border: 2px solid rgba(255, 219, 98, 0.4);
    position: relative;
    transition: all 0.3s ease 0s;
  }




  nav.navbar.bootsnav ul.nav > li.dropdown > a{
    padding: 10px 30px 10px 15px;
  }

  nav.navbar.bootsnav ul.nav > li > a:hover,
  nav.navbar.bootsnav ul.nav > li.on > {
    color: #fdefcf;
  }


  nav.navbar.bootsnav ul.nav > li > a > span:before{
    content: "";
    width: 0;
    height: 3px;
    background: #fdefcf;
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: -1;
    transition: all 0.3s ease 0s;
  }


  nav.navbar.bootsnav ul.nav > li:hover > a > span:before{
    width: 50%;
    animation: bounce 1.5s 0.3s ease-out infinite;
  }



  nav.navbar.bootsnav ul.nav > li.active > a > span:before,
  nav.navbar.bootsnav ul.nav > li.on > a > span:before{
    width: 50%;
    left: 25%;
  }



  nav.navbar.bootsnav ul.nav>li.dropdown > a.dropdown-toggle:after{
    position: absolute;
    top: 10px;
    right: 10px;
    margin:  0 0 0 7px;

  }

  nav.navbar.bootsnav ul.nav>li.dropdown > ul{
    top: 120%;
    transition: all 0.8s ease 0s;
  }


  nav.navbar.bootsnav ul.nav > li.dropdown.on > ul{

    top: 110%;

  }

  .dropdown-menu.multi-dropdown{
    position: absolute;
    left: -100% !important;
  }

  nav.navbar-bootsnav li.dropdown ul.dropdown-menu{
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
    border: none;
    border-radius: 20px;

  }

  nav.navbar.bootsnav li.dropdown ul.dropdown-menu.megamenu-content li{
    font-size: 14px;
    color: white;
  }

  nav.navbar.bootsnav li.dropdown ul.dropdown-menu.megamenu-content .title{
    font-size: 16px;
    font-weight: bold;
    color: #1a4b6d;
  }
  @keyframes boucne{
    0%{
      left: 0;
    }
    48%{
      left: 50%;
    }
    50%{
      left: 50%;
    }

    98%{
      left:0%;
    }
    100%{
      left:0%;
    }
  }
  div .under-nav
  {
    width: 100%
  }
  div .under-nav .bar
  {
    margin-left: calc(50% - 160px);
    width: 320px;
    height: 30px;
    margin-top: 20px;
  }
  div .title
  {
    margin-top: 50px;
    background: none;
  }
  div .title li
  {
    width: 320px;
    height:100px;
    font-size: 50px;
    text-align: center;
    list-style: none;
    margin-top: 100px;
    margin-left: calc(50% - 180px);
    padding: 10px 20px;
    border: none;
    color: #fdefcf;
    text-transform: uppercase;
    transition: all 0.3s ease 0s;
  }
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #302387;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: blue;
}


textarea {
  width: 50%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
}
</style>
<link rel="stylesheet" type="text/css" href="blog.css">
  <title>blog</title>
  <link rel="stylesheet" type="text/css" href="blog.css">
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-12" style="margin-left: 80px;">
        <nav class="navbar navbar-default navbar-mobile bootsnav on">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
              <i class="fa fa-bars"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
              <li><a href="NouvellesCollections.html" data-hover="Acceuil">Nouvelles Collections<span></span></a></li>
              <li class="dropdown">
                <a href="Collection.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="Shortcodes">Collection<span></span></a>
                <ul class="dropdown-menu animated">
                  <li><a href="Location.html">Location</a></li>
                  <li><a href="Achat.html">Achat</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle" data-hover="Rendez-vous">Rendez-vous<span></span></a>
                <ul class="dropdown-menu animated">
                  <li><a href="">Client</a></li>
                  <li><a href="">Professionelle</a></li>
                </ul>
              </li>
              <li><a href="reclamation.html" data-hover="aide"><span>aide</span></a></li>
              <li class="active"><a href="blog.html" data-hover="blog"><span>blog</span></a></li>
            
              <!--<li><a href="" data-hover=""></a></li>-->
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>

	<br>
	<br>
	<br>
<div class="aa" style="margin-left: 550px;">
  <form method="GET" action="ajouterblog.php" >  
    <input type="text"  name="surnom" placeholder="Votre surnom..">
  <textarea  name="commentaire" placeholder="Votre commentaire.."></textarea>

    <input type="submit" value="commenter">
  </form>
</div>

	<br>
	<br>
	<br>
   <?PHP
foreach($listeblog as $row){
  ?>
<div class="aa">
<div class="container">
<div class="row">
<div class="col-sm-12">

</div><!-- /col-sm-12 -->
</div><!-- /row -->
</div>
<div class="row">
<div class="col-sm-1">
<div class="thumbnail">
<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
</div><!-- /thumbnail -->
</div><!-- /col-sm-1 -->

<div class="col-sm-5">
<div class="panel panel-default">
<div class="panel-heading">
<strong><?PHP echo $row['surnom']; ?></strong> <span class="text-muted"><?PHP echo $row['date']; ?></span>
</div>
<div class="panel-body">
<?PHP echo $row['commentaire']; ?>

</div><!-- /panel-body -->
</div><!-- /panel panel-default -->
</div><!-- /col-sm-5 -->
  <?PHP
}
?>
</body>
</html>




