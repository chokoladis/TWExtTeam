<?
AddEventHandler("iblock", "OnBeforeIBlockElementUpdate", "UpdateNewsName");

function UpdateNewsName($arFields){

    $NAME = $arFields["NAME"];

    mail(
        $NAME
    );

    CEvent::Send(
        string event,
        mixed lid,
        array fields,
        string duplicate="Y",
        int message_id="",
        array files,
        string language_id
    );


}