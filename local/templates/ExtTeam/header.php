
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <?$APPLICATION->ShowHead();?>
    <?php
        use Bitrix\Main\Page\Asset; 

        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/bootstrap.min.css'); 
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style.css'); 
    ?>
    <title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
    <?$APPLICATION->ShowPanel()?>