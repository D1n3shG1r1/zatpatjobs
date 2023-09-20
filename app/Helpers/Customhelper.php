<?php
use Illuminate\Support\Facades\Auth;

   if(!function_exists("db_randnumber")){
        function db_randnumber(){
            return time().rand(9999,999999);
        }
   }

   if(!function_exists('create_local_folder')){
        function create_local_folder($path){
        if(!is_dir($path)){
            mkdir($path,0777);
            exec("chmod 777 $path");
        }
        }
    }

    if(!function_exists('fileWrite')){
        function fileWrite($file,$data,$mode='w+'){
        $fp = fopen($file,$mode);
        fwrite($fp,$data);
        fclose($fp);
        }
    }

    if(!function_exists('fileRead')){
        function fileRead($file){
        $content = file_get_contents($file);
        return $content;
        }
    }

    if(!function_exists('fileRemove')){
        function fileRemove($file){
            unlink($file);
        }
    }

    if(!function_exists('genTimeSlot')){
        function genTimeSlot(){
            // Initialize an empty array to store the time strings
            $timeStrings = array();

            // Loop through the hours (0 to 23)
            for ($hour = 0; $hour <= 23; $hour++) {
                // Loop through the minutes (0, 15, 30, 45)
                for ($minute = 0; $minute <= 45; $minute += 15) {
                    // Format the hour and minute as a time string and add it to the array
                    $timeStrings[] = sprintf("%02d:%02d", $hour, $minute);
                }
            }
            
            // Add "24:00" to the array to represent midnight
            $timeStrings[] = "24:00";

            return $timeStrings;
        }
    }

?>
