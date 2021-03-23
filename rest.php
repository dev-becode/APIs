<?php
class rest
{
    //Account
    //For Logging in ---------- POST
    function account($username, $password) //DONE
    {
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

        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $server_output = json_decode($server_output);
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);

            return $output;
        }
    }

    //Import Export
    //Import Users ---------- POST
    function importUsers($token) //DONE
    {
        $url = 'https://becode-me.tanmode.com/api/v10/ImportExport/ImportUsers';
        $authorization = "Authorization: Bearer $token";


        $additional_headers = array(
            'accept: application/json',
            $authorization
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);

            return $output;
        }
    }

    //import Locks ---------- POST
    function importLocks($token) // DONE
    {
        $url = 'https://becode-me.tanmode.com/api/v10/ImportExport/ImportLocks';
        $authorization = "Authorization: Bearer $token";


        $additional_headers = array(
            'accept: application/json',
            $authorization
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);

            return $output;
        }
    }

    // Import Start Codes ---------- POST
    function importStartcodes($token) // DONE
    {
        $url = 'https://becode-me.tanmode.com/api/v10/ImportExport/ImportStartcodes';
        $authorization = "Authorization: Bearer $token";


        $additional_headers = array(
            'accept: application/json',
            $authorization
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);

            return $output;
        }
    }

    //Import Partners ---------- POST
    function importPartners($token) //DONE
    {
        $url = 'https://becode-me.tanmode.com/api/v10/ImportExport/ImportPartners';
        $authorization = "Authorization: Bearer $token";


        $additional_headers = array(
            'accept: application/json',
            $authorization
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);
            return $output;
        }
    }

    //Import Operators ---------- POST
    function importOperators($token) // DONE
    {
        $url = 'https://becode-me.tanmode.com/api/v10/ImportExport/ImportOperators';
        $authorization = "Authorization: Bearer $token";


        $additional_headers = array(
            'accept: application/json',
            $authorization
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);
            return $output;
        }
    }

    // Import Key Users ---------- POST
    function importKeyusers($token) // DONE
    {
        $url = 'https://becode-me.tanmode.com/api/v10/ImportExport/ImportKeyusers';
        $authorization = "Authorization: Bearer $token";


        $additional_headers = array(
            'accept: application/json',
            $authorization
        );
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);
            return $output;
        }
    }

    // Export Users ---------- GET
    function exportUsers($token, $sort, $order, $filter) // DONE
    {
        $url = "https://becode-me.tanmode.com/api/v10/ImportExport/ExportUsers";
        if(isset($sort) || isset($order) || isset($filter))
        {
            $url = $url .'?';
            if(isset($sort))
            {
                $url = $url .'?sort=' . $sort;
            }
            if(isset($order))
            {
                $url = $url . "&order=" . $order;
            }
            if(isset($filter))
            {
                $url = $url . "&filter=" . $filter;
            }
        }

        $authorization = "Authorization: Bearer $token";

        $additional_headers = array(
            'accept: application/json',
            $authorization
        );

        $data = array(
            "sort" => $sort,
            "order" => $order,
            "filter" => $filter
        );

        $data = json_encode($data);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);

            return $output;
        }
    }

    // Export Locks
    function exportLocks($token, $sort, $order, $filter) // DONE
    {
        $url = "https://becode-me.tanmode.com/api/v10/ImportExport/ExportLocks";
        if(isset($sort) || isset($order) || isset($filter))
        {
            $url = $url .'?';
            if(isset($sort))
            {
                $url = $url .'?sort=' . $sort;
            }
            if(isset($order))
            {
                $url = $url . "&order=" . $order;
            }
            if(isset($filter))
            {
                $url = $url . "&filter=" . $filter;
            }
        }

        $authorization = "Authorization: Bearer $token";

        $additional_headers = array(
            'accept: application/json',
            $authorization
        );

        $data = array(
            "sort" => $sort,
            "order" => $order,
            "filter" => $filter
        );

        $data = json_encode($data);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);

            return $output;
        }
    }

    // Export Protocols
    function exportProtocols($token, $sort, $order, $filter) // DONE
    {
        $url = "https://becode-me.tanmode.com/api/v10/ImportExport/ExportProtocols";
        if(isset($sort) || isset($order) || isset($filter))
        {
            $url = $url .'?';
            if(isset($sort))
            {
                $url = $url .'?sort=' . $sort;
            }
            if(isset($order))
            {
                $url = $url . "&order=" . $order;
            }
            if(isset($filter))
            {
                $url = $url . "&filter=" . $filter;
            }
        }

        $authorization = "Authorization: Bearer $token";

        $additional_headers = array(
            'accept: application/json',
            $authorization
        );

        $data = array(
            "sort" => $sort,
            "order" => $order,
            "filter" => $filter
        );

        $data = json_encode($data);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);

            return $output;
        }
    }

    // Export Partners
    function exportPartners($token, $sort, $order, $filter) // DONE
    {
        $url = "https://becode-me.tanmode.com/api/v10/ImportExport/ExportPartners";
        if(isset($sort) || isset($order) || isset($filter))
        {
            $url = $url .'?';
            if(isset($sort))
            {
                $url = $url .'?sort=' . $sort;
            }
            if(isset($order))
            {
                $url = $url . "&order=" . $order;
            }
            if(isset($filter))
            {
                $url = $url . "&filter=" . $filter;
            }
        }

        $authorization = "Authorization: Bearer $token";

        $additional_headers = array(
            'accept: application/json',
            $authorization
        );

        $data = array(
            "sort" => $sort,
            "order" => $order,
            "filter" => $filter
        );

        $data = json_encode($data);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);

            return $output;
        }
    }

    // Export Operators
    function exportOperators($token, $sort, $order, $filter) // DONE
    {
        $url = "https://becode-me.tanmode.com/api/v10/ImportExport/ExportOperators";
        if(isset($sort) || isset($order) || isset($filter))
        {
            $url = $url .'?';
            if(isset($sort))
            {
                $url = $url .'?sort=' . $sort;
            }
            if(isset($order))
            {
                $url = $url . "&order=" . $order;
            }
            if(isset($filter))
            {
                $url = $url . "&filter=" . $filter;
            }
        }

        $authorization = "Authorization: Bearer $token";

        $additional_headers = array(
            'accept: application/json',
            $authorization
        );

        $data = array(
            "sort" => $sort,
            "order" => $order,
            "filter" => $filter
        );

        $data = json_encode($data);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);

            return $output;
        }
    }

    //Export Key Users
    function exportKeyusers($token, $sort, $order, $filter) // DONE
    {
        $url = "https://becode-me.tanmode.com/api/v10/ImportExport/ExportKeyusers";
        if(isset($sort) || isset($order) || isset($filter))
        {
            $url = $url .'?';
            if(isset($sort))
            {
                $url = $url .'?sort=' . $sort;
            }
            if(isset($order))
            {
                $url = $url . "&order=" . $order;
            }
            if(isset($filter))
            {
                $url = $url . "&filter=" . $filter;
            }
        }

        $authorization = "Authorization: Bearer $token";

        $additional_headers = array(
            'accept: application/json',
            $authorization
        );

        $data = array(
            "sort" => $sort,
            "order" => $order,
            "filter" => $filter
        );

        $data = json_encode($data);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);

            return $output;
        }
    }

    // Template Users
    function templateUsers($token) // DONE
    {
        $url = "https://becode-me.tanmode.com/api/v10/ImportExport/TemplateUsers";

        $authorization = "Authorization: Bearer $token";

        $additional_headers = array(
            'accept: application/json',
            $authorization
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);

            return $output;
        }
    }

    // Template Locks
    function templateLocks($token) // DONE
    {
        $url = "https://becode-me.tanmode.com/api/v10/ImportExport/TemplateLocks";

        $authorization = "Authorization: Bearer $token";

        $additional_headers = array(
            'accept: application/json',
            $authorization
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);

            return $output;
        }
    }

    // Template Partners
    function templatePartners($token) // DONE
    {
        $url = "https://becode-me.tanmode.com/api/v10/ImportExport/TemplatePartners";

        $authorization = "Authorization: Bearer $token";

        $additional_headers = array(
            'accept: application/json',
            $authorization
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);

            return $output;
        }
    }

    // Template Operators
    function templateOperators($token) // DONE
    {
        $url = "https://becode-me.tanmode.com/api/v10/ImportExport/TemplateOperators";

        $authorization = "Authorization: Bearer $token";

        $additional_headers = array(
            'accept: application/json',
            $authorization
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);

            return $output;
        }
    }

    // Template Key Users
    function templateKeyusers($token) // DONE
    {
        $url = "https://becode-me.tanmode.com/api/v10/ImportExport/TemplateKeyusers";

        $authorization = "Authorization: Bearer $token";

        $additional_headers = array(
            'accept: application/json',
            $authorization
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);

            return $output;
        }
    }

    //Export Key Users
    function exportTANs($token, $sort, $order, $filter) // DONE
    {
        $url = "https://becode-me.tanmode.com/api/v10/ImportExport/ExportTANs";
        if(isset($sort) || isset($order) || isset($filter))
        {
            $url = $url .'?';
            if(isset($sort))
            {
                $url = $url .'?sort=' . $sort;
            }
            if(isset($order))
            {
                $url = $url . "&order=" . $order;
            }
            if(isset($filter))
            {
                $url = $url . "&filter=" . $filter;
            }
        }

        $authorization = "Authorization: Bearer $token";

        $additional_headers = array(
            'accept: application/json',
            $authorization
        );

        $data = array(
            "sort" => $sort,
            "order" => $order,
            "filter" => $filter
        );

        $data = json_encode($data);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);

            return $output;
        }
    }

    //Export Sync Codes
    function exportSyncCodes($token, $sort, $order, $filter) // DONE
    {
        $url = "https://becode-me.tanmode.com/api/v10/ImportExport/ExportSyncCodes";
        if(isset($sort) || isset($order) || isset($filter))
        {
            $url = $url .'?';
            if(isset($sort))
            {
                $url = $url .'?sort=' . $sort;
            }
            if(isset($order))
            {
                $url = $url . "&order=" . $order;
            }
            if(isset($filter))
            {
                $url = $url . "&filter=" . $filter;
            }
        }

        $authorization = "Authorization: Bearer $token";

        $additional_headers = array(
            'accept: application/json',
            $authorization
        );

        $data = array(
            "sort" => $sort,
            "order" => $order,
            "filter" => $filter
        );

        $data = json_encode($data);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);

            return $output;
        }
    }


    // Any functions done below here are done by me
    function returnLocks($token)
    {
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


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);

            return $output;
        }
    }

    function returnLocations($token)
    {
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


        $server_output = curl_exec($ch);
        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if ($httpcode == 200) {
                return $server_output;
            } else {
                return FALSE;
            }
        }
    }

    function returnLockUsers($token)
    {

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


        $server_output = curl_exec($ch);

        if ($server_output === FALSE) {
            return "cURL Error: " . curl_error($ch);
        } else {
            $output = array(curl_getinfo($ch, CURLINFO_HTTP_CODE), $server_output);

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



        $server_output = curl_exec($ch);
        if ($e = curl_error($ch)) {
            return "cURL Error: " . $e;
        } else {
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if ($httpcode == 200) {
                return $server_output;
            } else {
                return $httpcode;
            }
        }
    }


    function generateNewTan($token, $lockID)
    {
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



        $server_output = curl_exec($ch);
        if ($e = curl_error($ch)) {
            return "cURL Error: " . $e;
        } else {
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if ($httpcode == 200) {
                return $server_output;
            } else {
                return $httpcode;
            }
        }
    }

    function assignLockToLockUser($token, $lockID, $lockUserID)
    {
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

        curl_exec($ch);

        return $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    }
}