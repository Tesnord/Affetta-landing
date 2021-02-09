<?
//sendApiAmo("ivan", "sds@sdf", "333", "новая", "http://conceptico.store");
function sendApiAmo($name, $subject, $phone, $about, $page, $utm)
{
    //ПРЕДОПРЕДЕЛЯЕМЫЕ ПЕРЕМЕННЫЕ
    $status_id = '22378423'; //id Статус сделки (воронка)
    $nameTema = $subject;
    $nameKlienta = $name;
    $Klientphone = $phone;
    $Oproject = $about;
    $pageZayavki = $page; //страница заявки


    ///////////////////////////////////////////
    /////////////АВТОРИЗАЦИЯ///////////////////
    //////////////////////////////////////////
    $subdomain = 'affettaru';
    $responsible_user_id = '199676';///id менеджера

    $user = array(
        'USER_LOGIN' => 'design@affetta.ru ', #Ваш логин (электронная почта)
        'USER_HASH' => 'e6b1f815a8f952c5a5dd31304dad291cf44671c8' #Хэш для доступа к API (смотрите в профиле пользователя)
    );
    #Формируем ссылку для запроса
    $link = 'https://' . $subdomain . '.amocrm.ru/private/api/auth.php?type=json';
    $curl = curl_init(); #Сохраняем дескриптор сеанса cURL
    #Устанавливаем необходимые опции для сеанса cURL
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
    curl_setopt($curl, CURLOPT_URL, $link);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($user));
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
    curl_setopt($curl, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    $out = curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
    $code = curl_getinfo($curl, CURLINFO_HTTP_CODE); #Получим HTTP-код ответа сервера
    curl_close($curl);  #Завершаем сеанс cURL
    $Response = json_decode($out, true);
    //echo '<b>Авторизация:</b>'; echo '<pre>'; print_r($Response); echo '</pre>';


    ///////////////////////////////////////////
    ////////////ДОБАВЛЕНИЕ СДЕЛКИ//////////////
    //////////////////////////////////////////
    $data = array(
        'add' =>
            array(
                0 =>
                    array(
                        'name' => $nameTema,// Название сделки
                        'status_id' => $status_id,//id Статус сделки
                        'responsible_user_id' => $responsible_user_id,////ответственный за сдеку. id менеджера
                        'created_at' => time(),//дата создания сделки
                        'custom_fields' =>
                            array(
                                0 =>
                                    array(
                                        'id' => '1299557', // Источник
                                        'values' =>
                                            array(
                                                0 =>
                                                    array(
                                                        'value' => 'Сайт',
                                                    ),
                                            ),
                                    ),
                                1 =>
                                    array(
                                        'id' => '1307247',
                                        'values' =>
                                            array(
                                                0 =>
                                                    array(
                                                        'value' => $Oproject,
                                                        'enum' => 'TEXTAREA',
                                                    ),
                                            ),
                                    ),
                            ),
                    ),
            ),
    );
    $link = "https://" . $subdomain . ".amocrm.ru/api/v2/leads";

    $headers[] = "Accept: application/json";

    //Curl options
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_USERAGENT, "amoCRM-API-client-undefined/2.0");
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_URL, $link);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__) . "/cookie.txt");
    curl_setopt($curl, CURLOPT_COOKIEJAR, dirname(__FILE__) . "/cookie.txt");
    $out = curl_exec($curl);
    curl_close($curl);
    $result = json_decode($out, TRUE);
    //echo $result["_embedded"]["items"][0]["id"];

    ///////////////////////////////////////////
    ////////////ДОБАВЛЕНИЕ КОНТАКТА///////////
    //////////////////////////////////////////
    $data = array(
        'add' =>
            array(
                0 =>
                    array(
                        'name' => $nameKlienta,///имя
                        'responsible_user_id' => $responsible_user_id,////ответственный за сделку. id менеджера
                        'leads_id' =>
                            array(
                                0 => $result["_embedded"]["items"][0]["id"],///id сделки
                            ),
                        'custom_fields' =>
                            array(
                                0 =>
                                    array(
                                        'id' => '863486',
                                        'values' =>
                                            array(
                                                0 =>
                                                    array(
                                                        'value' => $Klientphone,
                                                        'enum' => 'MOB',
                                                    ),
                                            ),
                                    ),
                                1 =>
                                    array(
                                        'id' => '1299557',
                                        'values' =>
                                            array(
                                                0 =>
                                                    array(
                                                        'value' => $nameKlienta,
                                                        'enum' => 'WORK',
                                                    ),
                                            ),
                                    ),
                            ),
                    ),
            ),
    );
    $link = "https://" . $subdomain . ".amocrm.ru/api/v2/contacts";

    $headers[] = "Accept: application/json";

    //Curl options
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_USERAGENT, "amoCRM-API-client-undefined/2.0");
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_URL, $link);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__) . "/cookie.txt");
    curl_setopt($curl, CURLOPT_COOKIEJAR, dirname(__FILE__) . "/cookie.txt");
    $out = curl_exec($curl);
    curl_close($curl);
    $result = json_decode($out, TRUE);
}

?>