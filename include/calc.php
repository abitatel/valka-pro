<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<section class="block-3">
    <div class="max">
        <h2>Калькулятор стоимости</h2>

        <div class="calc">
            <form action="#">
                <?=bitrix_sessid_post()?>
                <div class="r-check">
                    <label>
                        <input type="radio" value="1" name="1">
                        <span>Валка целиком</span>
                    </label>
                    <label>
                        <input type="radio" value="1" name="1">
                        <span>Валка с оттяжкой</span>
                    </label>
                    <label>
                        <input type="radio" value="1" name="1">
                        <span>Валка частями</span>
                    </label>
                    <label>
                        <input type="radio" value="1" name="1">
                        <span>Валка с завешиванием</span>
                    </label>
                </div>
                <div class="info-f">
                    <div class="ch-pick ch-pick-1">
                        <p>Диаметр (см)</p>
                        <p>20</p>
                        <p>30</p>
                        <p>40</p>
                        <p>50</p>
                        <p>60</p>
                        <p>70</p>
                        <p>80</p>
                        <p>90</p>
                    </div>
                    <div class="ch-pick ch-pick-2">
                        <p>Цена (₽)</p>
                        <p>от 2 000</p>
                        <p>от 3 900</p>
                        <p>от 4 400</p>
                        <p>от 5 900</p>
                        <p>от 7 900</p>
                        <p>от 8 500</p>
                        <p>от 9 500</p>
                        <p>от 10 000</p>
                    </div>
                </div>

                <div class="fields-block">
                    <select class="bl-1">
                        <option value="2">Диаметр дерева</option>
                        <option value="2">Диаметр дерева 2</option>
                        <option value="2">Диаметр дерева 3</option>
                        <option value="2">Диаметр дерева 4</option>
                        <option value="2">Диаметр дерева 5</option>
                    </select>
                    <input class="bl-2" type="text" placeholder="Кол-во деревьев">
                    <div class="bl-3" data-file>
                        <button type="button" class="file-up">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 26 26">
                                <g clip-path="url(#a)">
                                    <path fill="#4DC167" d="M9.14 23.3c-.04 0 .05.01 0 0ZM19.91 0H6.09A6.1 6.1 0 0 0 0 6.1v7.61c.05 1.35 1.98 1.35 2.03 0V6.1A4.07 4.07 0 0 1 6.1 2.03h13.82a4.07 4.07 0 0 1 4.06 4.06v7.62c.05 1.35 1.98 1.35 2.03 0V6.1A6.1 6.1 0 0 0 19.9 0ZM9.27 21.29c-4.72-.61-7.24-2.44-7.24-3.52a1.02 1.02 0 1 0-2.03 0c0 .96.49 2.37 2.81 3.67 1.6.89 3.93 1.56 6.33 1.87a1.02 1.02 0 0 0 .13-2.02Zm2.67-2.3c-1-.92-2.35.45-1.43 1.43l1.57 1.56c.2.2.2.55 0 .75l-1.57 1.53a1.02 1.02 0 0 0 1.42 1.45l1.57-1.53h.01c1-.96 1-2.68 0-3.64l-1.57-1.56Zm5.12 4.1c.05 0-.05 0 0 0Zm7.92-6.33c-.56 0-1.01.45-1.01 1.01 0 .54-.63 1.2-1.7 1.76-1.3.7-3.2 1.25-5.35 1.54a1.02 1.02 0 0 0 .14 2.02c3.5-.41 9-2.08 8.94-5.32 0-.56-.45-1.01-1.02-1.01ZM10.97 6.14h-.81c-1.35-.05-1.35-1.97 0-2.03h.8c1.36.06 1.36 1.98 0 2.03ZM7.1 5.13c0-.56-.46-1.02-1.02-1.02h-.8c-1.36.06-1.36 1.98 0 2.03h.8c.56 0 1.02-.45 1.02-1.01Zm9.75 0c0-.56-.46-1.02-1.02-1.02h-.8c-1.36.06-1.36 1.98 0 2.03h.8c.56 0 1.02-.45 1.02-1.01Zm4.87 0c0-.56-.45-1.02-1.01-1.02h-.81c-1.35.06-1.35 1.98 0 2.03h.8c.57 0 1.02-.45 1.02-1.01ZM13.1 16.58l3.34-1.99a2.3 2.3 0 0 0 1.14-2 2.3 2.3 0 0 0-1.14-2L13.1 8.62a2.32 2.32 0 0 0-2.37-.02 2.3 2.3 0 0 0-1.17 2.02v3.97a2.35 2.35 0 0 0 3.54 2Zm-1.04-6.22 3.34 1.98c.2.12.2.39 0 .5l-3.34 2a.3.3 0 0 1-.32 0 .28.28 0 0 1-.15-.26v-3.97c0-.14.08-.22.15-.26.03-.02.09-.04.16-.04.05 0 .1.01.16.04Z" />
                                </g>
                                <defs>
                                    <clipPath id="a">
                                        <path fill="#fff" d="M0 0h26v26H0z" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>Загрузить видео ОБЪЕКТА</span>
                        </button>
                        <input id="up-file" name="file" multiple type="file">
                    </div>
                    <div class="bl-4">
                        <label>
                            <input name="oplata" type="radio">
                            <span>Оплата наличными</span>
                        </label>
                        <label>
                            <input name="oplata" type="radio">
                            <span>Оплата Безналичными</span>
                        </label>
                    </div>
                    <div class="bl-5">
                        <p>Итого:</p>
                        <p>26 000 ₽</p>
                    </div>
                    <div class="bl-6">
                        <button class="submit" type="submit"><span>Заказать расчет</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>