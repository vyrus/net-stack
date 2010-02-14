<?php
    
    /**
    * Интерфейс объекта, имеющего контекст и обработчик событий.
    */
    interface Class_Contextable_Listenable_Interface {
        /**
        * Установка объекта контекста.
        * 
        * @param  Class_Context_Interface $ctx
        * @return Class_Contextable_Listenable Fluent interface.
        */
        public function reallySetContext(Class_Context_Interface $ctx);
        
        /**
        * Получение объекта контекста.
        * 
        * @return Class_Context_Interface
        */
        public function getContext();
        
        /**
        * Установка обработчика событий объекта.
        * 
        * @param  Class_Listener_Interface $listener
        * @return Class_Contextable_Listenable Fluent interface.
        */
        public function reallySetListener(Class_Listener_Interface $listener);
        
        /**
        * Получение обработчика событий объекта.
        * 
        * @return Class_Listener_Interface
        */
        public function getListener();
    }
    
?>