<?php
    
    /**
    * Интерфейс искры потока.
    */
    interface IO_Stream_Spark_Interface {
        /**
        * Установка опций искры.
        * 
        * @param  array|Options $options
        * @return IO_Stream_Spark_Interface Fluent interface.
        */
        public function setOptions($options = array());
        
        /**
        * Открытие потока.
        * 
        * @return boolean
        */
        public function ignite();
        
        /**
        * Возвращает "сырой" поток.
        * 
        * @return resource
        */
        public function getStream();
    }
    
?>