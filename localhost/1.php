<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<style>
@import url();
.top-menu {
  background: rgba(255,255,255,.5);
  box-shadow: 3px 0 7px rgba(0,0,0,.3);
  padding: 20px;
}

.treeble
{
	width: 800px;
	height: 350px;
	background: black;
	opacity:90%;
	z-index:4;
	color:white;
	
}

.treeble img
{
	opacity:100%;
}

.select
{
width:100%;
height:150px;
background-color:white;
}

.menu-main li {display: inline-block;}
.menu-main a {
  text-decoration: none;
  display: block;
  position: relative;
  line-height: 61px;
  padding-left: 20px;
  font-size: 18px;
  letter-spacing: 2px;
  font-family: 'Arimo', sans-serif;
  font-weight: bold;
  color: #000080;
  transition:.3s linear;
}
.menu-main a:before {
  content: "";
  width: 9px;
  height: 9px;
  background: #000080;
  position: absolute;
  left: 50%;
  transform: rotate(45deg) translateX(6.5px);
  opacity: 0;
  transition: .3s linear;
}

.square
{
	width: 200px;
	height: 50px;
	background: red;
	text-align:center;
	vertical-align: middle;
	font-size: 100%;    
	border:0px;
	opacity:100%;
}

.double
{
	text-align:center;
	padding-top:50px;
	width: 450px;
	height: 600px;
	background: black;
	opacity:70%;
	position:absolute;
	z-index:4;
	border:2px;
	float:right; margin:0 25% 0 3%;
	color:white;
}

.white
{
	margin:0% 0% 10% 0%;
width:100%;
background-color:white;
height:1000px;	
}
-------
a{
  color: #111
}

.photo{
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: block;
}

.photo img{
  width: 240px;
  height: 360px;
  object-fit: cover;
  box-shadow: 10px 15px 25px 0 rgba(0,0,0,.2);
  display: block;
  transition: all .5s cubic-bezier(0.645, 0.045, 0.355, 1);
  margin-top: -10px;
}

.photo:hover img{
  box-shadow: 1px 1px 10px 0 rgba(0,0,0,.1);
}

.photo .glow-wrap{
  overflow: hidden;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  margin-top: -10px;
}

.photo .glow{
  display: inline-block;
  position:absolute;
  width: 40%;
  height: 200%;
  top: 0;
  filter: blur(5px);
  transform: rotate(45deg) translate(-450%, 0);
  transition: all .5s cubic-bezier(0.645, 0.045, 0.355, 1);
}

.photo:hover .glow{
  transform: rotate(45deg) translate(450%, 0);
  transition: all 1s cubic-bezier(0.645, 0.045, 0.355, 1);
}

.photo:hover img,
.photo:hover .glow-wrap{
  margin-top: 0;
}

/* Ends */

#author{
  font-family: Helvetica, Arial;
  text-transform: uppercase;
  font-size: 14px;
  text-decoration: none;
  position: relative;
  bottom: 25px;
  left: 50%;
  transform: translateX(-50%);
}
.close
{
background:f04646;
width:100%;
height:700PX;
position:absolute;
vertical-align: middle;
position: fixed;
left: 0;
display: flex;
align-items: center;
align-content: center; 
justify-content: center; 
overflow: auto;   	
}

.dave1 {
  position: relative;
  width: 30%;
  height: 300px;
  float:left;
  width:50%;
  
}

.overlay1 {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0);
  transition: background 0.5s ease;
}

.dave1:hover .overlay1 {
  display: block;
  background: rgba(0, 0, 0, .3);
  
}

img {
  position: relative;
  width: 100%;
  height: 300px;
  left: 0;
}

.title1 {
  position: absolute;
  width: 500px;
  left: 0;
  top: 120px;
  font-weight: 700;
  font-size: 30px;
  text-align: center;
  text-transform: uppercase;
  color: white;
  z-index: 1;
  transition: top .5s ease;
  align:center;
  margin:0 30% 0 10%;
}

.dave1:hover .title1 {
  top: 90px;
}

.button1 {
  position: absolute;
  width: 500px;
  left:0;
  top: 180px;
  text-align: center;
  opacity: 0;
  transition: opacity .35s ease;
  align:center;
   margin:0 30% 0 10%;
}

.button1 a {
  width: 200px;
  padding: 12px 48px;
  text-align: center;
  color: white;
  border: solid 2px white;
  z-index: 1;
  align:center;
}

.dave1:hover .button1 {
  opacity: 1;
}

.portfolio
{
	height:50px;
	margin:10% 0% 10% 25%;

}

.portfolio img
{
	width:130px;
	height:100px;
}

.reload{
	height:50px;
	z-index:4;
	position:relative;
	align-items:center
}

.redss
{
height:50px;
position:relative;
align-items:center
}

.row
{
	height:50px;
	align-items:center
}

.col-3
{
	
	margin-right;
	float:left;
	align-items:center
}

.footer
{
width:100%;
height:500px;
background:$000;
text-align:center;
padding-top:0px;	
text-align:center
}

.footer a{
	color:white;
	font-size:14px;
	text-align:center
}

.footer nav a:hover{
	border-bottom:0px solid white;
	text-align:center
}


/* Main Footer */
footer .main-footer{ padding: 0px 0; background: #252525;}
footer ul{ padding-left: 0; list-style: none;}

/* Copy Right Footer */
.footer-copyright { background: #222; padding: 0px 0;}
.footer-copyright .logo { display: inherit;}
.footer-copyright nav { float: right; margin-top: 0px;}
.footer-copyright nav ul { list-style: none; margin: 0; padding: 0;}
.footer-copyright nav ul li { border-left: 1px solid #505050; display: inline-block; line-height: 12px; margin: 0; padding: 0 8px;}
.footer-copyright nav ul li a{ color: #969696;}
.footer-copyright nav ul li:first-child { border: medium none; padding-left: 0;}
.footer-copyright p { color: #969696; margin: 2px 0 0;}

/* Footer Top */
.footer-top{ background: #252525; padding-bottom: 0px; margin-bottom: 0px; border-bottom: 3px solid #222;}

/* Footer transparent */
footer.transparent .footer-top, footer.transparent .main-footer{ background: transparent;}
footer.transparent .footer-copyright{ background: none repeat scroll 0 0 rgba(0, 0, 0, 0.3) ;}

/* Footer light */
footer.light .footer-top{ background: #f9f9f9;}
footer.light .main-footer{ background: #f9f9f9;}
footer.light .footer-copyright{ background: none repeat scroll 0 0 rgba(255, 255, 255, 0.3) ;}

/* Footer 4 */
.footer- .logo { display: inline-block;}

/*====================  
  Widgets  
====================== */
.widget{ padding: px; margin-bottom: 0px;}
.widget.widget-last{ margin-bottom: 0px;}
.widget.no-box{ padding: 0; background-color: transparent; margin-bottom: 0px;
  box-shadow: none; -webkit-box-shadow: none; -moz-box-shadow: none; -ms-box-shadow: none; -o-box-shadow: none;}
.widget.subscribe p{ margin-bottom: 18px;}
.widget li a{ color: #ff8d1e;}
.widget li a:hover{ color: #4b92dc;}
.widget-title {margin-bottom: 0px;}
.widget-title span {background: #839FAD none repeat scroll 0 0;display: block; height: 1px;margin-top: 5px;position: relative;width: 20%;}
.widget-title span::after {background: inherit;content: "";height: inherit; position: absolute;top: -4px;width: 50%;}
.widget-title.text-center span,.widget-title.text-center span::after {margin-left: auto;margin-right:auto;left: 0;right: 0;}
.widget .badge{ float: right; background: #7f7f7f;}

.typo-light h1,  
.typo-light h2,  
.typo-light h3,  
.typo-light h4,  
.typo-light h5,  
.typo-light h6,
.typo-light p,
.typo-light div,
.typo-light span,
.typo-light small{ color: #fff;}

ul.social-footer2 { margin: 0;padding: 0; width: auto;}
ul.social-footer2 li {display: inline-block;padding: 0;}
ul.social-footer2 li a:hover {background-color:#ff8d1e;}
ul.social-footer2 li a {display: block; height:30px;width: 30px;text-align: center;}
.btn{background-color: #ff8d1e; color:#fff;}
.btn:hover, .btn:focus, .btn.active {background: #4b92dc;color: #fff;
-webkit-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-moz-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-ms-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-o-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
-webkit-transition: all 250ms ease-in-out 0s;
-moz-transition: all 250ms ease-in-out 0s;
-ms-transition: all 250ms ease-in-out 0s;
-o-transition: all 250ms ease-in-out 0s;
transition: all 250ms ease-in-out 0s;
}


#kucomb-navasog {
    position: relative;
    display: inline-block;
    width: 28px;
    height: 28px;
}

#kucomb-navasog::before {
    position: absolute;
    left: 0;
    height: 50%;
    width: 3px;
   background-color: #2c6dad;
    content: "";
    transform: translateX(10px) rotate(-45deg);
    transform-origin: left bottom;
}

#kucomb-navasog::after {
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 100%;
    background-color: #336699;
    content: "";
    transform: translateX(10px) rotate(-45deg);
    transform-origin: left bottom;
}
</style>
</head>
<body>
<br>
<div class="d-flex flex-column">
  <nav class="top-menu" style="background: white;">
  <div class="menu-main" >
  <button type="button" class="square" style="color:white;vertical-align:center;" >Позвонить
</button>
    <li><a href="1.php">Услуги</a></li>
    <li><a href="2.php">Портфолио</a></li>
   <li><a href="3.php">Кабинет</a></li>
   <li><a href="4.php">Отзывы</a></li>
   <li><a href="5.php">Заказ</a></li>
    <button type="button" class="square" style="color:red;vertical-align:center;background-color:rgb(255,255,255);" >8-975-082-44-56
</button>
 </nav>
 </div>
 <br>
<div class="double" >
<p>
Lorem ipsum dolor sit amet, consectetuer <br> adipiscing elit, sed diem 
    nonummy nibh euismod tincidunt ut <br>lacreet dolore magna aliguam erat volutpat. 
    Ut wisis enim ad minim veniam, quis nostrud<br> exerci tution ullamcorper suscipit 
    lobortis nisl ut  <br>aliquip ex ea commodo consequat.
	Lorem ipsum dolor sit amet, consectetuer <br> adipiscing elit, sed diem 
    nonummy nibh euismod tincidunt ut <br>lacreet dolore magna aliguam erat volutpat. 
    Ut wisis enim ad minim veniam, quis nostrud<br> exerci tution ullamcorper suscipit 
    lobortis nisl ut  <br>aliquip ex ea commodo consequat.<br> <br> 
	nonummy nibh euismod tincidunt ut <br>lacreet dolore magna aliguam erat volutpat. 
    Ut wisis enim ad minim veniam, quis nostrud<br> exerci tution ullamcorper suscipit 
    lobortis nisl ut  <br>aliquip ex ea commodo consequat.<br> <br> 
	
	<button type="button" class="square" style="color:white;background:red;" >Заказать
</button></p>
</div>
<script type="text/javascript">
    var images = new Array();
    var i = 0; 
    images[0] = 'eee.jpg';
    images[1] = 'qqq.jpg';
    images[2] = 'www.jpg';
     
    function viewImages() {
        document.getElementById("img_main").src = images[i]; 
        i++;
        if (i == images.length) {
            i = 0;
        }
        setTimeout("viewImages()",5000);
    }   
</script>

<img src="" id="img_main" style="width:100%;height:600px">
 
<script> viewImages(); </script>
<div class="white" style="background-image:url(222.jpg);z-index:0;position:relative;background-repeat:repeat;background-attachment: fixed;;background-size:100%;height:2050px">
<div class="red">
<h2>Почему мы?!</h2>
<h2>Свадебное Агенство Waterlo aggency</h2>
<div class="bg-white border-bottom shadow-sm " style="margin:50px 0px 0px 0px">
</div>
</div>
<div class="only" style="padding:0% 20% 0% 20% ;">
<div id="modal-close-default" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
          <div class="services-list">
                <div class="item" style="margin:20% 0% 20% 0%;z-index:2;" >
				<div class="treeble">
				<p>
				<a href="#" class="photo" style="z-index:3;opacity:100%;">
				<img src="ddd.jpg" width="240" height="360" alt="Письма мастера дзен" align="left" style="z-index:3;opacity:100%">
				</p>
				<div class="glow-wrap">
                <i class="glow"></i>
                </div>
                </a>
				<div id="kucomb-navasog"></div>
                    <div class="item-title" align="left" style="font-size:24px;color:white;z-index:5">Оптимизируем бюджет</div>
                    <div class="text" align="left"><p>Мы составляем детальную смету. Пара обозначает свои финансовые возможности, под которые мы подберем оптимальные решения.</p>
                    </div>
                <div class="item">
				<div id="kucomb-navasog"></div>
                    <div class="item-title" style="font-size:24px;color:white;">Поможем выбрать ресторан</div>
                    <div class="text"><p>Мы рекомендуем проверенные площадки, ведь за 11 лет работы накопили собственную базу подрядчиков.</p>
                    </div>
                </div>
                <div class="item" >
				<div id="kucomb-navasog"></div>
                    <div class="item-title" style="font-size:24px;color:white;">Подберем хорошего ведущего</div>
                    <div class="text"><p>...а также проверенного фотографа, видеографа и стилистку.</p>
                    </div>
                </div>
				 </div>
				</div>
				
                <div class="item" style="margin:20% 0% 20% 0%" align="right">
				<div class="treeble">
				<p>
				<a href="#" class="photo">
				<img src="BBB.jpg" width="240" height="360" alt="Письма мастера дзен" align="right">
				</p>
				<div class="glow-wrap">
                 <i class="glow"></i>
                 </div>
				 </a>
				 <div id="kucomb-navasog"></div>
                    <div class="item-title" style="font-size:24px;color:white;">Разработаем концепцию</div>
                    <div class="text"><p>Праздник будет непохож на другие, это  история любви!</p>
                    </div>
					
               
                <div class="item">
				<div id="kucomb-navasog"></div>
                    <div class="item-title" align="right" style="font-size:24px;color:white;">Проконтролируем подрядчиков</div>
                    <div class="text" align="right"><p>Мы возьмем на себя всю рутину, от дресс-кода и написания списков для пропуска на площадку до подписания договоров, менеджмента задач и тайминга. </p>
                    </div>
                </div>
                <div class="item">
				<div id="kucomb-navasog"></div>
                    <div class="item-title" align="right" style="font-size:24px;color:white;">Красиво декорируем</div>
                    <div class="text " align="right"><p>В соответствии с вашими вкусами мы декорируем номер для сборов невесты, зону церемонии и банкетный зал.</p>
                    </div>
                </div>
				 </div>
				 </div>
				 
				 <div class="item" style="margin:20% 0% 20% 0%">
				 <div class="treeble">
				 <p>
				 <a href="#" class="photo">
				 <img src="anna.jpg" width="240" height="360" alt="Письма мастера дзен" align="left">
				 </p>
				 <div class="glow-wrap">
                 <i class="glow"></i>
                 </div>
				 </a>
				 <div id="kucomb-navasog"></div>
                    <div class="item-title" style="font-size:24px;color:white;">Распланируем день</div>
                    <div class="text"><p>Составим поминутный тайминг свадьбы, продумаем логистику и выберем лучшие локации для съемок и сборов, в зависимости от места ЗАГСа и банкетного зала.</p>
                    </div>
					<div id="kucomb-navasog"></div>
				<div class="item">
                    <div class="item-title" style="font-size:24px;color:white">Распланируем день</div>
                    <div class="text"><p>Составим поминутный тайминг свадьбы, продумаем логистику и выберем лучшие локации для съемок и сборов, в зависимости от места ЗАГСа и банкетного зала.</p>
                    </div>
                </div>
				<div id="kucomb-navasog"></div>
				<div class="item">
                    <div class="item-title" style="font-size:24px;color:white;">Распланируем день</div>
                    <div class="text"><p>Составим поминутный тайминг свадьбы, продумаем логистику и выберем лучшие локации для съемок и сборов, в зависимости от места ЗАГСа.</p>
                    </div>
                </div>
				</div>
				</div>
				<button type="button" class="square" style="color:white; margin:0 35% 0 35%">Связаться с нами
</button>
</p>
    </div>
</div>
</div>
</div>
<div class="bg-white border-bottom shadow-sm " style="margin:50px 0px 0px 0px">
</div> 
<div class="bg-white border-bottom shadow-sm " style="margin:50px 0px 0px 0px;text-align:center;font-size:30px">Наши проекты и творения!!!
</div>
<div class="ar" style="background-color:white;height:800px">
<div class="dave1">
    <img src="lexa1.jpg" alt="Фотография 1" width="50%" >
	<p class="title1" style="align:center">Уральская сказка</p>
  <div class="overlay1"></div>
  <div class="button1"><a href="#"> Просмотреть </a></div>
</div>
<div class="dave1">
    <img src="vera1.jpg" alt="Фотография 2" width="50%" style="float:left" >
	<p class="title1" style="align:center">Морской бриз</p>
  <div class="overlay1"></div>
  <div class="button1"><a href="#"> Просмотреть </a></div>
</div>
<div class="dave1">
	<img src="lexa2.jpg" alt="Фотография 1" width="50%" >
	<p class="title1" style="align:center">Восточная сказка</p>
  <div class="overlay1"></div>
  <div class="button1"><a href="#"> Просмотреть </a></div>
</div>
<div class="dave1">
    <img src="vera2.jpg" alt="Фотография 2" width="50%" style="float:left" >
	<p class="title1" style="align:center">Сияние</p>
  <div class="overlay1"></div>
  <div class="button1"><a href="#"> Просмотреть </a></div>
</div>
<div class="dave1">
	<img src="lexa3.jpg" alt="Фотография 1" width="50%" >
		<p class="title1" style="align:center">Восход души</p>
  <div class="overlay1"></div>
  <div class="button1"><a href="#"> Просмотреть </a></div>
</div>
<div class="dave1">
    <img src="vera3.jpg" alt="Фотография 2" width="50%" style="float:left" >
		<p class="title1" style="align:center">Окрытие</p>
  <div class="overlay1"></div>
  <div class="button1"><a href="#"> Просмотреть </a></div>
</div>
</div>
<div class="bg-white border-bottom shadow-sm " style="margin:50px 0px 0px">
</div> 
<div class="bg-white border-bottom shadow-sm " style="margin:50px 0px 0px;text-align:center;font-size:30px">Как мы будем работать!!!
</div>
<div class="bg-white border-bottom shadow-sm " style="margin:50px 0px 0px">
</div> 

<div class="live" style="background-color:f4f719;height:900px;opacity:100%;background-image: url(foton.jpg);z-index:2;position:relative;background-attachment: fixed;background-repeat: no-repeat;background-size:100%">
<div class="reload" style="background-color:white;height:700px;width:80%;margin:0% 10% 0% 10%;opacity:60%;position:absolute;z-index:1;align-items:center">
<div class="portfolio">
<div class="redss">


<div class="col-3">
<img src="1.png">
<div class="portolio-title" align="center">
<p>№1</p>
</div>
<div class="portolio-text" align="center">
<p>Мы встретимся, узнаем о ваших вкусах и пожеланиях</p>
</div>
</div>
<div class="col-3">

<img src="2.png">

<div class="portolio-title" align="center">
<p>№2</p>
</div>
<div class="portolio-text" align="center">
<p>Мы встретимся, узнаем о ваших вкусах и пожеланиях</p>
</div>
</div>
<div class="col-3">
<img src="3.png" align="center">

<div class="portolio-title" align="center">
<p>№3</p>
</div>
<div class="portolio-text" align="center">
<p>Мы встретимся, узнаем о ваших вкусах и пожеланиях</p>
</div>
</div>
</div>
</div>
<br>
<div class="portfolio">
<div class="redss">
<div class="col-3">

<img src="4.png">

<div class="portolio-title" align="center">
<p>№2</p>
</div>
<div class="portolio-text" align="center">
<p>Мы встретимся, узнаем о ваших вкусах и пожеланиях</p>
</div>
</div>
<div class="col-3">
<img src="5.png" align="center">

<div class="portolio-title" align="center">
<p>№3</p>
</div>
<div class="portolio-text" align="center">
<p>Мы встретимся, узнаем о ваших вкусах и пожеланиях</p>
</div>
</div>
<div class="col-3">
<img src="1.png" align="center">

<div class="portolio-title" align="center">
<p>№3</p>
</div>
<div class="portolio-text" align="center">
<p>Мы встретимся, узнаем о ваших вкусах и пожеланиях</p>
</div>
</div>
</div>
</div>
</div>
<h1 style="margin-top: -100px;color:white;z-index:5;">План действий</h1>
<button type="button" class="square" style="color:white;vertical-align:center;position:relative;margin:45% 45% 0% 45%;z-index:5;">Позвонить
</button>
</div>
<footer id="footer" class="footer-1" style="background-color:black;height:350px;margin:0px 0px 0px 0px">
<div class="main" style="background-color:black;">
<div class="container" style="background-color:black;">
<div class="row" style="background-color:black;">
   
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget subscribe no-box">
<h5 class="widget-title">COMPANY NAME<span></span></h5>
<p>About the company, little discription will goes here.. </p>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box" >
<h5 class="widget-title">Quick Links<span></span></h5>
<ul class="thumbnail-widget">
<li>
<div class="thumb-content"><a href="#.">Get Started</a></div>  
</li>
<li>
<div class="thumb-content"><a href="#.">Top Leaders</a></div>  
</li>
<li>
<div class="thumb-content"><a href="#.">Success Stories</a></div>  
</li>
<li>
<div class="thumb-content"><a href="#.">Event/Tickets</a></div>  
</li>
<li>
<div class="thumb-content"><a href="#.">News</a></div>  
</li>
<li>
<div class="thumb-content"><a href="#.">Lifestyle</a></div>  
</li>
<li>
<div class="thumb-content"><a href="#.">About</a></div>  
</li>
</ul>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title">Get Started<span></span></h5>
<p>Get access to your full Training and Marketing Suite.</p>
<a class="btn" href="#." target="_blank">Register Now</a>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">

<div class="widget no-box" >
<h5 class="widget-title">Contact Us<span></span></h5>

<p><a href="mailto:info@domain.com" title="glorythemes">info@domain.com</a></p>
<ul class="social-footer2">
<li class=""><a title="youtube" target="_blank" href="/"><img alt="youtube" width="30" height="30" src="https://www.flaticon.com/svg/static/icons/svg/2111/2111463.svg"></a></li>
<li class=""><a href="/" target="_blank" title="Facebook"><img alt="Facebook" width="30" height="30" src="https://www.flaticon.com/svg/static/icons/svg/2111/2111463.svg"></a></li>
<li class=""><a href="/" target="_blank" title="Twitter"><img alt="Twitter" width="30" height="30" src="https://www.flaticon.com/svg/static/icons/svg/2111/2111463.svg"></a></li>
<li class=""><a title="instagram" target="_blank" href="/"><img alt="instagram" width="30" height="30" src="https://www.flaticon.com/svg/static/icons/svg/2111/2111463.svg"></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</footer>
</div>
</div>
</body>
</html>