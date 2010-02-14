<?php
    
    /**
    * Основа класса, имеющего контекст и обработчик событий.
    */
    class Class_Contextable_Listenable implements Class_Contextable_Listenable_Interface {
        /**
        * Контекст объекта.
        * 
        * @var Class_Context_Interface
        */
        private $_ctx;
        
        /**
        * Обработчик событий объекта.
        * 
        * @var Class_Listener_Interface
        */
        private $_listener;                  
        
        /**
        * Установка объекта контекста.
        * 
        * @param  Class_Context_Interface $ctx
        * @return Class_Contextable_Listenable Fluent interface.
        */
        public function reallySetContext(Class_Context_Interface $ctx) {
            $this->_ctx = $ctx;
            return $this;
        }
        
        /**
        * Получение объекта контекста.
        * 
        * @return Class_Context_Interface
        */
        public function getContext() {
            return $this->_ctx;
        }
        
        /**
        * Установка обработчика событий объекта.
        * 
        * @param  Class_Listener_Interface $listener
        * @return Class_Contextable_Listenable Fluent interface.
        */
        public function reallySetListener(Class_Listener_Interface $listener) {
            $this->_listener = $listener;
            return $this;
        }
        
        /**
        * Получение обработчика событий объекта.
        * 
        * @return Class_Listener_Interface
        */
        public function getListener() {
            return $this->_listener;
        }
    }
    
?>
