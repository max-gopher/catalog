<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Профиль';

?>
<div class="jumbotron">
    <h1><?= Html::encode($this->title) ?></h1>
</div>

<div class="body-content">

    <div class="row">
        <div class="col-lg-4">
            <h2>Пользователь</h2>
            <a title="Редактировать данные пользователя" href="#">Редактировать</a>
            <div>
                <label>Ф.И.О:</label>
                <p>Литвинов Максим Владимирович</p>
            </div>
            <div>
                <label>E-mail:</label>
                <p>djin85_85@mail.ru</p>
            </div>
            <div>
                <label>Телефон:</label>
                <p>89115409172</p>
            </div>
            <div>
                <label>Страна:</label>
                <small>Можно использовать для объявлений</small>
                <p>Россия</p>
            </div>
            <div>
                <label>Город:</label>
                <small>Можно использовать для объявлений</small>
                <p>Вологда</p>
            </div>
            <div>
                <label>Адрес:</label>
                <small>Можно использовать для объявлений</small>
                <p>16000, ул. Путейская д.4а, кв.27</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h2>Организация</h2>
            <a title="Редактировать данные организации" href="#">Редактировать</a>
            <div>
                <label>Название организации:</label>
                <p>СЦ ПочиникА</p>
            </div>
            <div>
                <label>Описание организации:</label>
                <p>Это опсание организации</p>
            </div>
            <div>
                <h3>Сайты</h3>
                <div class="site-item">
                    <div>
                        <label>Домен:</label>
                        <p>www.pochinika35.ru</p>
                    </div>
                    <div><a title="Редактировать сайт" href="#">Редактировать</a></div>
                    <div>
                        <label>Название сайта:</label>
                        <p>Супер сайт</p>
                    </div>
                    <div>
                        <label>Описание:</label>
                        <p>Это описание супер сайта</p>
                    </div>
                    <div>
                        <label>Логотип:</label>
                        <img alt="" title="" src="upload/images/company/logo.png">
                    </div>
                    <div>
                        <label>Адрес:</label>
                        <small>Со страницы контакты</small>
                        <p>Россия, Вологда, 160000, ул. Путейская 4а, кв.27</p>
                    </div>
                    <div>
                        <label>Статья:</label>
                        <small>Максимум 5000 символов с учетом пробелов</small>
                        <p>Тематическая статья в которой ссылки индексируются. Можно использовать как рекламную
                            площадку.</p>
                    </div>
                </div>
                <div class="site-item">
                    <div>
                        <label>Домен:</label>
                        <p>www.pochinika35.ru</p>
                    </div>
                    <div>
                        <label>Название сайта:</label>
                        <p>Супер сайт</p>
                    </div>
                    <div>
                        <label>Описание:</label>
                        <p>Это описание супер сайта</p>
                    </div>
                    <div>
                        <label>Логотип:</label>
                        <img alt="" title="" src="upload/images/company/logo.png">
                    </div>
                    <div>
                        <label>Адрес:</label>
                        <small>Со страницы контакты</small>
                        <p>Россия, Вологда, 160000, ул. Путейская 4а, кв.27</p>
                    </div>
                    <div>
                        <label>Статья:</label>
                        <small>Максимум 5000 символов с учетом пробелов</small>
                        <p>Тематическая статья в которой ссылки индексируются. Можно использовать как рекламную
                            площадку.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
