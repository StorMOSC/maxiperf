<?php

  class Serie extends Features{
    private $idSerie;
    private $repetition;
    private $poids;
    private $type;

      /**
       * Serie constructor.
       * Including array from serie
       */

      public function __construct(array $data)
      {
          $this->generate($data);
      }

      /**
       * @return mixed
       */
      public function getIdSerie()
      {
          return $this->idSerie;
      }

      /**
       * @param mixed $idContact
       */
      public function setIdSerie($idSerie)
      {
          $this->idSerie = $idSerie;
      }

      /**
       * @return mixed
       */
      public function getRepetition()
      {
          return $this->repetition;
      }

      /**
       * @param mixed $repetition
       */
      public function setRepetition($repetition)
      {
          $this->repetition = $repetition;
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
      public function setPoids($poids)
      {
          $this->poids = $poids;
      }

      /**
       * @return mixed
       */
      public function getType()
      {
          return $this->type;
      }

      /**
       * @param mixed $type
       */
      public function setType($type)
      {
          $this->type = $type;
      }

    }
      ?>