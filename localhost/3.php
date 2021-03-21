<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> </link>
<link rel="stylesheet" href="style2.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<style>
@import url();
.top-menu {
  background: rgba(255,255,255,.5);
  box-shadow: 3px 0 7px rgba(0,0,0,.3);
  padding: 20px;
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
   margin:0 30% 0 30%;
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
	margin:10% 10% 50% 10%;

}

.portfolio img
{
	height:400px;
	width:200px;
}

.reload{
	height:50px;
	z-index:4;
	position:relative;
	align-items:center
}

.redss
{
height:60px;
position:relative;
align-items:center
}

.row
{
	height:60px;
	align-items:center
}

.col-3
{
	
	margin-right;
	float:left;
	align-items:center
	margin:50px 0px 50px 0px;
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
.widget{ padding: 2px; margin-bottom: 0px;}
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
    top: 50%;
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
 <h1>Форма регистрации</h1>
<div class="container mt-4" style="margin:10% 35% 10% 35%">
<form  action="index.php" method="post" style="margin:100px 0px 100px 0px;align-items:center">
<a href="файлсайт(2).php" >Перейдите на другуй страницу сайта</a>
<input type="text" class="form-control" name="login" id="login" placeholder="введите логин"><br>
<input type="text" class="form-control" name="name" id="name" placeholder="введите имя"><br>
<input type="password" class="form-control" name="password" id="password" placeholder="введите пароль"><br>
<button class="btn btn-success" type="submit" >регистрации</button><br>
</form>
</div>
</div>
</div>
</body>
</html>