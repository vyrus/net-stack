<?php
    
    /**
    * Интерфейс контекста объекта, запрашивающего создание буфера.
    */
    interface Class_Context_Bufferable_Interface extends Class_Context_Interface {
        /**
        * Создание нового объекта буфера ввода/вывода.
        * 
        * @var IO_Buffer_Interface
        */
        public function createBuffer();
    }
    
?>