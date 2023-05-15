<?php
        $salaries = array
        (
            "Jay" => 5000, 
            "Ajay" => 3000,
            "Vijay" => 1500
        );
        echo "Salary of Jay is". $salaries['Jay']."<br/>";
        echo "Salary of Ajay is". $salaries['Ajay']. "<br/>";
        echo "Salary of Vijay is". $salaries['Vijay']. "<br />";

        $salaries['Jay'] = "high";
        $salaries['Ajay'] = "medium";
        $salaries['Vijay'] = "low";

        echo "Salary of Jay is ". $salaries['Jay']."<br/>";
        echo "Salary of Ajay is ". $salaries['Ajay']."<br/>";
        echo "Salary of Vijay is ". $salaries['Vijay']. "<br/>";

?>