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
<div class="videogal">
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

		<div class="videogal-block" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<img src="<? echo $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" alt="">
			<a href="<?= $arItem["DISPLAY_PROPERTIES"]["VIDEO_URL"]["VALUE"]; ?>" class="btn-video js-open-modal" data-modal="4">
				<svg width="106" height="116" viewBox="0 0 106 116" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g filter="url(#filter0_b_44_288)">
						<path d="M43.0244 2.74066C49.2 -0.813222 56.8 -0.813222 62.9756 2.74066L95.9756 21.7312C102.177 25.3002 106 31.9104 106 39.0658V76.9342C106 84.0896 102.177 90.6998 95.9756 94.2688L62.9756 113.259C56.8 116.813 49.2 116.813 43.0244 113.259L10.0244 94.2688C3.82265 90.6998 0 84.0896 0 76.9342V39.0658C0 31.9104 3.82265 25.3002 10.0244 21.7312L43.0244 2.74066Z" fill="#39AB52" fill-opacity="0.6"></path>
					</g>
					<g clip-path="url(#clip0_44_288)">
						<path d="M53 77C33.24 77 29 75.32 29 57.5C29 39.68 33.24 38 53 38C72.76 38 77 39.68 77 57.5C77 75.32 72.76 77 53 77ZM53 41C33.7665 41 32 42.388 32 57.5C32 72.612 33.7665 74 53 74C72.2335 74 74 72.612 74 57.5C74 42.388 72.2335 41 53 41ZM48.5 68C48.2575 68 48.0135 67.9415 47.7925 67.823C47.3045 67.5615 47 67.053 47 66.5V48.5C47 47.947 47.3045 47.4385 47.7925 47.177C48.278 46.9155 48.87 46.944 49.332 47.2515L62.832 56.2515C63.2495 56.5305 63.5 56.9985 63.5 57.5C63.5 58.0015 63.2495 58.4695 62.832 58.748L49.332 67.748C49.081 67.915 48.791 68 48.5 68ZM50 51.303V63.697L59.296 57.5L50 51.303Z" fill="#FFD130"></path>
					</g>
					<defs>
						<filter id="filter0_b_44_288" x="-10" y="-9.92474" width="126" height="135.849" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
							<feGaussianBlur in="BackgroundImageFix" stdDeviation="5"></feGaussianBlur>
							<feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_44_288"></feComposite>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_44_288" result="shape"></feBlend>
						</filter>
						<clipPath id="clip0_44_288">
							<rect width="48" height="39" fill="white" transform="translate(29 38)"></rect>
						</clipPath>
					</defs>
				</svg>
			</a>
		</div>

	<? endforeach; ?>
</div>