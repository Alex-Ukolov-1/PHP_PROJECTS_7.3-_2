<html lang="ru">
<head>
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="style1.css">
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
	margin-left:10px;
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
<form action="Adler.php" method="POST" class="calculator-form">
<div class="container">
        <div class="title-height" style="padding-bottom: 20px;">
            <h1 class="title">Бюджет Вашей свадьбы</h1>
        </div>

        <div id="pdf-convert">

            <div class="calculator-form-inner">
                <div class="calculator-form-inner2">

                    <div class="calculator-result-title-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <p class="calculator-result-title">Основное</p>
                            </div>
                        </div>
                    </div>
                                        <div class="calculator-result-subtitle-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <p class="calculator-result-subtitle">Бюджет</p>
                            </div>
                            <div class="col-6">
                                <p class="calculator-result-subprice">Средний</p>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-result-subtitle-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <p class="calculator-result-subtitle">Количество гостей</p>
                            </div>
                            <div class="col-6">
                                <p class="calculator-result-subprice">50 человек</p>
                            </div>
                        </div>
                    </div>


                    <div class="calculator-result-title-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <p class="calculator-result-title">Площадка</p>
                            </div>
                            <div class="col-6">
                                <p class="calculator-result-price">от 375 000 руб. до 480 000 руб.</p>
                            </div>
                        </div>
                    </div>

                                        <div class="calculator-result-subtitle-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <p class="calculator-result-subtitle">Усадьба</p>
                            </div>
                            <div class="col-6">
                                <p class="calculator-result-subprice">от 375 000 руб. до 480 000 руб.</p>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-result-text-wrapper">
                        <p class="calculator-underline">В стоимость ОТ входит:</p>
                        <div class="calculator-result-text">
                        свадебный банкет в усадьбе или особняке в Москве или Подмосковье (без алкоголя)
                        <br>
                        <br>* аренда особняка или усадьбы
                        <br>* свадебный гала ужин: фуршет + меню + безалкогольные напитки. Чек ужина зависит от количества и стоимости выбранных позиций меню
                        <br>* сервисное обслуживание 10%
                        <br>* пробковый сбор за обслуживание алкоголя: хранение, загрузка алкоголя в ресторан, доведение до нужной температуры подачи, подготовка и натирка стеклянной посуды (до 5 единиц на каждого гостя), открытие бутылок и работа с обслуживанием гостей алкоголем во время банкета)
                    </div>
                        <br>
                        <p class="calculator-underline">В стоимость ДО входит:</p>
                        <div class="calculator-result-text">входит все то же самое, что и в "от", а стоимость меняется в
                            зависимости от условий выбранной площадки
                        </div>
                    </div>


                    <div class="calculator-result-title-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <p class="calculator-result-title">Декор</p>
                            </div>
                            <div class="col-6">
                                <p class="calculator-result-price">от 174 650 руб. до 406 500 руб.</p>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-result-subtitle-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <p class="calculator-result-subtitle">Базовая часть декора</p>
                            </div>
                            <div class="col-6">
                                <p class="calculator-result-subprice">от 110 000 руб. до 197 000 руб.</p>
                            </div>
                        </div>
                    </div>
                                        <div class="calculator-result-text-wrapper">
                        <p class="calculator-underline">В стоимость ОТ входит:</p>
                        <div class="calculator-result-text">средние или высокие композиции, свечи и подсвечники, номерок стола,  декор президиума (скатерть, цветочная композиция/композиции, декор задней стенки)</div>
                        <br>
                        <p class="calculator-underline">В стоимость ДО входит:</p>
                        <div class="calculator-result-text">средние или высокие композиции на подставке, возможно включение премиальных сортов цветов, свечи, подсвечники, номерок стола, декор президиума (скатерть, пышное цветочное оформление, декоративные элементы, декор задней стенки)</div>
                    </div>
                                            <div class="calculator-result-subtitle-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-subtitle">Церемония</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-subprice">от 17 500 руб. до 75 000 руб.</p>
                                </div>
                            </div>
                        </div>
                                                <div class="calculator-result-text-wrapper">
                            <p class="calculator-underline">В стоимость ОТ входит:</p>
                            <div class="calculator-result-text">классическая п-образная арка с декором тканью и цветочным оформлением или стойки/колонны декоративные с цветочным оформлением</div>
                            <br>
                            <p class="calculator-underline">В стоимость ДО входит:</p>
                            <div class="calculator-result-text">более масштабная конструкция арки (например, на 4 ногах либо увеличенного размера), пышный цветочный декор, ткани. Возможно индивидуальное изготовление конструкции, использование подиума</div>
                        </div>
                                                                                    <div class="calculator-result-subtitle-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-subtitle">Текстиль</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-subprice">от 11 950 руб. до 27 500 руб.</p>
                                </div>
                            </div>
                        </div>
                        <div class="calculator-result-text-wrapper">
                            <p class="calculator-underline">В стоимость ОТ входит:</p>
                            <div class="calculator-result-text">скатерти/салфетки в тон на столы гостей</div>
                            <br>
                            <p class="calculator-underline">В стоимость ДО входит:</p>
                            <div class="calculator-result-text">стоимость меняется в зависимости от конкретно выбранной салфетки/скатерти                            </div>
                        </div>
                    
                                            <div class="calculator-result-subtitle-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-subtitle">Посуда</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-subprice">от 6 000 руб. до 24 500 руб.</p>
                                </div>
                            </div>
                        </div>
                                                <div class="calculator-result-text-wrapper">
                            <p class="calculator-underline">В стоимость ОТ входит:</p>
                            <div class="calculator-result-text">бокалы/подстановочные тарелки на столы гостей в тон</div>
                            <br>
                            <p class="calculator-underline">В стоимость ДО входит:</p>
                            <div class="calculator-result-text">стоимость меняется в зависимости от конкретно выбранных бокалов/подстановочных тарелок</div>
                        </div>
                    
                                            <div class="calculator-result-subtitle-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-subtitle">Мебель</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-subprice">от 15 700 руб. до 40 000 руб.</p>
                                </div>
                            </div>
                        </div>
                                                <div class="calculator-result-text-wrapper">
                            <p class="calculator-underline">В стоимость ОТ входит:</p>
                            <div class="calculator-result-text">стулья с подушкой на выбор</div>
                            <br>
                            <p class="calculator-underline">В стоимость ДО входит:</p>
                            <div class="calculator-result-text">стулья и/или дизайнерские столы. Итоговя цена зависит от конкретной модели выбранных стульев/столов                            </div>
                        </div>
                    
                                            <div class="calculator-result-subtitle-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-subtitle">Доп зоны</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-subprice">от 13 500 руб. до 42 500 руб.</p>
                                </div>
                            </div>
                        </div>
                                                <div class="calculator-result-text-wrapper">
                            <p class="calculator-underline">В стоимость ОТ входит:</p>
                            <div class="calculator-result-text">декор фуршета (скатерть, подстановочная посуда)</div>
                            <br>
                            <p class="calculator-underline">В стоимость ДО входит:</p>
                            <div class="calculator-result-text">декор фуршета (скатерть, подстановочная посуда), возможно дополнение декора гирляндами/небольшой фотозоной</div>
                        </div>
                    

                    <div class="calculator-result-title-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <p class="calculator-result-title">Программа вечера</p>
                            </div>
                            <div class="col-6">
                                <p class="calculator-result-price">от 380 000 руб. до 502 500 руб.</p>
                            </div>
                        </div>
                    </div>

                    <div class="calculator-result-subtitle-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <p class="calculator-result-subtitle">Ведущий + DJ</p>
                            </div>
                            <div class="col-6">
                                <p class="calculator-result-subprice">от 60 000 руб. до 80 000 руб.</p>
                            </div>
                        </div>
                    </div>
                                        <div class="calculator-result-text-wrapper">
                        <p class="calculator-underline">В стоимость ОТ входит:</p>
                        <div class="calculator-result-text">
                        Ведущий:
                        <br>* опыт от 7 лет
                        <br>* ведение праздника в течение 5 часов
                        <br>* индивидуальная программа вечера
                        <br>* хороший уровень импровизации
                        <br>
                        <br>DJ:
                        <br>* согласование плей-листа
                        <br>* звуковое оборудование 1,5 кВт, мобильное световое оборудование
                        <br>* работа в течение 6 часов
                        </div>
                        <br>
                        <p class="calculator-underline">В стоимость ДО входит:</p>
                        <div class="calculator-result-text">входит все то же самое, что и в "от", а стоимость меняется в
                            зависимости от условий выбранного ведущего
                        </div>
                    </div>

                                            <div class="calculator-result-subtitle-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-subtitle">Световое оборудование</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-subprice">40 000 руб.</p>
                                </div>
                            </div>
                        </div>
                                                <div class="calculator-result-text-wrapper">
                            <p class="calculator-underline">В стоимость ОТ входит:</p>
                            <div class="calculator-result-text">
                        Достаточно серьезный комплект светового оборудования для среднего по площади зала
                        <br>* 8 профессиональных приборов полного вращения на 4-х  световых стойках
                        <br>* работа светорежиссера в течение всего вечера
                        <br>* стоимость учитывает доставку по Москве
                        </div>
                            <br>
                            <p class="calculator-underline">В стоимость ДО входит:</p>
                            <div class="calculator-result-text">входит все то же самое, что и в стоимость "от"</div>
                        </div>
                    

                                            <div class="calculator-result-subtitle-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-subtitle">Шоу программа</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-subprice">от 30 000 руб. до 50 000 руб.</p>
                                </div>
                            </div>
                        </div>
                                                <div class="calculator-result-text-wrapper">
                            <p class="calculator-underline">В стоимость ОТ входит:</p>
                            <div class="calculator-result-text">
                        * выступление артиста/стов оригинального жанра с опытом от 5 лет
                        <br>* продолжительность выступления от 15 минут
                        </div>
                            <br>
                            <p class="calculator-underline">В стоимость ДО входит:</p>
                            <div class="calculator-result-text">входит все то же самое, что и в "от", а стоимость меняется в зависимости от условий выбранного артиста/стов</div>
                        </div>
                    
                                            <div class="calculator-result-subtitle-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-subtitle">Кавер группа со звуком</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-subprice">от 100 000 руб. до 120 000 руб.</p>
                                </div>
                            </div>
                        </div>
                                                <div class="calculator-result-text-wrapper">
                            <p class="calculator-underline">В стоимость ОТ входит:</p>
                            <div class="calculator-result-text">
                        * опыт от 5-ти лет, состав от 5-ти человек + звукорежиссер
                        <br>* комплект звукового оборудования от 3-х кВт
                        <br>* согласование исполняемых композиций
                        <br>* 3 танцевальных блока по 20-30 минут каждый
                        </div>
                            <br>
                            <p class="calculator-underline">В стоимость ДО входит:</p>
                            <div class="calculator-result-text">входит все то же самое, что и в "от", а стоимость
                                меняется в зависимости от условий выбранной кавер группы
                            </div>
                        </div>
                    

                                            <div class="calculator-result-subtitle-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-subtitle">Постановка первого танца</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-subprice">от 7 500 руб. до 10 000 руб.</p>
                                </div>
                            </div>
                        </div>
                        <div class="calculator-result-text-wrapper">
                            <p class="calculator-underline">В стоимость ОТ входит:</p>
                            <div class="calculator-result-text">5 индивидуальных занятий</div>
                            <br>
                            <p class="calculator-underline">В стоимость ДО входит:</p>
                            <div class="calculator-result-text">входит все то же самое, что и в "от", а стоимость
                                меняется в зависимости от цены часа работы хореографа и цены аренды зала
                            </div>
                        </div>
                    

                                            <div class="calculator-result-subtitle-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-subtitle">Бенгальские огни</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-subprice">2 500 руб.</p>
                                </div>
                            </div>
                        </div>
                        <div class="calculator-result-text-wrapper">
                            <p class="calculator-underline">В стоимость ОТ входит:</p>
                            <div class="calculator-result-text">* бенгальские огни для всех гостей для фотосессии с
                                молодоженами в конце свадебного вечера
                            </div>
                            <br>
                            <p class="calculator-underline">В стоимость ДО входит:</p>
                            <div class="calculator-result-text">входит все то же самое, что и в стоимость "от"</div>
                        </div>
                    

                                            <div class="calculator-result-subtitle-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-subtitle">Фейерверк</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-subprice">от 70 000 руб. до 100 000 руб.</p>
                                </div>
                            </div>
                        </div>
                        <div class="calculator-result-text-wrapper">
                            <p class="calculator-underline">В стоимость ОТ входит:</p>
                            <div class="calculator-result-text">
                                * опыт от 10 лет, наличие удостоверений пиротехников и лицензии на применение
                                пиротехнических изделий
                                <br>* индивидуальная программа фейерверк-шоу
                                <br>* при необходимости получение разрешения на проведение шоу в общественном месте
                                (например, на набережной, если свадьба проходит на теплоходе)
                            </div>
                            <br>
                            <p class="calculator-underline">В стоимость ДО входит:</p>
                            <div class="calculator-result-text">стоимость меняется в зависимости от индивидуальных
                                пожеланий и/или масштабов фейерверка
                            </div>
                        </div>
                    

                                            <div class="calculator-result-subtitle-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-subtitle">Фаер шоу</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-subprice">от 70 000 руб. до 100 000 руб.</p>
                                </div>
                            </div>
                        </div>
                                                <div class="calculator-result-text-wrapper">
                            <p class="calculator-underline">В стоимость ОТ входит:</p>
                            <div class="calculator-result-text">
                        * профессиональный коллектив от 3-х человек
                        <br>* опыт от 5 лет, наличие удостоверений пиротехников и лицензии на применение пиротехнических изделий
                        <br>* проведение огненного шоу длительностью от 10 минут
                        </div>
                            <br>
                            <p class="calculator-underline">В стоимость ДО входит:</p>
                            <div class="calculator-result-text">входит все то же самое, что и в "от", а стоимость
                                меняется в зависимости от условий выбранного артиста
                            </div>
                        </div>
                    

                    <div class="calculator-result-title-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <p class="calculator-result-title">Съемка</p>
                            </div>
                            <div class="col-6">
                                <p class="calculator-result-price">от 155 000 руб. до 195 000 руб.</p>
                            </div>
                        </div>
                    </div>

                    <div class="calculator-result-subtitle-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <p class="calculator-result-subtitle">Фотограф</p>
                            </div>
                            <div class="col-6">
                                <p class="calculator-result-subprice">от 60 000 руб. до 80 000 руб.</p>
                            </div>
                        </div>
                    </div>
                                        <div class="calculator-result-text-wrapper">
                        <p class="calculator-underline">В стоимость ОТ входит:</p>
                        <div class="calculator-result-text">
                        * опыт от 7 лет
                        <br>* съемка в течение 10 часов
                        <br>* репортажный или fine art стиль съемки
                        <br>
                        <br>Результат
                        <br>* авторская обработка
                        <br>* от 700 лучших фотографий
                        <br>* срок сдачи фотографий 3-6 месяцев
                        </div>
                        <br>
                        <p class="calculator-underline">В стоимость ДО входит:</p>
                        <div class="calculator-result-text">входит все то же самое, что и в "от", а стоимость меняется в
                            зависимости от условий выбранного фотографа
                        </div>
                    </div>


                                            <div class="calculator-result-subtitle-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-subtitle">Фотозона</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-subprice">15 000 руб.</p>
                                </div>
                            </div>
                        </div>
                                                <div class="calculator-result-text-wrapper">
                            <p class="calculator-underline">В стоимость ОТ входит:</p>
                            <div class="calculator-result-text">
                        * фотозона со студийным белым фоном
                        <br>* качественный реквизит: таблички с забавными фразами + аксессуары
                        <br>* съемка на полароид
                        </div>
                            <br>
                            <p class="calculator-underline">В стоимость ДО входит:</p>
                            <div class="calculator-result-text">входит все то же самое, что и в стоимость "от"</div>
                        </div>
                    
                                            <div class="calculator-result-subtitle-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-subtitle">Видеограф</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-subprice">от 60 000 руб. до 80 000 руб.</p>
                                </div>
                            </div>
                        </div>
                                                <div class="calculator-result-text-wrapper">
                            <p class="calculator-underline">В стоимость ОТ входит:</p>
                            <div class="calculator-result-text">
                        * опыт от 7 лет
                        <br>* двухкамерная съемка в течение 10 часов
                        <br>* современный стиль съемки и монтажа
                        <br>
                        <br>Результат
                        <br>* клип 3-4 минуты + фильм 15-40 минут
                        <br>* вы получите видео через 3- 6 месяцев
                        <br>* запись исходных материалов (по желанию)
                        </div>
                            <br>
                            <p class="calculator-underline">В стоимость ДО входит:</p>
                            <div class="calculator-result-text">входит все то же самое, что и в "от", а стоимость
                                меняется в зависимости от условий выбранного видеографа
                            </div>
                        </div>
                    

                                            <div class="calculator-result-subtitle-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-subtitle">Аэросъемка</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-subprice">20 000 руб.</p>
                                </div>
                            </div>
                        </div>
                        <div class="calculator-result-text-wrapper">
                            <p class="calculator-underline">В стоимость ОТ входит:</p>
                            <div class="calculator-result-text">
                                * работа видеографа
                                <br>* видеосъемка с помощью квадрокоптера
                            </div>
                            <br>
                            <p class="calculator-underline">В стоимость ДО входит:</p>
                            <div class="calculator-result-text">входит все то же самое, что и в стоимость "от"</div>
                        </div>
                    



                                            <div class="calculator-result-title-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-title">Выездная церемония</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-price">от 31 000 руб. до 36 000 руб.</p>
                                </div>
                            </div>
                        </div>


                        <div class="calculator-result-subtitle-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-subtitle">Ведущая церемонии</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-subprice">от 10 000 руб. до 15 000 руб.</p>
                                </div>
                            </div>
                        </div>
                                                <div class="calculator-result-text-wrapper">
                            <p class="calculator-underline">В стоимость ОТ входит:</p>
                            <div class="calculator-result-text">
                        * отпыт от 5-ти лет
                        <br>* адаптация текста речи с учетом пожеланий
                        <br>* проведение церемонии
                        </div>
                            <br>
                            <p class="calculator-underline">В стоимость ДО входит:</p>
                            <div class="calculator-result-text">входит все то же самое, что и в стоимость "от"</div>
                        </div>


                        <div class="calculator-result-subtitle-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-subtitle">Звуковое оборудование</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-subprice">10 000 руб.</p>
                                </div>

                            </div>
                        </div>
                        <div class="calculator-result-text-wrapper">
                            <p class="calculator-underline">В стоимость ОТ входит:</p>
                            <div class="calculator-result-text">
                                * 2 колонки
                                <br>* микшерный пульт
                                <br>* 2 микрофона
                            </div>
                            <br>
                            <p class="calculator-underline">В стоимость ДО входит:</p>
                            <div class="calculator-result-text">входит все то же самое, что и в стоимость "от"</div>
                        </div>


                        <div class="calculator-result-subtitle-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-subtitle">Белоснежное конфетти</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-subprice">5 000 руб.</p>
                                </div>

                            </div>
                        </div>
                        <div class="calculator-result-text-wrapper">
                            <p class="calculator-underline">В стоимость ОТ входит:</p>
                            <div class="calculator-result-text">белые воздушные конфетти для каждого гостя</div>
                            <br>
                            <p class="calculator-underline">В стоимость ДО входит:</p>
                            <div class="calculator-result-text">входит все то же самое, что и в стоимость "от"</div>
                        </div>


                        <div class="calculator-result-subtitle-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-subtitle">Зонты на случай дождя</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-subprice">6 000 руб.</p>
                                </div>

                            </div>
                        </div>
                        <div class="calculator-result-text-wrapper">
                            <p class="calculator-underline">В стоимость ОТ входит:</p>
                            <div class="calculator-result-text">аренда белых зонтов-трость для гостей</div>
                            <br>
                            <p class="calculator-underline">В стоимость ДО входит:</p>
                            <div class="calculator-result-text">входит все то же самое, что и в стоимость "от"</div>
                        </div>
                    


                                            <div class="calculator-result-title-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-title">Сборы невесты</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-price">от 20 000 руб. до 30 000 руб.</p>
                                </div>
                            </div>
                        </div>

                                                    <div class="calculator-result-subtitle-wrapper">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="calculator-result-subtitle">Стилист</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="calculator-result-subprice">от 10 000 руб. до 15 000 руб.</p>
                                    </div>
                                </div>
                            </div>
                                                        <div class="calculator-result-text-wrapper">
                                <p class="calculator-underline">В стоимость ОТ входит:</p>
                                <div class="calculator-result-text">
                        * топ-стилист (опыт от 5-ти лет)
                        <br>* репетиция прически и макияжа с выездом к невесте
                        <br>* прическа и макияж в день свадьбы
                        </div>
                                <br>
                                <p class="calculator-underline">В стоимость ДО входит:</p>
                                <div class="calculator-result-text">цена меняется в зависимости от условий выбранного стилиста</div>
                            </div>
                        

                                                    <div class="calculator-result-subtitle-wrapper">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="calculator-result-subtitle">Номер в отеле</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="calculator-result-subprice">от 10 000 руб. до 15 000 руб.</p>
                                    </div>
                                </div>
                            </div>
                                                        <div class="calculator-result-text-wrapper">
                                <p class="calculator-underline">В стоимость ОТ входит:</p>
                                <div class="calculator-result-text">аренда номера для сборов невесты в 5* отеле</div>
                                <br>
                                <p class="calculator-underline">В стоимость ДО входит:</p>
                                <div class="calculator-result-text">стоимость меняется в зависимости от условий выбранного отеля</div>
                            </div>
                                            



                                            <div class="calculator-result-title-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <p class="calculator-result-title">Транспорт</p>
                                </div>
                                <div class="col-6">
                                    <p class="calculator-result-price">от 17 500 руб. до 25 000 руб.</p>
                                </div>
                            </div>
                        </div>

                                                    <div class="calculator-result-subtitle-wrapper">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="calculator-result-subtitle">Авто для жениха и невесты</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="calculator-result-subprice">от 10 000 руб. до 15 000 руб.</p>
                                    </div>
                                </div>
                            </div>
                                                        <div class="calculator-result-text-wrapper">
                                <p class="calculator-underline">В стоимость ОТ входит:</p>
                                <div class="calculator-result-text">* аренда Mercedes-Benz бизнес-класса на 5 часов</div>
                                <br>
                                <p class="calculator-underline">В стоимость ДО входит:</p>
                                <div class="calculator-result-text">стоимость меняется в зависимости от дня недели и
                                    цвета авто
                                </div>
                            </div>
                        

                                                    <div class="calculator-result-subtitle-wrapper">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="calculator-result-subtitle">Микроавтобус для гостей</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="calculator-result-subprice">от 7 500 руб. до 10 000 руб.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="calculator-result-text-wrapper">
                                <p class="calculator-underline">В стоимость ОТ входит:</p>
                                <div class="calculator-result-text">* аренда микроавтобуса Мерседес Спринтер 5 часов
                                </div>
                                <br>
                                <p class="calculator-underline">В стоимость ДО входит:</p>
                                <div class="calculator-result-text">стоимость меняется в зависимости от дня недели и
                                    цвета авто
                                </div>
                            </div>
                                            

                    <div class="calculator-result-title-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <p class="calculator-result-title">Важные детали</p>
                            </div>
                            <div class="col-6">
                                <p class="calculator-result-price">от 44 000 руб. до 64 000 руб.</p>
                            </div>
                        </div>
                    </div>

                    <div class="calculator-result-subtitle-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <p class="calculator-result-subtitle">Детали</p>
                            </div>
                            <div class="col-6">
                                <p class="calculator-result-subprice">от 30 000 руб. до 50 000 руб.</p>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-result-text-wrapper">
                        <p class="calculator-underline">В стоимость ОТ входит:</p>
                        <div class="calculator-result-text">приглашения, рассадочные карточки, номерки на столы, план
                            рассадки гостей, коробка для подарков, семейный очаг, фейерверк для торта, книга пожеланий,
                            подарки, конфетти, элементы концепции свадьбы и прочее
                        </div>
                        <br>
                        <p class="calculator-underline">В стоимость ДО входит:</p>
                        <div class="calculator-result-text">стоимость меняется в зависимости от количества выбранных
                            услуг, числа гостей и качества исполнения
                        </div>
                    </div>

                    <div class="calculator-result-subtitle-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <p class="calculator-result-subtitle">Торт</p>
                            </div>
                            <div class="col-6">
                                <p class="calculator-result-subprice">14 000 руб.</p>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-result-text-wrapper">
                        <p class="calculator-underline">В стоимость ОТ входит:</p>
                        <div class="calculator-result-text">
                            * индивидуальный дизайн торта: с кремом, открытый, суфле, с мастикой, с марцепаном,
                            французский крокембуш
                            <br>* дегустация начинок
                        </div>
                        <br>
                        <p class="calculator-underline">В стоимость ДО входит:</p>
                        <div class="calculator-result-text">входит все то же самое, что и в стоимость "от"</div>
                    </div>


                    <div class="calculator-result-title-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <p class="calculator-result-title">Итого по услугам</p>
                            </div>
                            <div class="col-6">
                                <p class="calculator-result-price">от 1 197 150 руб. до 1 739 000 руб.</p>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-result-subtitle-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <p class="calculator-result-subtitle">Услуги свадебного агентства</p>
                            </div>
                            <div class="col-6">
                                                                <p class="calculator-result-subprice">от 107 744 руб. до 156 510 руб.</p>
                            </div>
                        </div>
                    </div>
                                        <div class="calculator-result-text-wrapper">
                        <p class="calculator-underline">В стоимость ОТ входит:</p>
                        <div class="calculator-result-text">
                            
						 * организатор свадьбы на все время подготовки
						<br>* свадебный менеджмент: ведение списка всех организационных дел, планирование тайминга свадебного дня, подбор мест для прогулки, помощь в составлении меню, расчет алкоголя, зонирование банкетного зала и расстановка столов, бронирование номеров и заказ такси для гостей, покупки/заказы по вашей просьбе и т.д.
						<br>* координация в день праздника: 2 свадебных распорядителя
						<br>* круглосуточный он-лайн доступ ко всей информации по организации свадьбы
						<br>* решение финансово-договорных отношений с подрядчиками
						                        </div>
                        <br>
                        <p class="calculator-underline">В стоимость ДО входит:</p>
                        <div class="calculator-result-text">стоимость меняется в зависимости от итогового бюджета и,
                            соответственно, объема выполняемой работы
                        </div>
                    </div>
                    <div class="calculator-result-title-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <p class="calculator-result-title">Итого с организацией</p>
                            </div>
                            <div class="col-6">
                                                                <p class="calculator-result-price">от 1 304 894 руб. до 1 895 510 руб.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
			</div>
			<footer id="footer" class="footer-1" style="background-color:black;height:300px;margin:0px 0px 0px 0px">
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
</body>
</html>