<html>
<head>
<meta charset="UTF-8">
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
 
 <form action="Adler.php" method="POST" class="calculator-form">
 <h1>Основные вопросы</h1>
            <div class="calculator-form-inner">
                <div class="calculator-form-inner2">
                    <h4 class="calculator-section-title">Основные вопросы по свадьбе</h4>

                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Сколько гостей на свадьбу вы приглашаете?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <input value="50" min="3" max="1000" type="number" name="guests"
                                       class="calculator-text-input"/>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Расскажите нам, пожалуйста, о бюджете вашей свадьбы
                                </p>
                                <p style="line-height: 20px;margin: 10px 0;" class="budget-output">Низкий<br>Для тех,
                                    кто готов к компромиссам и кому важно получить качество при минимальном свадебном
                                    бюджете</p>
                                <p style="line-height: 20px;margin: 10px 0;" class="budget-output">Средний<br>Для тех,
                                    кто привык к высокому сервису и ищет оптимальное соотношение цены и качества</p>
                                <p style="line-height: 20px;margin: 10px 0;" class="budget-output">Высокий<br>Для тех,
                                    кто любит все самое лучшее и не приемлет компромиссов</p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <select name="budget" class="calculator-text-input">
                                    <option value="low" selected>Низкий</option>
                                    <option value="medium">Средний</option>
                                    <option value="high">Высокий</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Где вы планируете провести гала-ужин?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <select name="type" class="calculator-text-input">
                                    <option value="1" selected>Усадьба</option>
                                    <option value="2">Особняк</option>
                                    <option value="3">Лофт</option>
                                    <option value="4">Шатер/Веранда</option>
                                    <option value="5">Ресторан</option>
                                    <option value="6">Банкетный зал</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Планируете ли вы выездную церемонию?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <label>
                                    <span>Да</span>
                                    <input type="radio" name="viezd_ceremony" value="1"/>
                                </label>
                                <label>
                                    <span>Нет</span>
                                    <input type="radio" name="viezd_ceremony" value="0" checked/>
                                </label>
                            </div>
                        </div>
                    </div>

                    <h4 class="calculator-section-title">Вопросы по декору</h4>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Нужен ли вам цветной текстиль (скатерти, салфетки) в
                                    оформлении?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <label>
                                    <span>Да</span>
                                    <input type="radio" name="textil" value="1"/>
                                </label>
                                <label>
                                    <span>Нет</span>
                                    <input type="radio" name="textil" value="0" checked/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Интересна ли вам посуда (бокалы, подстановочные тарелки)
                                    под стиль свадьбы?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <label>
                                    <span>Да</span>
                                    <input type="radio" name="posuda" value="1"/>
                                </label>
                                <label>
                                    <span>Нет</span>
                                    <input type="radio" name="posuda" value="0" checked/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Хотите ли вы дополнить украшение гала-ужина оригинальными
                                    стульями?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <label>
                                    <span>Да</span>
                                    <input type="radio" name="mebel" value="1"/>
                                </label>
                                <label>
                                    <span>Нет</span>
                                    <input type="radio" name="mebel" value="0" checked/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Планируете ли вы декорировать фуршет?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <label>
                                    <span>Да</span>
                                    <input type="radio" name="furshet" value="1"/>
                                </label>
                                <label>
                                    <span>Нет</span>
                                    <input type="radio" name="furshet" value="0" checked/>
                                </label>
                            </div>
                        </div>
                    </div>

                    <h4 class="calculator-section-title">Программа вечера</h4>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">
                                    Рекомендуем включить в бюджет светорежиссера и профессиональное световое
                                    оборудование, которое:<br>

                                    * усилит качество фото- и видеосъемки <br>
                                    * будет управлять настроением гостей и атмосферой праздника

                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <label>
                                    <span>Да</span>
                                    <input type="radio" name="light_equipment" value="1"/>
                                </label>
                                <label>
                                    <span>Нет</span>
                                    <input type="radio" name="light_equipment" value="0" checked/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Хотите ли вы разнообразить программу праздника артистами
                                    оригинального жанра (иллюзионистом, пародистом, шоу балетом и т.д.)?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <label>
                                    <span>Да</span>
                                    <input type="radio" name="artist" value="1"/>
                                </label>
                                <label>
                                    <span>Нет</span>
                                    <input type="radio" name="artist" value="0" checked/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Как вы смотрите на то, чтобы пригласить кавер-группу и
                                    танцевать под "живую" музыку?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <label>
                                    <span>Да</span>
                                    <input type="radio" name="cover_group" value="1"/>
                                </label>
                                <label>
                                    <span>Нет</span>
                                    <input type="radio" name="cover_group" value="0" checked/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Вы планируете постановочный первый танец?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <label>
                                    <span>Да</span>
                                    <input type="radio" name="dancing" value="1"/>
                                </label>
                                <label>
                                    <span>Нет</span>
                                    <input type="radio" name="dancing" value="0" checked/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Что вы скажете, если вечером вы и ваши гости зажгут
                                    бенгальские огни, а фотограф и видеограф это снимут?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <label>
                                    <span>Да</span>
                                    <input type="radio" name="bengal" value="1"/>
                                </label>
                                <label>
                                    <span>Нет</span>
                                    <input type="radio" name="bengal" value="0" checked/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Хотите ли вы фейерверк?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <label>
                                    <span>Да</span>
                                    <input type="radio" name="fireworks" value="1"/>
                                </label>
                                <label>
                                    <span>Нет</span>
                                    <input type="radio" name="fireworks" value="0" checked/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Интересно ли вам посмотреть фаер шоу?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <label>
                                    <span>Да</span>
                                    <input type="radio" name="fireshow" value="1"/>
                                </label>
                                <label>
                                    <span>Нет</span>
                                    <input type="radio" name="fireshow" value="0" checked/>
                                </label>
                            </div>
                        </div>
                    </div>

                    <h4 class="calculator-section-title">Дополнительные вопросы</h4>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Как насчет добавить в программу развлечений гостей
                                    фотозону с реквизитом?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <label>
                                    <span>Да</span>
                                    <input type="radio" name="photozona" value="1"/>
                                </label>
                                <label>
                                    <span>Нет</span>
                                    <input type="radio" name="photozona" value="0" checked/>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Должен ли снимать вашу свадьбу видеограф?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <label>
                                    <span>Да</span>
                                    <input type="radio" name="videograph" class="videograph" value="1"/>
                                </label>
                                <label>
                                    <span>Нет</span>
                                    <input type="radio" name="videograph" class="videograph" value="0" checked/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Должна ли на вашей свадьбе быть видеосъемка с
                                    квадрокоптера?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <label>
                                    <span>Да</span>
                                    <input type="radio" name="videocopter" class="viedocopter" value="1"/>
                                </label>
                                <label>
                                    <span>Нет</span>
                                    <input type="radio" name="videocopter" class="viedocopter" value="0" checked/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <script>
                        jQuery(function ($) {
                            $('.videograph').on('change', function () {
                                if ($(this).val() == 1 && this.checked) {
                                    $('.viedocopter[value="1"]').prop('disabled', false);
                                } else if ($(this).val() == 0 && this.checked) {
                                    $('.viedocopter[value="1"]').prop('disabled', true);
                                    $('.viedocopter[value="0"]').prop('checked', true);
                                }
                            });
                        });
                    </script>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Нужна ли вам рекомендация стилиста, который создаст для
                                    вас образ (прическу и макияж) и проведет его репетицию?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <label>
                                    <span>Да</span>
                                    <input type="radio" name="stilist" value="1"/>
                                </label>
                                <label>
                                    <span>Нет</span>
                                    <input type="radio" name="stilist" value="0" checked/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Вы планируете проводить сборы в отеле?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <label>
                                    <span>Да</span>
                                    <input type="radio" name="hotel_number" value="1"/>
                                </label>
                                <label>
                                    <span>Нет</span>
                                    <input type="radio" name="hotel_number" value="0" checked/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Хотите ли вы арендовать на день свадьбы автомобиль для
                                    жениха и невесты?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <label>
                                    <span>Да</span>
                                    <input type="radio" name="auto" value="1"/>
                                </label>
                                <label>
                                    <span>Нет</span>
                                    <input type="radio" name="auto" value="0" checked/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="calculator-question-wrapper">
                        <div class="row">
                            <div class="col col-7 col-md-9">
                                <p class="calculator-question">Потребуется ли вашим гостям трансфер на микроавтобусе?
                                </p>
                            </div>
                            <div class="col col-5 col-md-3 right-col">
                                <label>
                                    <span>Да</span>
                                    <input type="radio" name="bus" value="1"/>
                                </label>
                                <label>
                                    <span>Нет</span>
                                    <input type="radio" name="bus" value="0" checked/>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center" style="padding: 55px 0 30px 0;">
                <button style="width:200px;font-family: FuturaFuturisC;text-transform: none;font-size: 18px;color: #9d2f51;" href="Adler.php"
                        class="white-button" type="submit">Рассчитать
                </button>
            </div>
        </form>

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