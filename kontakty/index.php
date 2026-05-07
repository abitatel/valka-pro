<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<section>
	<div class="max">
		<h1 class="pages"><?$APPLICATION->ShowTitle(false)?></h1>

		<div class="contakts">
			<div class="block">
				<img src="/local/assets/img/svg/adres.svg" alt="">
				<div class="cont">
					<p class="zag">Как нас найти</p>
					<p class="txt">г.Санкт-Петербург, ул. Удельный проспект, д. 29, офис 15, индекс: 194214</p>
				</div>
			</div>
			<div class="block">
				<img src="/local/assets/img/svg/time.svg" alt="">
				<div class="cont">
					<p class="zag">График работы</p>
					<p class="txt">Пн.-Вс.: с 9:00 до 21:00</p>
				</div>
			</div>
			<div class="block">
				<img src="/local/assets/img/svg/mail.svg" alt="">
				<div class="cont">
					<p class="zag">Написать нам</p>
					<a href="mailto:9962070@mail.ru">9962070@mail.ru</a>
				</div>
			</div>
			<div class="block">
				<img src="/local/assets/img/svg/phonew.svg" alt="">
				<div class="cont">
					<p class="zag">Наш телефон</p>
					<a href="tel:+78129054750">+7 (812) 905-47-50 (офис)</a>
					<a href="+79052893257">+7 (905) 289-32-57</a>
				</div>
			</div>
		</div>

		<div class="maps">
			<img src="/local/assets/img/pages/maps.png" alt="">
		</div>

		<h2 class="mini">Наши реквизиты</h2>
		<div class="rekv">
			<div class="block">
				<p class="rekw-txt">
					<span>ИНН</span>
					<span>470314426490</span>
				</p>
				<p class="rekw-txt">
					<span>КПП</span>
					<span>314470308500021</span>
				</p>
				<p class="rekw-txt">
					<span>Банк</span>
					<span>ПАО "БАНК СБЕРБАНК"</span>
				</p>
				<p class="rekw-txt">
					<span>Расч/счет</span>
					<span>40802810155410000861</span>
				</p>
				<p class="rekw-txt">
					<span>Корр/счет</span>
					<span>30101810500000000653</span>
				</p>
				<p class="rekw-txt">
					<span>БИК</span>
					<span>044030653</span>
				</p>
				<p class="rekw-txt">
					<span>Телефон</span>
					<span>996-20-70</span>
				</p>
			</div>
			<div class="block">
				<p class="name">
					<img src="/local/assets/img/svg/security.svg" alt="">
					<span>ИП Вартанянц С.В.</span>
				</p>
				<p class="adres-name">Адрес</p>
				<p class="txt">188656, Л.О. д. Васкелово, Карасаровское шоссе д.6 кв 21.</p>
			</div>
		</div>

	</div>
</section>

<div class="fon-bottom rew"></div>

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/feedback.php"
	)
);?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>