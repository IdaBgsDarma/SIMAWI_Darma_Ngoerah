<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Icd10_model extends CI_Model {

    private $auth_url = "https://icdaccessmanagement.who.int/connect/token"; // WHO OAuth2 Token URL
    private $api_url = "https://id.who.int/icd";
    private $client_id = "e0f18c7c-f2da-47c4-bfea-21d52752ca20_d754bec3-1519-4229-8f65-9a7170a4778a";
    private $client_secret = "vUgX09iUU3xxVuCG0BVWzcVJ8LSVyTDLN6CYO9Aeoas=";
    private $grant_type = "client_credentials"; // OAuth2 grant type
    private $scope = "icdapi-access"; // WHO ICD API Scope

    public function get_token() {
        $headers = [
            "Content-Type: application/x-www-form-urlencoded"
        ];
    
        $post_fields = http_build_query([
            'client_id' => $this->client_id,
            'client_secret' => $this->client_secret,
            'grant_type' => "client_credentials",
            // 'scope' => "icdapi-access" // Correct scope
        ]);
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://icdaccessmanagement.who.int/connect/token");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
        $response = curl_exec($ch);
        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curl_error = curl_error($ch);
        curl_close($ch);
    
        if ($curl_error) {
            return "cURL Error: " . $curl_error;
        } elseif ($http_status == 200) {
            $data = json_decode($response, true);
            return $data['access_token']; // Return the token
        } else {
            return "Error: HTTP Status $http_status - Response: " . $response;
        }
    }
    

    public function search_icd10($query) {
        header('Content-Type: application/json'); // Set response header
    
        $token = $this->get_token();
        if (strpos($token, "Error") !== false) {
            echo json_encode(["error" => $token]);
            exit();
        }
    
        $headers = array(
            "Accept: application/json",
            "Authorization: Bearer " . $token,
            "API-Version: v2",
            "Accept-Language: en"
        );
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url . "/release/10/" . urlencode($query));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
        $response = curl_exec($ch);
        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curl_error = curl_error($ch);
        curl_close($ch);
    
        if ($curl_error) {
            echo json_encode(["error" => "cURL Error: " . $curl_error]);
            exit();
        } 
    
        if ($http_status == 200) {
            echo $response; // API already returns JSON, so no need to encode again
            exit();
        } 
    
        echo json_encode(["error" => "HTTP Status $http_status", "response" => $response]);
        exit();
    }
    
}
