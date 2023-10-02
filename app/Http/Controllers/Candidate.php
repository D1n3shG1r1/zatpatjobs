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
        $page = $request->input("page");

        $result = $this->getJobsApi($accessToken, $page);
        if(array_key_exists("code",$result) && strtolower($result["code"]) == "invalid_token"){
            //renew access token
            $tokenResult = $this->generateAccessToken();
            if($tokenResult["C"] == 100){
                $accessToken = $tokenResult["R"]["access_token"];
                $result = $this->getJobsApi($accessToken, $page);
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

        $details = $this->getJobDetails($accessToken, $jobId);
        if(array_key_exists("code",$details) && strtolower($details["code"]) == "invalid_token"){
            //renew access token
            $tokenResult = $this->generateAccessToken();
            if($tokenResult["C"] == 100){
                $accessToken = $tokenResult["R"]["access_token"];
                $details = $this->getJobDetails($accessToken, $jobId);
            }
        }

        $data["details"] = $details;
        $data["accessToken"] = $accessToken;

        //echo "<pre>"; print_r($data); die;

        return view("zatpatjobs_apply", $data);
    }

    function applyJob(Request $request){
        
        //dd($request); die;

        $_token = $request->input("_token");
        $accessToken = $request->input("accessToken");
        $id = $request->input("id");
        $fullName = $request->input("fullName");
        $email = $request->input("email");
        $phoneNo = $request->input("phoneNo");
        $street = $request->input("street");
        $city = $request->input("city");
        $state = $request->input("state");
        $country = $request->input("country");
        $currentCompany = $request->input("currentCompany");
        $education = $request->input("education");
        $totalExperience = $request->input("totalExperience");
        $currentJobTitle = $request->input("currentJobTitle");
        $skillSet = $request->input("skillSet");
        $currentSalary = $request->input("currentSalary");
        $expectedSalary = $request->input("expectedSalary");
        $additionalInfo = $request->input("additionalInfo");
        
        $inputData = array();
        $inputData["data"] = array();
        $inputData["data"][0] = array(
            
            "Email" => $email,
            "Last_Name" => $fullName,
            "Mobile" => $phoneNo,
            "Phone" => "",
            "Website" => "",
            "Street" => $street,
            "City" => $city,
            "State" => $state,
            "Country" => $country,
            "Zip_Code" => "",
            "Experience_in_Years" => $totalExperience,
            "Current_Job_Title" => $currentJobTitle,
            "Expected_Salary" => $expectedSalary,
            "Skill_Set" => $skillSet,
            "Highest_Qualification_Held" => $education,
            "Current_Employer" => $currentCompany,
            "Current_Salary" => $currentSalary,
            "Additional_Info" => $additionalInfo
        );

        $inputData["trigger"] = array("approval","workflow","blueprint");
        $jsonData = json_encode($inputData);

        $result = $this->createCandidateApi($accessToken, $jsonData);
        if(array_key_exists("code",$result) && strtolower($result["code"]) == "invalid_token"){
            //renew access token
            $tokenResult = $this->generateAccessToken();
            if($tokenResult["C"] == 100){
                $accessToken = $tokenResult["R"]["access_token"];
                $result = $this->createCandidateApi($accessToken, $jsonData);

                if($result["data"][0]["code"] == "SUCCESS"){
                    $candidateID = $result["data"][0]["details"]["id"];
                    //$id
                    $postData = array();
                    $postData["data"][0] = array(
                        "jobids" => array($id),
                        "ids" => array($candidateID),
                        "comments" => ""
                    );
                    
                    $jsonData = json_encode($postData);
                    
                    $associateResult = $this->associateCandidateApi($accessToken, $jsonData);

                    if(array_key_exists("code",$associateResult) && strtolower($associateResult["code"]) == "invalid_token"){
                        //renew access token
                        $tokenResult = $this->generateAccessToken();
                        if($tokenResult["C"] == 100){
                            $accessToken = $tokenResult["R"]["access_token"];
                            
                            $associateResult = $this->associateCandidateApi($accessToken, $jsonData);
                        }
                    }

                    //echo "<pre>"; print_r($result); print_r($associateResult);
                    
                    echo json_encode(array("C" => 100, "R" => $result, "M" => "success")); die;
                }else{
                    echo json_encode(array("C" => 101, "R" => $result, "M" => "error"));
                    die;
                }
            }else{
                echo json_encode(array("C" => 101, "R" => $result, "M" => "error"));
                die;
            }
        }else{
           
            if($result["data"][0]["code"] == "SUCCESS"){
                $candidateID = $result["data"][0]["details"]["id"];
                //$id
                $postData = array();
                $postData["data"][0] = array(
                    "jobids" => array($id),
                    "ids" => array($candidateID),
                    "comments" => ""
                );
                
                $jsonData = json_encode($postData);
                
                $associateResult = $this->associateCandidateApi($accessToken, $jsonData);

                if(array_key_exists("code",$associateResult) && strtolower($associateResult["code"]) == "invalid_token"){
                    //renew access token
                    $tokenResult = $this->generateAccessToken();
                    if($tokenResult["C"] == 100){
                        $accessToken = $tokenResult["R"]["access_token"];
                        
                        $associateResult = $this->associateCandidateApi($accessToken, $jsonData);
                    }
                }

                echo json_encode(array("C" => 100, "R" => $result, "M" => "success"));
                die;

            }else{
                echo json_encode(array("C" => 101, "R" => $result, "M" => "error")); die;
            }

        }

    }

    function getJobsApi($accessToken, $p=1){
        
        $fields = 'fields=Salary,$currency_symbol,Posting_Title,Industry,id,Date_Opened,City,State,Country';
        $page = "page=$p";
        $perPage = "per_page=10";
        $requestParams = $fields."&".$page."&".$perPage;
        
        $cmd = "curl 'https://recruit.zoho.com/recruit/v2/JobOpenings?$requestParams' -X GET -H 'Authorization: Bearer $accessToken'";
        
        exec($cmd, $output);
        
        return json_decode($output[0],true);
         
    }

    function getJobDetails($accessToken, $id){
        
        $cmd = "curl 'https://recruit.zoho.com/recruit/v2/JobOpenings/$id' -X GET -H 'Authorization: Bearer $accessToken'";
        
        exec($cmd, $output);
        
        return json_decode($output[0],true);
         
    }

    function createCandidateApi($accessToken, $jsonData){
        
        $cmd = "curl 'https://recruit.zoho.com/recruit/v2/Candidates' -X POST -H 'Authorization: Bearer $accessToken' -H 'Content-type: application/json' --data-raw '$jsonData'";
        
        exec($cmd, $output);
        
        return json_decode($output[0],true);
        
    }

    function associateCandidateApi($accessToken, $jsonData){

        $cmd = "curl 'https://recruit.zoho.com/recruit/v2/Candidates/actions/associate' -X PUT -H 'Authorization: Bearer $accessToken' -H 'Content-type: application/json' --data-raw '$jsonData'";
        
        exec($cmd, $output);
        
        return json_decode($output[0],true);

        /*curl "https://recruit.zoho.com/recruit/v2/Candidates/actions/associate"
        -X PUT
        -H "Authorization: Zoho-oauthtoken 1000.8cb99dxxxxxxxxxxxxx9be93.9b8xxxxxxxxxxxxxxxf"
        
        {
        "data": [
            {
            "jobids": ["100001000000025015","100001000000025001"],
            "ids": ["100001000000027011","100001000000027002"],
            "comments":"Record successfully associated"
            }
        ]
        }
        */
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
