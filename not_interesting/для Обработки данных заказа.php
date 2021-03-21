<html lang="ru">
<head>
  <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
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
</body>
</html>