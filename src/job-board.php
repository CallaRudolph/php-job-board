<?php
    class JobOpening
    {
        private $title;
        private $description;

        function __construct($title, $description)
        {
            $this->title = $title;
            $this->description = $description;
        }

        // function setTitle($new_title)
        // {
        //     $this->title = $new_title;
        // }

        function getTitle()
        {
            return $this->title;
        }

        // function setDescription($new_description)
        // {
        //     $this->description = $new_description;
        // }

        function getDescription()
        {
            return $this->description;
        }

    }

    class Contact
        {
            private $name;
            private $phone_number;
            private $email;

            function __construct($name, $phone_number, $email)
            {
                $this->name = $name;
                $this->phone_number = $phone_number;
                $this->email = $email;
            }

            // function setName($new_name)
            // {
            //     $this->name = $new_name;
            // }

            function getName()
            {
                return $this->name;
            }

            // function setPhoneNumber($new_phone_number)
            // {
            //     $this->phone_number = $new_phone_number;
            // }

            function getPhoneNumber()
            {
                return $this->phone_number;
            }

            // function setEmail($new_email)
            // {
            //     $this->email = $new_email;
            // }

            function getEmail()
            {
                return $this->email;
            }

    }
 ?>
