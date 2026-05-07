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

<div class="tabs otz-tabs" data-tabs>
	<ul class="tabs__pane" data-tabs-nav>
		<li class="active">Отзывы</li>
		<li>Видео отзывы</li>
	</ul>

	<a href="#rev-otz" class="green-btn">Оставить отзыв</a>

	<div class="tab__panels" data-tabs-list>
		<div class="tab__element active">
			<? foreach ($arResult["ITEMS"] as $arItem) : ?>
				<?
				if (!empty($arItem["DISPLAY_PROPERTIES"]["VIDEO_URL"]["VALUE"]))
					continue;

				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

				$dateActive = CIBlockFormatProperties::DateFormat(
					'd.m.Y H:i',
					MakeTimeStamp(
						$arItem["ACTIVE_FROM"],
						CSite::GetDateFormat()
					)
				);
				?>
				<div class="rew-block" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
					<div class="info">
						<img class="ava" src="<? echo $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" alt="">
						<div class="fio">
							<p class="name-user"><? echo $arItem["NAME"]; ?></p>
							<p class="data-user"><? echo $dateActive; ?></p>
						</div>
					</div>
					<div class="txt">
						<? echo $arItem["PREVIEW_TEXT"]; ?>
					</div>
				</div>
			<? endforeach; ?>
		</div>

		<!-- --------------------------------------- -->
		<div class="tab__element">
			<div class="rew-block-video">
				<? foreach ($arResult["ITEMS"] as $arItem) : ?>
					<?
					if (empty($arItem["DISPLAY_PROPERTIES"]["VIDEO_URL"]["VALUE"]))
						continue;

					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

					$dateActive = CIBlockFormatProperties::DateFormat(
						'd.m.Y H:i',
						MakeTimeStamp(
							$arItem["ACTIVE_FROM"],
							CSite::GetDateFormat()
						)
					);
					?>
					<div class="block-video" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
						<div class="img">
							<img src="<? echo $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" alt="">
							<a href="<?= $arItem["DISPLAY_PROPERTIES"]["VIDEO_URL"]["VALUE"]; ?>" class="btn-video js-open-modal" data-modal="3">
								<svg width="64" height="68" viewBox="0 0 64 68" fill="none">
									<g filter="url(#filter0_b_246_2479)">
										<path d="M21.9899 2.78707C28.1831 -0.793337 35.8169 -0.793339 42.0101 2.78707L54.0101 9.72456C60.1924 13.2987 64 19.8981 64 27.0393V40.9607C64 48.1019 60.1924 54.7013 54.0101 58.2754L42.0101 65.2129C35.8169 68.7933 28.1831 68.7933 21.9899 65.2129L9.98995 58.2754C3.80759 54.7013 0 48.1019 0 40.9607V27.0393C0 19.8981 3.80759 13.2987 9.98994 9.72457L21.9899 2.78707Z" fill="#39AB52" fill-opacity="0.6" />
									</g>
									<g clip-path="url(#clip0_246_2479)">
										<path d="M32 47C18.8267 47 16 45.88 16 34C16 22.12 18.8267 21 32 21C45.1733 21 48 22.12 48 34C48 45.88 45.1733 47 32 47ZM32 23C19.1777 23 18 23.9253 18 34C18 44.0747 19.1777 45 32 45C44.8223 45 46 44.0747 46 34C46 23.9253 44.8223 23 32 23ZM29 41C28.8383 41 28.6757 40.961 28.5283 40.882C28.203 40.7077 28 40.3687 28 40V28C28 27.6313 28.203 27.2923 28.5283 27.118C28.852 26.9437 29.2467 26.9627 29.5547 27.1677L38.5547 33.1677C38.833 33.3537 39 33.6657 39 34C39 34.3343 38.833 34.6463 38.5547 34.832L29.5547 40.832C29.3873 40.9433 29.194 41 29 41ZM30 29.8687V38.1313L36.1973 34L30 29.8687Z" fill="#FFD130" />
									</g>
									<defs>
										<filter id="filter0_b_246_2479" x="-10" y="-9.89825" width="84" height="87.7965" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
											<feFlood flood-opacity="0" result="BackgroundImageFix" />
											<feGaussianBlur in="BackgroundImageFix" stdDeviation="5" />
											<feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_246_2479" />
											<feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_246_2479" result="shape" />
										</filter>
										<clipPath id="clip0_246_2479">
											<rect width="32" height="26" fill="white" transform="translate(16 21)" />
										</clipPath>
									</defs>
								</svg>
							</a>
						</div>
						<p class="name"><? echo $arItem["NAME"]; ?></p>
						<p class="text-video"><? echo $arItem["PREVIEW_TEXT"]; ?></p>
					</div>
				<? endforeach; ?>
			</div>
		</div>
	</div>
</div>

<h2>Оставить отзыв</h2>

<form id="rev-otz" class="rew-back" action="#">
	<?= bitrix_sessid_post() ?>
	<div class="block">
		<input type="name" placeholder="Ваше имя">
		<input type="tel" placeholder="Ваш телефон">
		<input type="mail" placeholder="Ваша почта">
		<textarea placeholder="Текст отзыва" name="comment" cols="30" rows="6"></textarea>
		<div class="btn-file" data-file>
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
		<button class="submit green-btn" type="submit">ОСТАВИТЬ ОТЗЫВ</button>
	</div>
</form>