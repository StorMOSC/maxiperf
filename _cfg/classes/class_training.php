<?php

  class Training extends Features{
    private $idParcours;
    private $idExercice;
    private $username;
    private $numSerie;
    private $repet;
    private $poids;
    private $type;
    private $commentaire;

      /**
       * Exercices constructor.
       * Including array from training
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
      public function getIdExercice()
      {
          return $this->idExercice;
      }

      /**
       * @param mixed $idExercice
       */
      public function setIdExercice($idExercice)
      {
          $this->idExercice = $idExercice;
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
      public function setUsername($username)
      {
          $this->name = mb_strtoupper($username);
      }

      /**
       * @return mixed
       */
      public function getNumSerie()
      {
          return $this->numSerie;
      }

      /**
       * @param mixed $numSerie
       */
      public function setNumSerie($numSerie)
      {
          $this->numSerie = $numSerie;
      }

       /**
       * @return mixed
       */
      public function getRepet()
      {
          return $this->repet;
      }

      /**
       * @param mixed $repet
       */
      public function setRepet($repet)
      {
          $this->repet = $repet;
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

        /**
       * @return mixed
       */
      public function getCommentaire()
      {
          return $this->commentaire;
      }

      /**
       * @param mixed $commentaire
       */
      public function setCommentaire($commentaire)
      {
          $this->commentaire = $commentaire;
      }

    }
      ?>