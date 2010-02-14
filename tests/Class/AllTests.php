<?php
    
    require_once dirname(__FILE__) . '/../init.php';
    
    class Class_AllTests {
        public static function suite() {
            $suite = new PHPUnit_Framework_TestSuite('Class');
            
            $suite->addTest(Class_Contextable_AllTests::suite());
            
            return $suite;
        }
    }

?>