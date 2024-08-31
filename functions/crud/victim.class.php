<?php

class VictimCRUD
{
    private $db;

    function __construct($conn)
    {
        $this->db = $conn; 
    }

    //Get all victims
    public function getAllVictims()
    {
        $sth = $this->db->prepare("SELECT * FROM `victims` ORDER BY `id` DESC");
        $sth->execute();
        $result = $sth->fetchAll();

        return $result;
    }

    //Create new victim (dynamic fields)
    public function createVictim($params)
    {
        $fields = [];
        $values = [];

        foreach ($params as $field => $value) {
            $values[] = ":$field";
            $fields[] = $field;
        }

        $implodedFields = implode(",", $fields);
        $implodedValues = implode(",", $values);

        $params = array_filter($params, function($param) {
            return !($param instanceof Expression);
        });

        try {
            $sth = $this->db->prepare("INSERT INTO `victims`($implodedFields) VALUES ($implodedValues);");
            $sth->execute($params);
        }
        catch(Exception $e) {
            return $e;
        }

        return $this->db->lastInsertId();
    }

    //Get single victim
    public function getVictim($id)
    {
        $sth = $this->db->prepare("SELECT * FROM `victims` WHERE `id` = ? LIMIT 0,1");
        $sth->bindParam(1, $id);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    //Update victim (dynamic fields)
    public function updateVictim($id, array $fields)
    {
        //Dynamic shit
        $parts = [];
        $params = [];
        foreach ($fields as $field => $value) {
            $varname = "FIELD_$field";
            $parts[] =  "$field = :$varname";
            $params[$varname] = $value;
        }
        $setPart = implode(", ", $parts);

        //Applying id
        $params['id'] = $id;

        try {
            $sth = $this->db->prepare("UPDATE `victims` SET $setPart WHERE `id` = :id;");
            $sth->execute($params);
        }
        catch(Exception $e) {
            return $e;
        }

        return true;
    }

    public function deleteVictim($id)
    {
        try {
            $sth = $this->db->prepare("DELETE FROM `victims` WHERE `id` = ?;");
            $sth->bindParam(1, $id);
            $sth->execute();
        }
        catch(Exception $e) {
            return $e;
        }

        return true;
    }
}