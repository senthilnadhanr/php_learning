<?php

$ch = curl_init('http://ac.senthilnadhan.com/login.php');

//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//curl_setopt($ch, CURLOPT_POSTFIELDS, []);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
var_dump($response);
exit;
function get($endPoint, $inputObject)
{
    try {
        $data = json_encode($inputObject);

        /*$data = [];
        foreach ($inputObject as $index => $input) {
            $data[] = $index . '=' . $input;
        }
        $data = implode('&', $data);
        $endPoint = $endPoint . '?' . $data;*/

        $ch = curl_init($endPoint);
        //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data),
                'sessionId: ' . $inputObject['sessionId']
            )
        );
        $response = curl_exec($ch);
        if ($response === false) {
            $result['status'] = 'FAILED';
            $result['message'] = 'Unknown';
            $result['result'] = null;
            if ($errno = curl_errno($ch)) {
                $error_message = curl_strerror($errno);
                $result['message'] = $error_message;
            }
        } else {
            $result['status'] = 'SUCCESSFUL';
            $result['message'] = 'success';
            $result['result'] = json_decode($response);
        }
    } catch (\Exception $e) {
        $result['message'] = $e->getMessage();
    }
    return $result;
}

function post($endPoint, $inputObject)
{
    $result['status'] = 'FAILED';
    try {

        $data = json_encode($inputObject);
        $ch = curl_init($endPoint);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data),
                'sessionId: ' . (isset($inputObject['sessionId']) ? $inputObject['sessionId'] : null)
            )
        );
        $response = curl_exec($ch);
        if ($response === false) {
            $result['status'] = 'FAILED';
            $result['message'] = 'Unknown';
            $result['result'] = null;
            if ($errno = curl_errno($ch)) {
                $error_message = curl_strerror($errno);
                $result['message'] = $error_message;
            }
        } else {
            $result['status'] = 'SUCCESSFUL';
            $result['message'] = 'success';
            $result['result'] = json_decode($response);
        }
        curl_close($ch);

    } catch (\Exception $e) {
        $result['message'] = $e->getMessage();
    }
    return $result;
}