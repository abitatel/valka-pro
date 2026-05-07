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
<section class="block-7">
	<div class="max">
		<div class="zag-btn">
			<h2>Отзывы</h2>
			<a href="/otzyvy/" class="btn-white">
				<span>Все отзывы</span>
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M13.1956 7.29856C13.5826 6.90453 14.2158 6.89883 14.6098 7.28582L18.7007 11.2858C18.8922 11.4738 19 11.7309 19 11.9993C19 12.2676 18.8922 12.5247 18.7007 12.7127L14.6098 16.7127C14.2158 17.0997 13.5826 17.094 13.1956 16.7C12.8087 16.3059 12.8144 15.6728 13.2084 15.2858L15.5547 12.9993L6 12.9993C5.44772 12.9993 5 12.5516 5 11.9993C5 11.447 5.44772 10.9993 6 10.9993L15.5547 10.9993L13.2084 8.71272C12.8144 8.32573 12.8087 7.69259 13.1956 7.29856Z" fill="#707070"></path>
				</svg>
			</a>
		</div>

		<div class="slider">
			<div class="swiper otz">
				<div class="swiper-wrapper">
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
						<div class="swiper-slide" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
							<div class="block">
								<div class="img">
									<img src="<? echo $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" alt="">
									<a href="<?= $arItem["DISPLAY_PROPERTIES"]["VIDEO_URL"]["VALUE"]; ?>" class="btn-video js-open-modal" data-modal="2">
										<svg width="64" height="68" viewBox="0 0 64 68" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g filter="url(#filter0_b_135_113)">
												<path d="M21.9899 2.78707C28.1831 -0.793337 35.8169 -0.793339 42.0101 2.78707L54.0101 9.72456C60.1924 13.2987 64 19.8981 64 27.0393V40.9607C64 48.1019 60.1924 54.7013 54.0101 58.2754L42.0101 65.2129C35.8169 68.7933 28.1831 68.7933 21.9899 65.2129L9.98995 58.2754C3.80759 54.7013 0 48.1019 0 40.9607V27.0393C0 19.8981 3.80759 13.2987 9.98994 9.72457L21.9899 2.78707Z" fill="#39AB52" fill-opacity="0.6" />
											</g>
											<g clip-path="url(#clip0_135_113)">
												<path d="M32 47C18.8267 47 16 45.88 16 34C16 22.12 18.8267 21 32 21C45.1733 21 48 22.12 48 34C48 45.88 45.1733 47 32 47ZM32 23C19.1777 23 18 23.9253 18 34C18 44.0747 19.1777 45 32 45C44.8223 45 46 44.0747 46 34C46 23.9253 44.8223 23 32 23ZM29 41C28.8383 41 28.6757 40.961 28.5283 40.882C28.203 40.7077 28 40.3687 28 40V28C28 27.6313 28.203 27.2923 28.5283 27.118C28.852 26.9437 29.2467 26.9627 29.5547 27.1677L38.5547 33.1677C38.833 33.3537 39 33.6657 39 34C39 34.3343 38.833 34.6463 38.5547 34.832L29.5547 40.832C29.3873 40.9433 29.194 41 29 41ZM30 29.8687V38.1313L36.1973 34L30 29.8687Z" fill="#FFD130" />
											</g>
											<defs>
												<filter id="filter0_b_135_113" x="-10" y="-9.89844" width="84" height="87.7969" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
													<feFlood flood-opacity="0" result="BackgroundImageFix" />
													<feGaussianBlur in="BackgroundImageFix" stdDeviation="5" />
													<feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_135_113" />
													<feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_135_113" result="shape" />
												</filter>
												<clipPath id="clip0_135_113">
													<rect width="32" height="26" fill="white" transform="translate(16 21)" />
												</clipPath>
											</defs>
										</svg>
									</a>
								</div>
								<div class="cont">
									<p class="name"><? echo $arItem["NAME"]; ?></p>
									<p class="txt"><? echo $arItem["PREVIEW_TEXT"]; ?></p>
								</div>
							</div>
						</div>
					<? endforeach; ?>
				</div>
			</div>
			<div class="navigate">
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
			</di>
		</div>
	</div>
</section>