<?php

class Signup
{
    #Properties
    private string $email;
    private array $email_list;

    #Method

    #constructor
    public function __construct()
    {
        if (file_exists('email.json')) {
            $this->email_list = json_decode(file_get_contents('email.json'), true);
        }
    }

    #Set email in object
    public function setEmail(string $email): bool
    {
        #check if email is valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
            $this->saveEmail();
            return true;
        }
        return false;
    }

    #save email to list
    public function saveEmail()
    {
        array_push($this->email_list, $this->email);
        
        $jsonStr = json_encode($this->email_list, JSON_PRETTY_PRINT);
        file_put_contents('email.json', $jsonStr);
    }

    #Get list of emails
    public function getList(): array
    {
        return $this->email_list;
    }

    #Sätter man en email (kolla att den är korrekt) X
    #spara emailen i lista X
    #spara listan till en JSON-fil
    #Hämta listan från JSON-filen

}
