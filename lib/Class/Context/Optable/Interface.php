<?php
    
    /**
    * Интерфейс контекста объекта, который запрашивает создание объекта 
    * настроек.
    */
    interface Class_Context_Optable_Interface extends Class_Context_Interface {
        /**
        * Возвращает новый объект настроек.
        * 
        * @return Options_Interface
        */
        public function createOptions();
    } 
    
?>