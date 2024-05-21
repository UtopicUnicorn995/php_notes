<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $gobal_scope = "Daniel"; // this is at the global space

    function local_var(){

        global $gobal_scope; // to gain access to a global variable inside a function
        $GLOBALS["global_scope"]; // another way to gain access to a global variable
        $local_scope = "This is a local scoped variable"; // Cannot be accessed outside this function
        echo $local_scope; 
        echo $gobal_scope;
    }

    function static_scope(){
        static $staticVar = 0;
        $staticVar ++;
        return $staticVar;
    }

    echo static_scope();
    echo static_scope();
    echo static_scope();

    // class class_scope(){
    //     public $classVar = "Hello, world!";

    //     public function myMethod(){
    //         echo $this->classVar 
    //     }
    // }

        // Class scope
    ?>
</body>
</html>