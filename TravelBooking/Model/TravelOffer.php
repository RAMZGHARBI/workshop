<?php
class TravelOffer {
    // Attributs privés
    private $id;
    private $destination;
    private $description;
    private $price;
    private $startDate;
    private $endDate;
    private $disponibility; 
    private $categorie; 


    // le Constructeur paramétré
    public function __construct($id, $destination, $description, $price, $startDate, $endDate,$disponibility,$categorie) {
        $this->id = $id;
        $this->destination = $destination;
        $this->description = $description;
        $this->price = $price;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->disponibility = $disponibility;
        $this->categorie = $categorie; 
    }

    // la Méthode show()
    public function show() {
        echo "<table border='2'>
                <tr>
                    <th>ID</th>
                    <th>Destination</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>disponibility</th>
                    <th>categorie</th>
                    
                
                </tr>
                <tr>
                    <td>{$this->id}</td>
                    <td>{$this->destination}</td>
                    <td>{$this->description}</td>
                    <td>{$this->price}</td>
                    <td>{$this->startDate}</td>
                    <td>{$this->endDate}</td>
                    <td>{$this->disponibility}</td>
                    <td>{$this->categorie}</td>
                    
                    

                </tr>
              </table>";
    }
}
?> 