<?php
    
    require_once dirname(__FILE__) . '/../../init.php';
    
    class Class_Contextable_AllTests {
        public static function suite() {
            $suite = new PHPUnit_Framework_TestSuite('Class_Contextable');
            
            $suite->addTestSuite('Class_Contextable_ListenableTest');
            
            return $suite;
        }
    }

?>