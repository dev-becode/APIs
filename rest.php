<?php
class rest {
    //Account
    //For Logging in
    function account($username, $password) {
        $url = 'https://becode-me.tanmode.com/api/v10/token';

        $data = array(
            "username" => $username,
            "password" => $password
        );

        $data = json_encode($data);

        $additional_headers = array(
        'Accept: application/json',
        'Content-Type: application/json'
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);

        //echo "$username & $password";

        $server_output = curl_exec($ch);

        if($server_output === FALSE)
        {
            return "cURL Error: " . curl_error($ch);
        }
        else
        {
            $server_output = json_decode($server_output);
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE),$server_output);

            return $output;
        }



    }

    //Import Export
    function importUsers(){
        $url = 'https://becode-me.tanmode.com/api/v10/ImportExport/ImportUsers';



        $additional_headers = array(
        'Accept: application/json'
        //    'Content-Type: application/json'
        );
        echo "here!!";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec ($ch);
        echo  $server_output;
    }

    function importLocks(){
        $url = 'https://becode-me.tanmode.com/api/v10/ImportExport/ImportLocks';

        $additional_headers = array(
        'Accept: application/json'
        //    'Content-Type: application/json'
        );
        echo "here!!";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec ($ch);
        echo  $server_output;
        }


    function importStartcodes(){
        $url = 'https://becode-me.tanmode.com/api/v10/ImportExport/ImportStartcodes';


        $additional_headers = array(
        'Accept: application/json'
        //    'Content-Type: application/json'
        );
        echo "here!!";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec ($ch);
        echo  $server_output;
        }


    function importPartners(){
        $url = 'https://becode-me.tanmode.com/api/v10/ImportExport/ImportPartners';


        $additional_headers = array(
        'Accept: application/json'
        //    'Content-Type: application/json'
        );
        echo "here!!";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec ($ch);
        echo  $server_output;
        }

    function importOperators(){
        $url = 'https://becode-me.tanmode.com/api/v10/ImportExport/ImportOperators';


        $additional_headers = array(
        'Accept: application/json'
        //    'Content-Type: application/json'
        );
        echo "here!!";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec ($ch);
        echo  $server_output;
        }


    function importKeyusers(){
        $url = 'https://becode-me.tanmode.com/api/v10/ImportExport/ImportKeyusers';


        $additional_headers = array(
        'Accept: application/json'
        //    'Content-Type: application/json'
        );
        echo "here!!";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec ($ch);
        echo  $server_output;
        }




    function exportUsers($sort, $order, $filter){
        $url = 'https://becode-me.tanmode.com/api/v10/ImportExport/ExportUsers';

        $data = '
        {
        "sort": $sort,
        "order": $order,
        "filter":$filter
        }
        ';

        $additional_headers = array(
        'Accept: application/json'
        //    'Content-Type: application/json'
        );
        echo "here!!";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec ($ch);
        echo  $server_output;
        }


    function exportLocks($sort, $order, $filter){
        $url = 'https://becode-me.tanmode.com/api/v10/ImportExport/ExportLocks';

        $data = '
        {
        "sort": $sort,
        "order": $order,
        "filter":$filter
        }
        ';

        $additional_headers = array(
        'Accept: application/json'
        //    'Content-Type: application/json'
        );
        echo "here!!";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec ($ch);
        echo  $server_output;
        }



    function exportProtocols($sort, $order, $filter){
        $url = 'https://becode-me.tanmode.com/api/v10/ImportExport/ExportProtocols';

        $data = '
        {
        "sort": $sort,
        "order": $order,
        "filter":$filter
        }
        ';

        $additional_headers = array(
        'Accept: application/json'
        //    'Content-Type: application/json'
        );
        echo "here!!";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec ($ch);
        echo  $server_output;
        }


    function exportPartners($sort, $order, $filter){
        $url = 'https://becode-me.tanmode.com/api/v10/ImportExport/ExportPartners';

        $data = '
        {
        "sort": $sort,
        "order": $order,
        "filter":$filter
        }
        ';

        $additional_headers = array(
        'Accept: application/json'
        //    'Content-Type: application/json'
        );
        echo "here!!";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec ($ch);
        echo  $server_output;
        }

    // Any functions done below here are done by me
    function returnLocks($token){
        $url = "https://becode-me.tanmode.com/api/v10/locks";
        $authorization = "Authorization: Bearer $token";


        $additional_headers = array(
            'accept: application/json',
             $authorization
            );

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec ($ch);
        if($server_output === FALSE)
        {
            return "cURL Error: " . curl_error($ch);
        }
        else
        {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE),$server_output);

            return $output;
        }
    }

    function returnLocations($token){
        $url = "https://becode-me.tanmode.com/api/v10/locations";
        $authorization = "Authorization: Bearer $token";


        $additional_headers = array(
            'accept: application/json',
            $authorization
            );

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec ($ch);
        if($server_output === FALSE)
        {
            return "cURL Error: " . curl_error($ch);
        }
        else
        {
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if($httpcode == 200)
            {
                return $server_output;
            }
            else
            {
                return FALSE;
            }
        }
    }

    function returnLockUsers($token){

        $url = "https://becode-me.tanmode.com/api/v10/lockusers";
        $authorization = "Authorization: Bearer $token";

        $additional_headers = array(
            'accept: application/json',
            $authorization
            );

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec ($ch);

        if($server_output === FALSE)
        {
            return "cURL Error: " . curl_error($ch);
        }
        else
        {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE),$server_output);

            return $output;
        }
    }

    function generateLastTan($token, $lockID)
    {
        $url = "https://becode-me.tanmode.com/api/v10/locks/$lockID/tan";
        $authorization = "Authorization: Bearer $token";

        $additional_headers = array(
        'Accept: application/json',
        $authorization
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);



        $server_output = curl_exec ($ch);
        if($e = curl_error($ch))
        {
            return "cURL Error: " . $e;
        }
        else
        {
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if($httpcode == 200)
            {
                return $server_output;
            }
            else
            {
                return $httpcode;
            }
        }
    }


    function generateNewTan($token, $lockID){
        $url = "https://becode-me.tanmode.com/api/v10/locks/$lockID/generatenewtan";
        $authorization = "Authorization: Bearer $token";

        $additional_headers = array(
        'Accept: application/json',
        $authorization
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);



        $server_output = curl_exec ($ch);
        if($e = curl_error($ch))
        {
            return "cURL Error: " . $e;
        }
        else
        {
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if($httpcode == 200)
            {
                return $server_output;
            }
            else
            {
                return $httpcode;
            }
        }
    }

    function assignLockToLockUser($token, $lockID, $lockUserID){
        $url = "https://becode-me.tanmode.com/api/v10/lockerusers/$lockUserID/locks/$lockID/assign";
        $authorization = "Authorization: Bearer $token";

        $additional_headers = array(
            'Accept: application/json',
            $authorization
            );

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);

            curl_exec ($ch);

            return $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    }
}
?>