<?php

  class Exercice extends Features{
    private $idExercice;
    private $name;
    private $isActive;

      /**
       * Exercices constructor.
       * Including array from exercices
       */

      public function __construct(array $data)
      {
          $this->generate($data);
      }

      /**
       * @return mixed
       */
      public function getIdExercice()
      {
          return $this->idExercice;
      }

      /**
       * @param mixed $idContact
       */
      public function setIdExercice($idExercice)
      {
          $this->idExercice = $idExercice;
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
      public function setName($name)
      {
          $this->name = mb_strtoupper($name);
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

    }
      ?>