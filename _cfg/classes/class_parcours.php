<?php

  class Parcours extends Features{
    private $idParcours;
    private $name;
    private $date;

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
      public function getIdParcours()
      {
          return $this->idParcours;
      }

      /**
       * @param mixed $idParcours
       */
      public function setIdParcours($idParcours)
      {
          $this->idParcours = $idParcours;
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
      public function getDate()
      {
          return $this->isActive;
      }

      /**
       * @param mixed $date
       */
      public function setDate($isActive)
      {
          $this->date = $date;
      }

    }
      ?>