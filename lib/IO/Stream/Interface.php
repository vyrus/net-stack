<?php
    
    /**
    * Интерфейс потока ввода/вывода.
    */
    interface IO_Stream_Interface extends IO_Stream_Abstract_Interface {
        /**
        * Установка контекста потока.
        * 
        * @param  IO_Stream_Context_Interface $ctx
        * @return IO_Stream Fluent interface.
        */
        public function setContext(IO_Stream_Context_Interface $ctx);
        
        /**
        * Установка слушателя событий потока.
        * 
        * @param  IO_Stream_Listener_Interface $listener
        * @return IO_Stream Fluent interface.
        */
        public function setListener(IO_Stream_Listener_Interface $listener);
    }
    
?>