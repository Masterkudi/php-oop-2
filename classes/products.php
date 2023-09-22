<?php 

require_once __DIR__ . "/Categories.php";


class Products {

    
    public function __construct(string $_name,string $_category,int $_price)
    {
            $this->setName($_name);
            $this->setCategories($_category);
            $this->setPrice($_price);
    }

    public function getName()
    {
            return $this->name;
    }

    public function setName($name)
    {
            try{
                    if(is_numeric($name)){
                            throw new Exception("La ricerca non può essere un numero");                       
                    } else {
                            $this->name = $name;                       
                            return $this;                             
                    }
            } catch (Exception $error){
                    echo "<div class='alert alert-danger text-center fs-4'>". $error->getMessage(). "</div>";
            }
    }

    public function getPrice()
    {
            return $this->price;
    }

    public function getCategories()
    {
            return $this->category;
    }

    public function setCategories($category)
    {
            $this->category = $category;

            return $this;
    }
}
?>