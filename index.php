<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Jennifer{
            public $name;
            public $age;
            public $address;
            public $gender;

            function setInfo($name, $age, $address, $gender){//setting values 
                $this->name = $name;
                $this->age = $age;
                $this->address = $address;
                $this->gender = $gender;
            }

            function getInfo(){//getting the values
                echo 'Name: '.$this->name.'Age '.$this->age;
            }
        }

        $jen1 = new Jennifer();
        $jen1->setInfo('Anna', 24, 'Las Pinas', 'female');
        $jen1->getInfo();
    ?>
</body>
</html>