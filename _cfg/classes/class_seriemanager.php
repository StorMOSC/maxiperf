<?php
/**
 * 
 */

class SerieManager extends Features
{
    /**
     * PDO Database instance PDO
     * @var
     */
    private $_db;

    /**
     * companiesManager constructor.
     * @param $_db
     */
    public function __construct($_db)
    {
        $this->_db = $_db;
    }

    /**
     * @param mixed $db
     */
    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }

    /**
     * @return mixed
     */
    public function count()
    {
        return $this->_db->query('SELECT COUNT(*) FROM series')->fetchColumn();
    }

    /**
     * @param Serie $serie
     * Insertion serie in the DB
     */
    public function add(Serie $serie)
    {
        try{
            $q = $this->_db->prepare('INSERT INTO series (repetition,poids,type) VALUES (:repetition, :poids, :type)');
            $q->bindValue(':repetition', $serie->getName(), PDO::PARAM_INT);
            $q->bindValue(':poids', $serie->getPoids(), PDO::PARAM_INT);
            $q->bindValue(':type', $serie->getType(), PDO::PARAM_STR);
    
            $q->execute();
            
            return "ok";
        }
        catch(Exception $e){
            return null;
        }
    }

    /**
     * @param Serie $serie
     * Disable company instead of delete it
     */
    public function delete(Serie $serie)
    {
        try{
            $q = $this->_db->prepare('DELETE FROM series WHERE idSerie = '.$serie->getIdSerie());
    
            $q->execute();
            
            return "ok";
        }
        catch(Exception $e){
            return null;
        }
    }

    /**
     * Find a company by his ID
     * @param $serieId
     * @return Serie
     */
    public function getById($serieId)
    {
        $serieId = (integer) $serieId;
        $q = $this->_db->query('SELECT * FROM `series` WHERE `idSerie` ='.$serieId);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new Exercice($donnees);
    }

    /**
     * Get all the  activate series in the BDD
     * @return array
     */
    public function getList()
    {
        $exercices = [];
        $q=$this->_db->query('SELECT * FROM exercices WHERE isActive = \'1\' ORDER BY name');
        //$q=$this->_db->query($this->getListIsActive($company));
        while($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $exercices[] = new Exercice($donnees);
        }

        return $exercices;
    }

    /**
     * Get all the companies in the BDD
     * @return array
     */
    public function getListAllExercices()
    {
        $exercices = [];
        $q=$this->_db->query('SELECT * FROM series ORDER BY name');
        //$q=$this->_db->query($this->getListIsActive($company));
        while($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $exercices[] = new Exercice($donnees);
        }

        return $exercices;
    }

    /**
     * Update companies information
     * @param Exercice $exercices
     */

    public function update(Exercice $exercices)
    {
        try{
            $q = $this->_db->prepare('UPDATE exercices SET name = :name, isActive = :isActive  WHERE idExercice = :idExercice');
            $q->bindValue(':idcompany', $exercices->getIdExercice(), PDO::PARAM_INT);
            $q->bindValue(':name', $exercices->getName(), PDO::PARAM_STR);
            $q->bindValue(':isActive', $exercices->getIsActive(), PDO::PARAM_INT);
    
            $q->execute();
            return "ok";
        }
        catch(Exception $e){
            return null;
        }
    }


    /**
     * Reactivate the Company
     * @param Exercice $exercices
     */
    public function reactivate(Exercice $exercices)
    {
        try{
            $q = $this->_db->prepare('UPDATE exercices SET isActive = \'1\' WHERE idcompany = :idcompany');
            $q->bindValue(':idcompany', $exercices->getIdExercice(), PDO::PARAM_INT);
            $q->execute();
            return "ok";
        }
        catch(Exception $e){
            return null;
        }
    }


}