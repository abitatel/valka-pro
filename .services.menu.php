<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
if(CModule::IncludeModule("iblock")) {
   $arFilter = array('IBLOCK_ID' => 3); 
   $arSelect = array('IBLOCK_ID', 'ID', 'NAME', 'SECTION_PAGE_URL');
   $rsSect = CIBlockSection::GetList(
      Array("SORT"=>"ASC"),
      $arFilter,
      false,
      $arSelect
   );

   while($arFields = $rsSect->GetNext()){
      $aMenuLinksExt[] = Array(
         $arFields['NAME'],
         '/' . $arFields['CODE'] . '/',
         Array(),
         Array(),
         ""
      );
   }
}

$aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks);

