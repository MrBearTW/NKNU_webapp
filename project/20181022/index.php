<!DOCTYPE html>
<html lang="utf8">
<head>
  <title>餐餐自由配</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
      height: 200px;
      background: #aaa;
  }
  img{
	  height: 300px;
      max-height: 300px;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>餐餐自由配</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">功能選項</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white bg-dark"  href="singin.php">登入</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white bg-dark" href="#">最新消息</a>
      </li>
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
        <h2>關於我們</h2>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner mh-100">
            <div class="carousel-item active">
             <img class="d-block w-100 mh-100" src="1.jpg"  alt="First slide">
             </div>
             <div class="carousel-item">
              <img class="d-block w-100 mh-100" src="2.jpg" alt="First slide">
             </div>
            <div class="carousel-item">
               <img class="d-block w-100 mh-100" src="3.jpg"  alt="First slide">
            </div>
          </div>
		  <p align=center>響應式網頁製作</p>
       </div>
    </div>  
    <div class="col-sm-4">
	
       <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">推薦餐點</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/NT</small></h1>
            <ul class="list-unstyled mt-3 mb-4 text-center">
              <li>蛋餅</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">到此頁面</button>
          </div>
        </div>
    </div>	
  </div>
  <div class="row">
        <div class="col-sm-4">
        <h2>設計使用軟體</h2>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner mh-100">
            <div class="carousel-item active">
             <img class="d-block w-100 mh-100" src="1.png"  alt="Bootstrap">
             </div>
             <div class="carousel-item">
              <img class="d-block w-100 mh-100" src="1.gif" alt="notepad">
             </div>
            <div class="carousel-item">
               <img class="d-block w-100 mh-100" src="2.png"  alt="jquery">
            </div>
          </div>
		  <p align=center>響應式網頁製作</p>
       </div>
    </div>  
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p class="text-success">2018-10-23 報告   純測試用    圖片取至網路</p>
</div>

</body>
</html>
