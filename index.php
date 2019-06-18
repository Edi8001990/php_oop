<?php

class Test{ //blueprint, pattern, object factory


        //properties = variables;
        protected $ourProperty = 'I am here';

        //getter
        function getProperty(){
          return $this->ourProperty;
        }

        //setter
        function setProperty($value){
          $this->ourProperty = $value;
        }

        //methods = functions;
        function returnString(){ // public is by default for methods/functions
          echo 'from inside object '. $this->ourProperty;
        }

        function echoOut(){
            $this->returnString();
        }


}

$object = new Test();

//$object->ourProperty = 'Value changed';

$object->setProperty('I am the new value. Read me.');

echo $object->getProperty();


 ?>
