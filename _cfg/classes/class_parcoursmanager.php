<?php
/**
 * 
 */

class ParcoursManager extends Features
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
     * @param Parcours $parcours
     * Insertion exercice in the DB
     */
    /*public function add(Parcours $parcours)
    {
        try{
            $q = $this->_db->prepare('INSERT INTO parcours (name,date) VALUES (:name, :date)');
            $q->bindValue(':name', $parcours->getName(), PDO::PARAM_STR);
            $q->bindValue(':date', $parcours->getDate(), PDO::PARAM_STR);
    
            $q->execute();
            
            return "ok";
        }
        catch(Exception $e){
            return null;
        }
    }*/

    /**
     * @param Parcours $parcours
     * Insertion exercice in the DB
     */
    public function add(Parcours $parcours)
    {

        $parcours->setDate(date('Y-m-d',strtotime(str_replace('/','-',$parcours->getDate()))));

        echo "avant TRY";
        try{
            $q = $this->_db->prepare('INSERT INTO parcours (date) VALUES (:date)');
            $q->bindValue(':date', $parcours->getDate(), PDO::PARAM_STR);
    
            $q->execute();
            echo "ici c'est ok";
            return "ok";
        }
        catch(Exception $e){
            return null;
        }
    }

    /**
     * @param Parcours $parcours
     * Disable company instead of delete it
     */
    public function delete(Parcours $parcours)
    {
        try{
            $q = $this->_db->prepare('UPDATE parcours SET isActive = \'0\' WHERE idExercice = '.$parcours->getIdParcours());
    
            $q->execute();
            
            return "ok";
        }
        catch(Exception $e){
            return null;
        }
    }

    /**
     * Find a company by his ID
     * @param $parcoursId
     * @return Parcours
     */
    public function getById($parcoursId)
    {
        $parcoursId = (integer) $parcoursId;
        $q = $this->_db->query('SELECT * FROM `parcours` WHERE `idParcours` ='.$parcoursId);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new Parcours($donnees);
    }

    /**
     * Find an exercice by his name
     * @param $parcoursName
     * @return Parcours
     */
    public function getByName($parcoursName)
    {
        $parcoursName = (string) $parcoursName;
        $q = $this->_db->query('SELECT * FROM `parcours` WHERE `name` ="'.$parcoursName.'"');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new Parcours($donnees);
    }


    /**
     * Get all the companies in the BDD
     * @return array
     */
    public function getListAllParcours()
    {
        $parcours = [];
        $q=$this->_db->query('SELECT * FROM parcours ORDER BY name');

        while($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $parcours[] = new Parcours($donnees);
        }

        return $parcours;
    }

    /**
     * Update companies information
     * @param Parcours $parcours
     */

    public function update(Parcours $parcours)
    {
        try{
            $q = $this->_db->prepare('UPDATE parcours SET name = :name, date = :date  WHERE idParcours = :idParcours');
            $q->bindValue(':idParcours', $parcours->getIdParcours(), PDO::PARAM_INT);
            $q->bindValue(':name', $parcours->getName(), PDO::PARAM_STR);
            $q->bindValue(':date', $parcours->getDate(), PDO::PARAM_STR);
    
            $q->execute();
            return "ok";
        }
        catch(Exception $e){
            return null;
        }
    }

}