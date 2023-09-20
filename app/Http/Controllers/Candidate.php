<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Candidate extends Controller
{
    
    var $ZOHORECRUIT;

    function __construct()
    {   //load config
        $this->ZOHORECRUIT = config('zoho.zohoRecruitApiKeys');
    }

    function home(){
        $data = array();
        $data["pageTitle"] = "Home";
        
        $dpath =  storage_path('accessTokens/');
        $fname = "ZOHO_REC_AT.txt";
        $fpath = $dpath.$fname;
        $accessToken = fileRead($fpath);

        $data["accessToken"] = $accessToken;

        return view("zatpatjobs_home", $data);
    }

    function getJobs(Request $request){
        
        $accessToken = $request->input("accessToken");

        $result = $this->getJobsApi($accessToken);
        if(array_key_exists("code",$result) && strtolower($result["code"]) == "invalid_token"){
            //renew access token
            $tokenResult = $this->generateAccessToken();
            if($tokenResult["C"] == 100){
                $accessToken = $tokenResult["R"]["access_token"];
                $result = $this->getJobsApi($accessToken);
                return array("C" => 100, "R" => $result, "M" => "success");
            }else{
              return array("C" => 101, "R" => $tokenResult, "M" => "error");
            }
        }else{
            return array("C" => 100, "R" => $result, "M" => "success");
        }
    }

    function apply(Request $request){
        $jobId = $request->input("jobId");

        $data = array();
        $data["pageTitle"] = "Apply";
        
        $dpath =  storage_path('accessTokens/');
        $fname = "ZOHO_REC_AT.txt";
        $fpath = $dpath.$fname;
        $accessToken = fileRead($fpath);

        $data["accessToken"] = $accessToken;

        return view("zatpatjobs_apply", $data);
    }

    function getJobsApi($accessToken){
        $cmd = "curl 'https://recruit.zoho.com/recruit/v2/JobOpenings' -X GET -H 'Authorization: Bearer $accessToken'";
        
        exec($cmd, $output);
        
        return json_decode($output[0],true);
         
    }

    function generateAccessToken(){

        $keys = $this->ZOHORECRUIT;
        $refreshToken = $keys["refresh_token"];
        $clientId = $keys["clientId"];
        $clientSecret = $keys["clientSecret"];
        
        $cmd = "curl --location --request POST 'https://accounts.zoho.com/oauth/v2/token?refresh_token=$refreshToken&client_id=$clientId&client_secret=$clientSecret&grant_type=refresh_token'";

        exec($cmd, $output);
        
        $result = json_decode($output[0], true);
        if(!array_key_exists("error", $result)){
            
            $accessToken = $result["access_token"];
            $dpath =  storage_path('accessTokens/');
            $fname = "ZOHO_REC_AT.txt";
            $fpath = $dpath.$fname;
            fileWrite($fpath,$accessToken);

            $resp = array("C" => 100, "R" => $result, "M" => "success");
        }else{
            $resp = array("C" => 101, "R" => $result, "M" => "error");
        }
        
        return $resp;
        
    }
    
}
