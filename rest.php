<?php
class rest {
  // Properties
//   public $username;
//   public $password;

  // Methods
    function account($user,$pass) {
        $url = 'https://becode-me.tanmode.com/api/v10/token';

        $data = '
        {
        "UserName": $user,
        "Password": $pass
        }
        ';

        $additional_headers = array(                                                                          
        'Accept: application/json',
        'Content-Type: application/json'
        );
        echo "here";
        $ch = curl_init($url);                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);                                                                  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers); 

        $server_output = curl_exec ($ch);
        // echo "after";
        echo  $server_output;  
    }

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
    
    }

    

?>