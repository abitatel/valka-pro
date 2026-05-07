<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="max s-bar">
	<div class="left-block">
		<div class="l-menu">
			<?php if ($arResult["ID"] == 40): ?>
				<a href="/uslughi/">Услуги</a>
			<?php endif; ?>

			<?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "menu_top",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => ($arResult["ID"] == 40) ? "services" : "about",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "2",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "Y",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => ($arResult["ID"] == 40) ? "services" : "about",
                    "USE_EXT" => "Y"
                )
            );?>
		</div>

		<div class="btn-soc">
			<a href="#" class="btn-wh">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_702_3417)">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M20.4 3.45C18.15 1.2 15.15 0 12 0C5.4 0 0 5.4 0 12C0 14.1 0.600009 16.2 1.65001 18L0 24L6.30002 22.35C8.10002 23.25 10.05 23.85 12 23.85C18.6 23.85 24 18.45 24 11.85C24 8.7 22.65 5.7 20.4 3.45ZM12 21.9C10.2 21.9 8.40001 21.45 6.90001 20.55L6.59999 20.4L2.84999 21.45L3.90001 17.85L3.59999 17.4C2.54999 15.75 2.09999 13.95 2.09999 12.15C2.09999 6.75 6.6 2.25 12 2.25C14.7 2.25 17.1 3.3 19.05 5.1C21 7.05 21.9 9.45 21.9 12.15C21.9 17.4 17.55 21.9 12 21.9ZM17.4 14.4C17.1 14.25 15.6 13.5 15.3 13.5C15 13.35 14.85 13.35 14.7 13.65C14.55 13.95 13.95 14.55 13.8 14.85C13.65 15 13.5 15 13.2 15C12.9 14.85 12 14.55 10.8 13.5C9.90002 12.75 9.30001 11.7 9.15001 11.4C9.00001 11.1 9.15002 10.95 9.30002 10.8C9.45002 10.65 9.6 10.5 9.75 10.35C9.9 10.2 9.90002 10.05 10.05 9.9C10.2 9.75 10.05 9.6 10.05 9.45C10.05 9.3 9.45001 7.8 9.15001 7.2C9.00001 6.75 8.70002 6.75 8.55002 6.75C8.40002 6.75 8.24998 6.75 7.94998 6.75C7.79998 6.75 7.49998 6.75 7.19998 7.05C6.89998 7.35 6.15001 8.1 6.15001 9.6C6.15001 11.1 7.19999 12.45 7.34999 12.75C7.49999 12.9 9.44998 16.05 12.45 17.25C15 18.3 15.45 18 16.05 18C16.65 18 17.85 17.25 18 16.65C18.3 15.9 18.3 15.3 18.15 15.3C18 14.55 17.7 14.55 17.4 14.4Z" fill="white"></path>
					</g>
					<defs>
						<clipPath id="clip0_702_3417">
							<rect width="24" height="24" fill="white"></rect>
						</clipPath>
					</defs>
				</svg>

				<span>Написать в WhatsApp</span>
			</a>
			<a href="http://vk.com/valka_derevev_spb" class="btn-vk">
				<svg width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M13.0225 15.5C5.16434 15.5 0.683816 9.8795 0.5 0.51201H4.45205C4.57842 7.38151 7.47353 10.2878 9.77123 10.8883V0.51201H13.482V6.43275C15.7453 6.18054 18.1349 3.47838 18.9391 0.5H22.6384C22.3367 2.04175 21.7342 3.50192 20.8684 4.78927C20.0026 6.07662 18.8921 7.16349 17.6064 7.98199C19.0412 8.72853 20.3084 9.78457 21.3243 11.0805C22.3401 12.3763 23.0817 13.8826 23.5 15.5H19.4216C18.5485 12.6537 16.3656 10.444 13.482 10.1437V15.5H13.034H13.0225Z" fill="white"></path>
				</svg>
				<span>Подписаться НА ВК</span>
			</a>
		</div>
	</div>
	<div class="right-block">
		<div class="banner-page" style="background-image: url(/local/assets/img/pages/about.png);">
			<h1 class="p-title"><span><?= $APPLICATION->ShowTitle(false) ?></span></h1>
			
			
			<p class="txt"><?= $arResult["PREVIEW_TEXT"]; ?></p>
		</div>

		<div class="btn-soc mob">
			<a href="#" class="btn-wh">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_702_3417)">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M20.4 3.45C18.15 1.2 15.15 0 12 0C5.4 0 0 5.4 0 12C0 14.1 0.600009 16.2 1.65001 18L0 24L6.30002 22.35C8.10002 23.25 10.05 23.85 12 23.85C18.6 23.85 24 18.45 24 11.85C24 8.7 22.65 5.7 20.4 3.45ZM12 21.9C10.2 21.9 8.40001 21.45 6.90001 20.55L6.59999 20.4L2.84999 21.45L3.90001 17.85L3.59999 17.4C2.54999 15.75 2.09999 13.95 2.09999 12.15C2.09999 6.75 6.6 2.25 12 2.25C14.7 2.25 17.1 3.3 19.05 5.1C21 7.05 21.9 9.45 21.9 12.15C21.9 17.4 17.55 21.9 12 21.9ZM17.4 14.4C17.1 14.25 15.6 13.5 15.3 13.5C15 13.35 14.85 13.35 14.7 13.65C14.55 13.95 13.95 14.55 13.8 14.85C13.65 15 13.5 15 13.2 15C12.9 14.85 12 14.55 10.8 13.5C9.90002 12.75 9.30001 11.7 9.15001 11.4C9.00001 11.1 9.15002 10.95 9.30002 10.8C9.45002 10.65 9.6 10.5 9.75 10.35C9.9 10.2 9.90002 10.05 10.05 9.9C10.2 9.75 10.05 9.6 10.05 9.45C10.05 9.3 9.45001 7.8 9.15001 7.2C9.00001 6.75 8.70002 6.75 8.55002 6.75C8.40002 6.75 8.24998 6.75 7.94998 6.75C7.79998 6.75 7.49998 6.75 7.19998 7.05C6.89998 7.35 6.15001 8.1 6.15001 9.6C6.15001 11.1 7.19999 12.45 7.34999 12.75C7.49999 12.9 9.44998 16.05 12.45 17.25C15 18.3 15.45 18 16.05 18C16.65 18 17.85 17.25 18 16.65C18.3 15.9 18.3 15.3 18.15 15.3C18 14.55 17.7 14.55 17.4 14.4Z" fill="white"></path>
					</g>
					<defs>
						<clipPath id="clip0_702_3417">
							<rect width="24" height="24" fill="white"></rect>
						</clipPath>
					</defs>
				</svg>

				<span>Написать в WhatsApp</span>
			</a>
			<a href="http://vk.com/valka_derevev_spb" class="btn-vk">
				<svg width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M13.0225 15.5C5.16434 15.5 0.683816 9.8795 0.5 0.51201H4.45205C4.57842 7.38151 7.47353 10.2878 9.77123 10.8883V0.51201H13.482V6.43275C15.7453 6.18054 18.1349 3.47838 18.9391 0.5H22.6384C22.3367 2.04175 21.7342 3.50192 20.8684 4.78927C20.0026 6.07662 18.8921 7.16349 17.6064 7.98199C19.0412 8.72853 20.3084 9.78457 21.3243 11.0805C22.3401 12.3763 23.0817 13.8826 23.5 15.5H19.4216C18.5485 12.6537 16.3656 10.444 13.482 10.1437V15.5H13.034H13.0225Z" fill="white"></path>
				</svg>
				<span>Подписаться НА ВК</span>
			</a>
		</div>

		<div class="text-page">
			<?= $arResult["DETAIL_TEXT"]; ?>
		</div>
	</div>
</div>

<div class="fon-bottom rew"></div>

<? $APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/advantages.php"
	)
); ?>

<? $APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/feedback.php"
	)
); ?>