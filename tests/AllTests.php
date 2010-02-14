<?php
    
    require_once dirname(__FILE__) . '/init.php';
    
    class AllTests {
        public static function suite() {
            $suite = new PHPUnit_Framework_TestSuite();
            
            $suite->addTest(Class_AllTests::suite());
            $suite->addTest(IO_AllTests::suite());
            $suite->addTestSuite('NetworkTest');
            
            return $suite;
        }
    }

?>