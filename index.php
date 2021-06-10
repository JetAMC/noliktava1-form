<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media-query.css">
</head>
<body>
  <div class="main">
    <div class="main__container container">
      <div class="header">
        <div class="header__logo">
          <img src="images/logo.png">
        </div>
        <div class="header__contacts">
          <span>Остались вопросы?</span>
          <a href="tel:+37125331451"><img alt="" src="images/phone-ellipsis.png">+371 25 331 451</a>
        </div>
      </div>
      <div class="main__big-title">
        <h1><span>Рассчитайте стоимость</span><br>аренды вашего бокса</h1>
      </div>
      <div class="main__form" id="main-form">
        <div class="main__steps">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
        <div class="main__tabs">
          <div class="tab">
            <div class="tab__title">
              <span>01. Подтвердите район</span>
            </div>
            <div class="tab__elements first">
              <!-- Zolitude -->
              <label class="tab__step-one zolitude">
                <div class="tab__img">
                  <img alt="" src="images/zolitude.jpg">
                </div>
                <div class="tab__input">
                  <div class="custom-radio">
                    <input value="zolitude" type="radio" name="area">
                    <span class="checkmark"></span>
                    <span>Золитуде</span>
                  </div>
                </div>
                <div class="tab__text">
                  <p>Jūrkalnes iela 6, Zemgales priekšpilsēta, Rīga, LV-1046<br><span>(5 минут от t/c Spice)</span></p>
                </div>
              </label>
              <!-- Purvciems -->
              <label class="tab__step-one purvciems">
                <div class="tab__img">
                  <img alt="" src="images/purvciems.jpg">
                </div>
                <div class="tab__input">
                  <div class="custom-radio">
                    <input value="purvciems" type="radio" name="area">
                    <span class="checkmark"></span>
                    <span>Пурвциемс</span>
                  </div>
                </div>
                <div class="tab__text">
                  <p>Braslas iela 20, Vidzemes priekšpilsēta, Rīga, LV-1084<span><br>(1 минута от t/c Domina)</span></p>
                </div>
              </label>
              <!-- Centrs -->
              <label class="tab__step-one centrs">
                <div class="tab__img">
                  <img alt="" src="images/centrs.jpg">
                </div>
                <div class="tab__input">
                  <div class="custom-radio">
                    <input value="centrs" type="radio" name="area">
                    <span class="checkmark"></span>
                    <span>Центр</span>
                  </div>
                </div>
                <div class="tab__text">
                  <p>Ganību dambis 7A, Ziemeļu rajons, Rīga, LV-1045<span><br>(7 минут от Arena Riga)</span></p>
                </div>
              </label>
              <!-- Imanta -->
              <label class="tab__step-one imanta">
                <div class="tab__img">
                  <img alt="" src="images/imanta.jpg">
                </div>
                <div class="tab__input">
                  <div class="custom-radio">
                    <input value="imanta" type="radio" name="area">
                    <span class="checkmark"></span>
                    <span>Иманта</span>
                  </div>
                </div>
                <div class="tab__text">
                  <p>Mellužu iela 17, Kurzemes rajons, Rīga, LV-1067<span><br>(3 минуты от t/c Damme)</span></p>
                </div>
              </label>
              <!-- Teika -->
              <label class="tab__step-one teika">
                <div class="tab__img">
                  <img alt="" src="images/teika.jpg">
                </div>
                <div class="tab__input">
                  <div class="custom-radio">
                    <input value="teika" type="radio" name="area">
                    <span class="checkmark"></span>
                    <span>Теика</span>
                  </div>
                </div>
                <div class="tab__text">
                  <p>Krustabaznīcas iela 16, Vidzemes priekšpilsēta, Rīga, LV-1006<br><span>(3 минуты от t/c Alfa)</span></p>
                </div>
              </label>
              <!-- Krasta -->
              <label class="tab__step-one krasta">
                <div class="tab__img">
                  <img alt="" src="images/krasta.jpg">
                </div>
                <div class="tab__input">
                  <div class="custom-radio">
                    <input value="krasta" type="radio" name="area">
                    <span class="checkmark"></span>
                    <span>Краста</span>
                  </div>
                </div>
                <div class="tab__text">
                  <p>Austuves iela 3A, Latgales priekšpilsēta, Rīga, LV-1063<br><span>(1 минута от t/c Akropole)</span></p>
                </div>
              </label>
              <!-- Ziepniekkalns -->
              <label class="tab__step-one ziepniekkalns">
                <div class="tab__img">
                  <img alt="" src="images/ziepniekkalns.jpg">
                </div>
                <div class="tab__input">
                  <div class="custom-radio">
                    <input value="ziepniekkalns" type="radio" name="area">
                    <span class="checkmark"></span>
                    <span>Зепниеккалнс</span>
                  </div>
                </div>
                <div class="tab__text">
                  <p>Mālu iela 28, Zemgales priekšpilsēta, Rīga, LV-1058<br><span>(6 минут от t/c Riga Plaza)</span></p>
                </div>
              </label>
            </div>
          </div>
          <div class="tab">
            <div class="tab__title">
              <span>02. Выберите срок аренды</span>
            </div>
            <div class="tab__elements second">
              <!-- One month -->
              <label class="tab__step-two">
                <div class="tab__input">
                  <div class="custom-radio">
                    <span>1 месяц</span>
                    <input value="one" type="radio" name="term">
                    <span class="checkmark"></span>
                  </div>
                </div>
              </label>
              <!-- Two months -->
              <label class="tab__step-two">
                <div class="tab__input">
                  <div class="custom-radio">
                    <span>2 месяца</span>
                    <input value="two" type="radio" name="term">
                    <span class="checkmark"></span>
                  </div>
                </div>
              </label>
              <!-- Three to six months -->
              <label class="tab__step-two">
                <div class="tab__input">
                  <div class="custom-radio">
                    <span>3-6 месяцев</span>
                    <input value="three-to-six" type="radio" name="term">
                    <span class="checkmark"></span>
                  </div>
                </div>
              </label>
              <!-- Six to twelve months -->
              <label class="tab__step-two">
                <div class="tab__input">
                  <div class="custom-radio">
                    <span>6-12 месяцев</span>
                    <input value="six-to-twelve" type="radio" name="term">
                    <span class="checkmark"></span>
                  </div>
                </div>
              </label>
              <!-- Twelve months -->
              <label class="tab__step-two">
                <div class="tab__input">
                  <div class="custom-radio">
                    <span>> 12 месяцев</span>
                    <input value="twelve" type="radio" name="term">
                    <span class="checkmark"></span>
                  </div>
                </div>
              </label>
              <!-- Twenty four months -->
              <label class="tab__step-two">
                <div class="tab__input">
                  <div class="custom-radio">
                    <span>> 24 месяцев</span>
                    <input value="twenty-four" type="radio" name="term">
                    <span class="checkmark"></span>
                  </div>
                </div>
              </label>
            </div>
          </div>
          <div class="tab">
            <div class="tab__title">
              <span>03. Выберите размер бокса</span>
            </div>
            <div class="tab__elements third">
              <div class="tab__radio-buttons">
                <button class="prev-button" onclick="plusSlides(-1)"><img src="images/minus-slide.svg" /></button>
                <label class="third-step-radio">
                  <input value="4" type="radio" name="size">
                  <span class="checkmark-third-step rounded-left">4 м²</span>
                </label>
                <label class="third-step-radio">
                  <input value="5" type="radio" name="size">
                  <span class="checkmark-third-step">5 м²</span>
                </label>
                <label class="third-step-radio">
                  <input value="7" type="radio" name="size">
                  <span class="checkmark-third-step">7 м²</span>
                </label>
                <label class="third-step-radio">
                  <input value="10" type="radio" name="size">
                  <span class="checkmark-third-step">10 м²</span>
                </label>
                <label class="third-step-radio">
                  <input value="15" type="radio" name="size">
                  <span class="checkmark-third-step">15 м²</span>
                </label>
                <label class="third-step-radio">
                  <input value="30" type="radio" name="size">
                  <span class="checkmark-third-step rounded-right">30 м²</span>
                </label>
                <button class="next-button" onclick="plusSlides(1)"><img src="images/plus-slide.svg" /></button>
              </div>
              <div id="4" class="tab__visual">
                <div class="tab__visual-img value-img">
                  <img alt="" class="zoom-images" src="images/big/4-meters.jpg">
                </div>
                <div class="tab__visual-text">
                  <div class="tab__visual-title">
                    <span>Бокс 4 м² — Для хранения небольшого количества вещей</span>
                  </div>
                  <div class="tab__visual-small-text">
                    <p>Вмещает в себя примерно 97 коробок размера 590x390x447мм . Обычно хранят:</p>
                    <ul>
                      <li><span>Велосипеды</span></li>
                      <li><span>Покрышки</span></li>
                      <li><span>Коробки с вещами</span></li>
                      <li><span>Освободить место на балконе</span></li>
                      <li><span>Небольшой переезд</span></li>
                    </ul>
                    <div class="tab__visual-transport-area">
                      <div class="tab__visual-transport">
                        <input class="transport" type="checkbox" name="transport-four"><span>Необходима перевозка</span>
                      </div>
                      <p>Перевозка от 40 евро. Это вас ни к чему не обязывает. Все условия обсуждаются с менеджером.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div id="5" class="tab__visual">
                <div class="tab__visual-img value-img">
                  <img alt="" class="zoom-images" src="images/big/5-meters.jpg">
                </div>
                <div class="tab__visual-text">
                  <div class="tab__visual-title">
                    <span>Бокс 5 м² — Для хранения небольшого количества вещей</span>
                  </div>
                  <div class="tab__visual-small-text">
                    <p>Вмещает в себя примерно 130 коробок размера 590x390x447мм . Обычно хранят:</p>
                    <ul>
                      <li><span>Велосипеды</span></li>
                      <li><span>Покрышки</span></li>
                      <li><span>Коробки с вещами</span></li>
                      <li><span>Освободить место на балконе</span></li>
                      <li><span>Небольшой переезд</span></li>
                    </ul>
                    <div class="tab__visual-transport-area">
                      <div class="tab__visual-transport">
                        <input class="transport" type="checkbox" name="transport-five"><span>Необходима перевозка</span>
                      </div>
                      <p>Перевозка от 40 евро. Это вас ни к чему не обязывает. Все условия обсуждаются с менеджером.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div id="7" class="tab__visual">
                <div class="tab__visual-img value-img">
                  <img alt="" class="zoom-images" src="images/big/7-meters.jpg">
                </div>
                <div class="tab__visual-text">
                  <div class="tab__visual-title">
                    <span>Бокс 7 м² — Для переезда, во время ремонта, для хранения товара</span>
                  </div>
                  <div class="tab__visual-small-text">
                    <p>Вмещает в себя примерно 195 коробок размера 590x390x447мм. Обычно хранят:</p>
                    <ul>
                      <li><span>Помещает в себя вещи из полностью заполненного "буса" Mercedes Sprinter Maxi</span></li>
                      <li><span>Обычно используют во время ремонта, переезда, либо для хранения товара</span></li>
                    </ul>
                    <div class="tab__visual-transport-area">
                      <div class="tab__visual-transport">
                        <input class="transport" type="checkbox" name="transport-seven"><span>Необходима перевозка</span>
                      </div>
                      <p>Перевозка от 40 евро. Это вас ни к чему не обязывает. Все условия обсуждаются с менеджером.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div id="10" class="tab__visual">
                <div class="tab__visual-img value-img">
                  <img alt="" class="zoom-images" src="images/big/10-meters.jpg">
                </div>
                <div class="tab__visual-text">
                  <div class="tab__visual-title">
                    <span>Бокс 10 м² — Для хранения вещей во время ремонта или переезда, а также для хранения товаров различных бизнесов</span>
                  </div>
                  <div class="tab__visual-small-text">
                    <p>Вмещает в себя примерно 260 коробок размера 590x390x447мм. Обычно хранят:</p>
                    <ul>
                      <li><span>Отлично подходит для хранения вещей во время ремонта или переезда, а также для хранения товаров различных бизнесов, строительных материалов, летних кафе и ресторанов</span></li>
                    </ul>
                    <div class="tab__visual-transport-area">
                      <div class="tab__visual-transport">
                        <input class="transport" type="checkbox" name="transport-ten"><span>Необходима перевозка</span>
                      </div>
                      <p>Перевозка от 40 евро. Это вас ни к чему не обязывает. Все условия обсуждаются с менеджером.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div id="15" class="tab__visual">
                <div class="tab__visual-img value-img">
                  <img alt="" class="zoom-images" src="images/big/15-meters.jpg">
                </div>
                <div class="tab__visual-text">
                  <div class="tab__visual-title">
                    <span>Бокс 15 м² — Для переезда 2-х этажной квартиры/дома или для хранения товара</span>
                  </div>
                  <div class="tab__visual-small-text">
                    <p>Вмещает в себя примерно 390 коробок размера 590x390x447мм. Обычно хранят:</p>
                    <ul>
                      <li><span>Помещает в себя вещи из 2-х полностью заполненных "бусиков" Mercedes Sprinter Maxi</span></li>
                      <li><span>Обычно используют во время переезда 2-х этажной квартиры/дома или для хранения товара</span></li>
                    </ul>
                    <div class="tab__visual-transport-area">
                      <div class="tab__visual-transport">
                        <input class="transport" type="checkbox" name="transport-fifteen"><span>Необходима перевозка</span>
                      </div>
                      <p>Перевозка от 40 евро. Это вас ни к чему не обязывает. Все условия обсуждаются с менеджером.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div id="30" class="tab__visual">
                <div class="tab__visual-img value-img">
                  <img alt="" class="zoom-images" src="images/big/30-meters.jpg">
                </div>
                <div class="tab__visual-text">
                  <div class="tab__visual-title">
                    <span>Бокс 30 м² — Для хранения множества товаров, переезда ресторана или хранения оборудования</span>
                  </div>
                  <div class="tab__visual-small-text">
                    <p>Вмещает в себя примерно 780 коробок размера 590x390x447мм. Обычно хранят:</p>
                    <ul>
                      <li><span>В 95% случаев арендуют для хранения множества товаров, переезда ресторана или хранения оборудования</span></li>
                    </ul>
                    <div class="tab__visual-transport-area">
                      <div class="tab__visual-transport">
                        <input class="transport" type="checkbox" name="transport-thirty"><span>Необходима перевозка</span>
                      </div>
                      <p>Перевозка от 40 евро. Это вас ни к чему не обязывает. Все условия обсуждаются с менеджером.</p>
                    </div>
                  </div>
                </div>
              </div>
                <!-- Zoom images Modal -->
                <div class="modal">
                  <span class="close">&times;</span>
                  <img class="modal-content">
                </div>
            </div>
          </div>
          <form action="payment/redirect.php" method="POST">
            <div class="tab">
              <div class="tab__title">
                <span>Стоимость аренды:</span>
              </div>
              <div class="tab__elements fourth">
                <div class="tab__final-radio">
                  <label class="custom-radio-final">
                    <div>
                      <input value="" type="radio" name="payment">
                      <span class="checkmark"></span>
                    </div>
                    <div>
                      <span>При оплате за месяц:</span>
                      <p><span class="price-one fullOne"></span>€ / мес.</p>
                    </div>
                  </label>
                  <label class="custom-radio-final">
                    <div>
                      <input value="" type="radio" checked="true" name="payment">
                      <span class="checkmark"></span>
                    </div>
                    <div>
                      <span>При оплате за 6 месяцев:</span>
                      <p><span class="price-six"></span>€ / мес. (<span class="fullSix"></span>€, экономия <span class="profit-six"></span> €)</p>
                    </div>
                  </label>
                  <label class="custom-radio-final">
                    <div>
                      <input value="" type="radio" name="payment">
                      <span class="checkmark"></span>
                    </div>
                    <div>
                      <span>При оплате за год:</span>
                      <p><span class="price-twelve"></span>€ / мес. (<span class="fullTwelve"></span>€, экономия <span class="profit-twelve"></span> €)</p>
                    </div>
                  </label>
                </div>
                <div class="tab__final-small-title">
                  <span>К любому из выбранных вариантов оплаты прибавляется депозит в размереодного месяца аренды<img title="test" src="images/phone-ellipsis.png"></span>
                </div>
                <div class="tab__final-dropdowns">
                  <label class="custom-select">
                    <select class="final-area" name="final-area">
                      <option value="zolitude">Район: Золитуде</option>
                      <option value="purvciems">Район: Пурвциемс</option>
                      <option value="centrs">Район: Центр</option>
                      <option value="imanta">Район: Иманта</option>
                      <option value="teika">Район: Теика</option>
                      <option value="krasta">Район: Краста</option>
                      <option value="ziepniekkalns">Район: Зепниеккалнс</option>
                    </select>
                    <img alt="" class="fa-angle-down" src="images/custom-select.png">
                  </label>
                  <label class="custom-select"> 
                    <select class="final-term" name="final-term">
                      <option value="one">Срок: 1 месяц</option>
                      <option value="two">Срок: 2 месяца</option>
                      <option value="three-to-six">Срок: 3-6 месяцев</option>
                      <option value="six-to-twelve">Срок: 6-12 месяцев</option>
                      <option value="twelve">Срок: > 12 месяцев</option>
                      <option value="twenty-four">Срок: > 24 месяца</option>
                    </select>
                    <img alt="" class="fa-angle-down" src="images/custom-select.png">
                  </label>
                  <label class="custom-select">
                    <select class="final-size" name="final-size">
                      <option value="4">Размер: 4 м²</option>
                      <option value="5">Размер: 5 м²</option>
                      <option value="7">Размер: 7 м²</option>
                      <option value="10">Размер: 10 м²</option>
                      <option value="15">Размер: 15 м²</option>
                      <option value="30">Размер: 30 м²</option>
                    </select>
                    <img alt="" class="fa-angle-down" src="images/custom-select.png">
                  </label>
                </div>
				<input type="hidden" value="" name="phone-number">
                <div class="submit-buttons">
                  <button type="submit" id="pay-with-online-bank" value="">Оплатить через интернет-банк</button>
                  <button type="submit" id="pay-with-card" value="">Оплатить картой</button>
                </div>
                <div class="privacy">
                  <label class="privacy__label">
                    <input type="checkbox" name="privacy-policy" required><p>Я согласен с <span>политикой конфиденциальности</span> и <span>договором офертой</span></p>
                  </label>
                </div>
                <div class="payment-systems">
                  <img alt="" src="images/paysera_logotype_internet.png">
                  <img alt="" src="images/Visa-Logo-2006–2014.png">
                  <img alt="" src="images/1280px-Mastercard-logo.png">
                </div>
              </div>
            </div>
          </form>
          <div class="main__buttons">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">← Назад</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Дальше →</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="footer__container container">
      <div class="footer__left">
        <div class="footer__logo">
          <img alt="" src="images/logo-white.svg" />
          <p>Боксы для хранения вещей в Риге</p>
        </div>
        <div class="footer__socials">
          <a href="https://www.facebook.com/noliktava1/" target="_blank"><img alt="" src="images/fb.png" /></a>
          <a href="https://www.instagram.com/noliktava1/" target="_blank"><img alt="" src="images/ig.png" /></a>
        </div>
      </div>
      <div class="footer__right">
        <div class="footer__right-side">
          <div class="footer__right-title">
            <p>Контакты</p>
          </div>
          <div class="footer__contacts">
            <a href="tel:+371 25 331 451"><img alt="" src="images/phone.png">+371 25 331 451</a>
            <a href="mailto:noliktava1@inbox.lv"><img alt="" src="images/mail.png">noliktava1@inbox.lv</a>
          </div>
          <div class="footer__policy">
            <a class="policy-confident" href="https://noliktava1.lv/privacy" target="_blank">Политика конфиденциальности</a>
            <a href="http://form.noliktava1.lv/documents/noliktava1-lv.pdf" target="_blank">Правила</a>
          </div>
        </div>
        <div class="footer__left-side">
          <div class="footer__right-title">
            <p>Реквизиты</p>
          </div>
          <div class="footer__right-data">
            <p>NOLIKTAVA1, SIA, Reģ. Nr. 44103124767 LV04HABA0551047025254<br> A/S Swedbank HABALV22</p>
          </div>
          <div class="footer__right-powered">
            <a href="https://penguindigital.eu/ru?utm_source=form&utm_medium=noliktava1" target="_blank">Разработка и <br>продвижение сайта - <img alt="" src="images/penguin-white.png" /></a>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="js/app.js"></script>
</body>
</html>