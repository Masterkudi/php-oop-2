<?php
    
    
    $dog = new Dogs();
    $cat = new Cats();

    $productList = [

    new PetToys (
        _name: "Rope Bone Dog Toy", 
        _category: $dog->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/223864/trixie-cane-gioco-corda.jpg?v=1781568694",
        _price: 5
    ),

    new PetToys (
        _name: "Labirint Rubber Dog Snack Ball", 
        _category: $dog->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/218027/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-dog-activity-palla-snack-in-gomma-naturale-tric87.jpg?v=1781655300",
        _price: 5
    ),

    new PetToys (
        _name: "Antique Pink Livia Scratching Post", 
        _category: $cat->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/265339/trixie-tiragraffi-livia-rosa-antico-64cm.jpg?v=1781673132",
        _price: 20
    ),

    new petKennels ( 
        _name: "Rectangular Striped Kennel",
        _category: $dog->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/273263/LUNA-TEO-CUCCIA-RETT.-CM.-60-RIGHE.jpg?v=1780877974",
        _price: 50
    ),

    new petKennels (
        _name: "Gray Fleece Kennel", 
        _category: $cat->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/277273/luna-e-teo-cuccia-pile-grigia.jpg?v=1780247049",
        _price: 30
    ),

    new petKennels (
        _name: "Elf Hat Christmas Bunk", 
        _category: $cat->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/276486/croci-cuccetta-di-natale-per-cane-elf-hat.jpg?v=1779546400",
        _price: 20
    ),

    new petFood (
        _name: "Natural Trainer Cat Sterilized Salmon", 
        _category: $cat->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/248329/trainer-natural-gatto-sterilized-salmone.jpg?v=1781731697",
        _price: 10
    ),
    
    new petFood (
        _name: "Monge Sterilized rich in Chicken", 
        _category: $cat->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/271838/400.jpg?v=1781731429",
        _price: 10
    ),
    
    new petFood (
        _name: "Monge All Breeds Adult Salmon and Rice", 
        _category: $dog->getImg(), 
        _img: "https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1781730644",
        _price: 10
    ),
    
    ]   

    
                
?>