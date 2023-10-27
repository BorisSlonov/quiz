<?php
header("Access-Control-Allow-Origin: *"); // Разрешить доступ с любых источников
header("Access-Control-Allow-Methods: POST, GET, OPTIONS"); // Разрешенные методы запроса
header("Access-Control-Allow-Headers: Content-Type"); // Разрешенные заголовки запроса

// формируем URL, на который будем отправлять запрос в битрикс24
$queryURL = "https://closets.bitrix24.com/rest/461/11lh9std1285l1ww/crm.lead.add.json";

//собираем данные из формы

// Название комнат
$roomName1 = htmlspecialchars($_POST["roomName1"]);
$roomName2 = htmlspecialchars($_POST["roomName2"]);
$roomName3 = htmlspecialchars($_POST["roomName3"]);
$roomName4 = htmlspecialchars($_POST["roomName4"]);

// Тип шкафа
$q1_1 = htmlspecialchars($_POST["q1_1"]);
$q1_2 = htmlspecialchars($_POST["q1_2"]);
$q1_3 = htmlspecialchars($_POST["q1_3"]);
$q1_4 = htmlspecialchars($_POST["q1_4"]);

// Размеры
$bottomInputs__input_a_1 = htmlspecialchars($_POST["bottomInputs__input_a_1"]);
$bottomInputs__input_b_1 = htmlspecialchars($_POST["bottomInputs__input_b_1"]);
$bottomInputs__input_c_1 = htmlspecialchars($_POST["bottomInputs__input_c_1"]);
$bottomInputs__input_d_1 = htmlspecialchars($_POST["bottomInputs__input_d_1"]);

$bottomInputs__input_a_2 = htmlspecialchars($_POST["bottomInputs__input_a_2"]);
$bottomInputs__input_b_2 = htmlspecialchars($_POST["bottomInputs__input_b_2"]);
$bottomInputs__input_c_2 = htmlspecialchars($_POST["bottomInputs__input_c_2"]);
$bottomInputs__input_d_2 = htmlspecialchars($_POST["bottomInputs__input_d_2"]);

$bottomInputs__input_a_3 = htmlspecialchars($_POST["bottomInputs__input_a_3"]);
$bottomInputs__input_b_3 = htmlspecialchars($_POST["bottomInputs__input_b_3"]);
$bottomInputs__input_c_3 = htmlspecialchars($_POST["bottomInputs__input_c_3"]);
$bottomInputs__input_d_3 = htmlspecialchars($_POST["bottomInputs__input_d_3"]);

$bottomInputs__input_a_4 = htmlspecialchars($_POST["bottomInputs__input_a_4"]);
$bottomInputs__input_b_4 = htmlspecialchars($_POST["bottomInputs__input_b_4"]);
$bottomInputs__input_c_4 = htmlspecialchars($_POST["bottomInputs__input_c_4"]);
$bottomInputs__input_d_4 = htmlspecialchars($_POST["bottomInputs__input_d_4"]);

// Дополнительно
$laundryBasket_1 = htmlspecialchars($_POST["laundryBasket_1"]);
$jewelryOrganizer_1 = htmlspecialchars($_POST["jewelryOrganizer_1"]);
$shoesRack_1 = htmlspecialchars($_POST["shoesRack_1"]);
$buildInLights_1 = htmlspecialchars($_POST["buildInLights_1"]);
$hanger_1 = htmlspecialchars($_POST["hanger_1"]);
$pantsRack_1 = htmlspecialchars($_POST["pantsRack_1"]);
$Drawers_1 = htmlspecialchars($_POST["Drawers_1"]);

$laundryBasket_2 = htmlspecialchars($_POST["laundryBasket_2"]);
$jewelryOrganizer_2 = htmlspecialchars($_POST["jewelryOrganizer_2"]);
$shoesRack_2 = htmlspecialchars($_POST["shoesRack_2"]);
$buildInLights_2 = htmlspecialchars($_POST["buildInLights_2"]);
$hanger_2 = htmlspecialchars($_POST["hanger_2"]);
$pantsRack_2 = htmlspecialchars($_POST["pantsRack_2"]);
$Drawers_2 = htmlspecialchars($_POST["Drawers_2"]);

$laundryBasket_3 = htmlspecialchars($_POST["laundryBasket_3"]);
$jewelryOrganizer_3 = htmlspecialchars($_POST["jewelryOrganizer_3"]);
$shoesRack_3 = htmlspecialchars($_POST["shoesRack_3"]);
$buildInLights_3 = htmlspecialchars($_POST["buildInLights_3"]);
$hanger_3 = htmlspecialchars($_POST["hanger_3"]);
$pantsRack_3 = htmlspecialchars($_POST["pantsRack_3"]);
$Drawers_3 = htmlspecialchars($_POST["Drawers_3"]);

$laundryBasket_4 = htmlspecialchars($_POST["laundryBasket_4"]);
$jewelryOrganizer_4 = htmlspecialchars($_POST["jewelryOrganizer_4"]);
$shoesRack_4 = htmlspecialchars($_POST["shoesRack_4"]);
$buildInLights_4 = htmlspecialchars($_POST["buildInLights_4"]);
$hanger_4 = htmlspecialchars($_POST["hanger_4"]);
$pantsRack_4 = htmlspecialchars($_POST["pantsRack_4"]);
$Drawers_4 = htmlspecialchars($_POST["Drawers_4"]);

// Форма
$sPhone = htmlspecialchars($_POST["PHONE"]);
$sName = htmlspecialchars($_POST["NAME"]);
$arPhone = (!empty($sPhone)) ? array(array('VALUE' => $sPhone, 'VALUE_TYPE' => 'MOBILE')) : array();
$email = htmlspecialchars($_POST["EMAIL"]);
$postCode = htmlspecialchars($_POST["postCode"]);
$comment = htmlspecialchars($_POST["comment"]);


// формируем параметры для создания сделки	
$fields = array(
    "TITLE" => $sName,
    "roomName1" => $roomName1,
    "roomName2" => $roomName2,
    "roomName3" => $roomName3,
    "roomName4" => $roomName4,
    "q1_1" => $q1_1,
    "q1_2" => $q1_2,
    "q1_3" => $q1_3,
    "q1_4" => $q1_4,
    "bottomInputs__input_a_1" => $bottomInputs__input_a_1,
    "bottomInputs__input_b_1" => $bottomInputs__input_b_1,
    "bottomInputs__input_c_1" => $bottomInputs__input_c_1,
    "bottomInputs__input_d_1" => $bottomInputs__input_d_1,
    "bottomInputs__input_a_2" => $bottomInputs__input_a_2,
    "bottomInputs__input_b_2" => $bottomInputs__input_b_2,
    "bottomInputs__input_c_2" => $bottomInputs__input_c_2,
    "bottomInputs__input_d_2" => $bottomInputs__input_d_2,
    "bottomInputs__input_a_3" => $bottomInputs__input_a_3,
    "bottomInputs__input_b_3" => $bottomInputs__input_b_3,
    "bottomInputs__input_c_3" => $bottomInputs__input_c_3,
    "bottomInputs__input_d_3" => $bottomInputs__input_d_3,
    "bottomInputs__input_a_4" => $bottomInputs__input_a_4,
    "bottomInputs__input_b_4" => $bottomInputs__input_b_4,
    "bottomInputs__input_c_4" => $bottomInputs__input_c_4,
    "bottomInputs__input_d_4" => $bottomInputs__input_d_4,
    "laundryBasket_1" => $laundryBasket_1,
    "jewelryOrganizer_1" => $jewelryOrganizer_1,
    "shoesRack_1" => $shoesRack_1,
    "buildInLights_1" => $buildInLights_1,
    "hanger_1" => $hanger_1,
    "pantsRack_1" => $pantsRack_1,
    "Drawers_1" => $Drawers_1,
    "laundryBasket_2" => $laundryBasket_2,
    "jewelryOrganizer_2" => $jewelryOrganizer_2,
    "shoesRack_2" => $shoesRack_2,
    "buildInLights_2" => $buildInLights_2,
    "hanger_2" => $hanger_2,
    "pantsRack_2" => $pantsRack_2,
    "Drawers_2" => $Drawers_2,
    "laundryBasket_3" => $laundryBasket_3,
    "jewelryOrganizer_3" => $jewelryOrganizer_3,
    "shoesRack_3" => $shoesRack_3,
    "buildInLights_3" => $buildInLights_3,
    "hanger_3" => $hanger_3,
    "pantsRack_3" => $pantsRack_3,
    "Drawers_3" => $Drawers_3,
    "laundryBasket_4" => $laundryBasket_4,
    "jewelryOrganizer_4" => $jewelryOrganizer_4,
    "shoesRack_4" => $shoesRack_4,
    "buildInLights_4" => $buildInLights_4,
    "hanger_4" => $hanger_4,
    "pantsRack_4" => $pantsRack_4,
    "Drawers_4" => $Drawers_4,
    "NAME" => $sName,
    "EMAIL" => $email,
    "PHONE" => $arPhone,
    "POSTAL_CODE" => $postCode,
    "comment" => $comment,
    "SOURCE_ID" => 'Квиз форма'
);

$queryData = http_build_query(array(
    'fields' => $fields,
    'params' => array("REGISTER_SONET_EVENT" => "Y")
));

// отправляем запрос в Б24 и обрабатываем ответ
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_POST => 1,
    CURLOPT_HEADER => 0,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $queryURL,
    CURLOPT_POSTFIELDS => $queryData,
));

$result = curl_exec($curl);
curl_close($curl);
$result = json_decode($result, 1);

var_dump($dealDataJSON);

var_dump($queryData);

var_dump($result);


// если произошла какая-то ошибка - выведем её
if (array_key_exists('error', $result)) {
    die("Ошибка при сохранении сделки: " . $result['error_description']);
}
