<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?>
<main>
	<div class="container">
        <?
            $APPLICATION->IncludeComponent("bitrix:news", "bootstrap_v4", array(
                "IBLOCK_TYPE" => "news",
                "IBLOCK_ID" => "1",
                "NEWS_COUNT" => "20",
                "USE_FILTER" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "CHECK_DATES" => "Y",
                "SEF_MODE" => "Y",
                "SEF_FOLDER" => "/news/",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_SHADOW" => "Y",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "N",
                "SET_TITLE" => "Y",
                "SET_STATUS_404" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "USE_PERMISSIONS" => "N",
                "PREVIEW_TRUNCATE_LEN" => "",
                "LIST_ACTIVE_DATE_FORMAT" => "j F Y",
                "LIST_FIELD_CODE" => array(
                    0 => "",
                ),
                "LIST_PROPERTY_CODE" => array(
                    0 => "FORUM_MESSAGE_CNT",
                    1 => "",
                ),
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "DISPLAY_NAME" => "N",
                "META_KEYWORDS" => "-",
                "META_DESCRIPTION" => "-",
                "BROWSER_TITLE" => "NAME",
                "DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
                "DETAIL_FIELD_CODE" => array(
                    0 => "PREVIEW_PICTURE",
                    1 => "",
                ),
                "DETAIL_PROPERTY_CODE" => array(
                    0 => "LINK_SOURCE",
                    1 => "THEME",
                    2 => "",
                ),
                "DETAIL_DISPLAY_TOP_PAGER" => "N",
                "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
                "DETAIL_PAGER_TITLE" => "Страница",
                "DETAIL_PAGER_TEMPLATE" => "",
                "DETAIL_PAGER_SHOW_ALL" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "USE_SHARE" => "Y",
                "DISPLAY_IMG_WIDTH" => "80",
                "DISPLAY_IMG_HEIGHT" => "56",
                "DISPLAY_IMG_MEDIUM_WIDTH" => "136",
                "DISPLAY_IMG_MEDIUM_HEIGHT" => "101",
                "DISPLAY_IMG_DETAIL_WIDTH" => "298",
                "DISPLAY_IMG_DETAIL_HEIGHT" => "221",
                "AJAX_OPTION_ADDITIONAL" => "",
                "SEF_URL_TEMPLATES" => array(
                    "news" => "",
                    "section" => "",
                    "detail" => "#ELEMENT_CODE#/",
                    "search" => "search/",
                )
                ),
                false
            );
        ?>
    </div>
</main>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>