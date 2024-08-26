<?php
/**
 * 
 */

class ExerciceManager extends Features
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
        return $this->_db->query('SELECT COUNT(*) FROM exercices')->fetchColumn();
    }

    /**
     * @param Exercice $exercice
     * Insertion exercice in the DB
     */
    public function add(Exercice $exercice)
    {
        echo "test 1 : ".$exercice->getName();
        try{
            $q = $this->_db->prepare('INSERT INTO exercices (name) VALUES (:name)');
            $q->bindValue(':name', $exercice->getName(), PDO::PARAM_STR);
            $q->bindValue(':isActive', $exercice->getIsActive(), PDO::PARAM_INT);
    
            $q->execute();
            
            return "ok";
        }
        catch(Exception $e){
            return null;
        }
    }

    /**
     * @param Exercice $exercice
     * Disable company instead of delete it
     */
    public function delete(Exercice $exercice)
    {
        try{
            $q = $this->_db->prepare('UPDATE exercices SET isActive = \'0\' WHERE idExercice = '.$exercice->getIdExercice());
    
            $q->execute();
            
            return "ok";
        }
        catch(Exception $e){
            return null;
        }
    }

    /**
     * Find a company by his ID
     * @param $exerciceId
     * @return Exercice
     */
    public function getById($exerciceId)
    {
        $exerciceId = (integer) $exerciceId;
        $q = $this->_db->query('SELECT * FROM `exercices` WHERE `idExercice` ='.$exerciceId);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new Exercice($donnees);
    }

    /**
     * Find an exercice by his name
     * @param $exerciceDataName
     * @return Exercice
     */
    public function getByName($exerciceDataName)
    {
        $companyNameData = (string) $exerciceDataName;
        $q = $this->_db->query('SELECT * FROM `exercices` WHERE `name` ="'.$exerciceDataName.'"');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new Exercice($donnees);
    }


    /**
     * Get all the  activate companies in the BDD
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
        $q=$this->_db->query('SELECT * FROM exercices ORDER BY name');
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