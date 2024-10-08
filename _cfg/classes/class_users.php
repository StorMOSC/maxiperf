<?php

  class Users extends Features{
    private $username;
    private $name;
    private $firstname;
    private $password;
    private $emailAddress;
    private $phoneNumber;
    private $image;
    private $abonnement;
    private $credential;
    private $taille;
    private $poids;
    private $isActive;



      /**
       * Users constructor.
       * Including array from users
       */

      public function __construct(array $data)
      {
          $this->generate($data);
      }

      /**
       * @return mixed
       */
      public function getUsername()
      {
          return $this->username;
      }

      /**
       * @param mixed $username
       */
      public function setUsername($username): void
      {
          if(is_string($username))
          {
              $this->username = $username;
          }
      }

      /**
       * @return mixed
       */
      public function getName()
      {
          return $this->name;
      }

      /**
       * @param mixed $name
       */
      public function setName($name): void
      {
          if(is_string($name))
          {
              $this->name = $name;
          }

      }

      /**
       * @return mixed
       */
      public function getFirstName()
      {
          return $this->firstname;
      }

      /**
       * @param mixed $firstname
       */
      public function setFirstName($firstname): void
      {
          if(is_string($firstname))
          {
              $this->firstname = $firstname;
          }

      }

      /**
       * @return mixed
       */
      public function getPassword()
      {
          return $this->password;
      }

      /**
       * @param mixed $password
       */
      public function setPassword($password): void
      {
          if(is_string($password))
          {
              $this->password = password_hash($password, PASSWORD_DEFAULT);
          }
      }

      /**
       * @return mixed
       */
      public function getEmailAddress()
      {
          return $this->emailAddress;
      }

      /**
       * @param mixed $email_address
       */
      public function setEmailAddress($emailAddress)
      {
          $this->emailAddress = $emailAddress;
      }

      /**
       * @return mixed
       */
      public function getPhoneNumber()
      {
          return $this->phoneNumber;
      }

      /**
       * @param mixed $phone_number
       */
      public function setPhoneNumber($phoneNumber)
      {
          $this->phoneNumber = $phoneNumber;
      }

      /**
       * @return mixed
       */
      public function getCredential()
      {
          return $this->credential;
      }

      /**
       * @param mixed $credential
       */
      public function setCredential($credential)
      {
          $this->credential = $credential;
      }

      /**
       * @return mixed
       */
      public function getImage()
      {
          return $this->image;
      }

      /**
       * @param mixed $image
       */
      public function setImage($image)
      {
          $this->image = $image;
      }

      /**
       * @return mixed
       */
      public function getIsActive()
      {
          return $this->isActive;
      }

      /**
       * @param mixed $isActive
       */
      public function setIsActive($isActive)
      {
          $this->isActive = $isActive;
      }

      /**
       * @return mixed
       */
      public function getAbonnement()
      {
          return $this->abonnement;
      }

      /**
       * @param mixed $abonnement
       */
      public function setAbonnement($abonnement): void
      {
          $this->abonnement = $abonnement;
      }

      /**
       * @return mixed
       */
      public function getTaille()
      {
          return $this->taille;
      }

      /**
       * @param mixed $taille
       */
      public function setTaille($taille): void
      {
          $this->taille = $taille;
      }

      /**
       * @return mixed
       */
      public function getPoids()
      {
          return $this->poids;
      }

      /**
       * @param mixed $poids
       */
      public function setPoids($poids): void
      {
          $this->poids = $poids;
      }

  }
?>
