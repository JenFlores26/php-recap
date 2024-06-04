<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    class Employee{
        public $id;
        public $name ;
        public $email;
        public $position;
        public $salary;

        function setValues($id, $name){
            $this->id = $id;
            $this->name = $name;
        }

        function getValues(){
            return $this->id.', '.$this->name;
        }
    }

    $employee_info  = new Employee();
    $employee_info->setValues(2, 'Jennifer');
    echo $employee_info->getValues();
    ?>
</body>
</html>