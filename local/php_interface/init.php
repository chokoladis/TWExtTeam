<?

AddEventHandler("iblock", "OnStartIBlockElementUpdate", "StartUpdateNews");

function StartUpdateNews(&$arFields){

    global $USER;
    
    if ($arFields["IBLOCK_ID"] == '1'){

        $file = 'arResult.php';

        $res = CIBlockElement::GetProperty( $arFields["IBLOCK_ID"], $arFields["ID"] );
        if ($ob = $res->GetNext())
        {
            if ($ob["CODE"] == 'OLD_NAME'){
                if ($ob["VALUE"] == '' ){

                    $arFields["PROPERTY_VALUES"][1][2]["VALUE"] = $arFields["NAME"];
                } 
            }
        }
        
        // $log = date('Y-m-d H:i:s') . ' Запись в лог\n\n';
        // $log .= ' '.' ------ ';
        // $log .= print_r($arFields, true);
        
        // file_put_contents(__DIR__.'/arResult.php', $log . PHP_EOL, FILE_APPEND);

        return $arFields;

    }

}

AddEventHandler("iblock", "OnBeforeIBlockElementUpdate", "BeforeUpdateNews");

function BeforeUpdateNews(&$arFields){

    global $USER;
    
    if ($arFields["IBLOCK_ID"] == '1'){

        $file = 'arResult.php';

        $res = CIBlockElement::GetProperty( $arFields["IBLOCK_ID"], $arFields["ID"] );
        if ($ob = $res->GetNext())
        {
            if ($ob["CODE"] == 'OLD_NAME' && $ob["VALUE"] != $arFields["NAME"]){

                $NAME = $arFields["NAME"];
                $AUTHOR = $USER->GetLogin();
        
                $rsSites = CSite::GetByID("s1");
                $arSite = $rsSites->Fetch();
                $site_name = $arSite["NAME"];
                $old_name = $arFields["PROPERTY_VALUES"][1][2]["VALUE"];
            
                CEvent::Send(
                    "CHANGE_NEWS_NAME",
                    's1',
                    array(
                        "SITE_NAME" => $site_name,
                        "SERVER_NAME" => SITE_SERVER_NAME,
                        "AUTHOR" => $AUTHOR,
                        "NEWS_CODE" => $arFields["CODE"],
                        "NEWS_NAME" => $arFields["NAME"],
                        "NEWS_NAME_OLD" => $old_name
                    ),
                );

                $arFields["PROPERTY_VALUES"][1][2]["VALUE"] = $arFields["NAME"];
            } 
        }
    
      
    }

    return $arFields;
}