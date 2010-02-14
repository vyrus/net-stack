<?php
    
    require_once dirname(__FILE__) . '/../../init.php';
    
    class Class_Contextable_ListenableTest extends PHPUnit_Framework_TestCase {
        /**
        * Установка контекста.
        */
        public function testSetGetContext() {
            /* Создаём объект */
            $obj = new Class_Contextable_Listenable();
            
            /* Создаём заглушку контекста */
            $ctx = $this->getMock('Class_Context_Interface');
            
            /* Устанавливаем контекст и проверяем fluent interface */
            $this->assertEquals($obj, $obj->reallySetContext($ctx));
            $this->assertEquals($ctx, $obj->getContext());
        }
        
        /**
        * Установка/получение слушателя.
        */
        public function testSetGetListener() {
            /* Создание заглушки слушателя */
            $listener = $this->getMock('Class_Listener_Interface');
            
            /* Создаём объект */
            $obj = new Class_Contextable_Listenable();
            
            /* Устанавливаем слушателя и проверяем fluent interface */
            $this->assertEquals($obj, $obj->reallySetListener($listener));
            $this->assertEquals($listener, $obj->getListener());
        }
    }
    
?>