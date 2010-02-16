<?php
    
    /**
    * Интерфейс буферизованного потока ввода-вывода.
    */
    interface IO_Stream_Buffered_Interface extends IO_Stream_Abstract_Interface {
        /**
        * Установка контекста буферизованного потока.
        * 
        * @param  IO_Stream_Context_Interface $ctx
        * @return IO_Stream Fluent interface.
        */
        public function setContext(IO_Stream_Buffered_Context_Interface $ctx);
        
        /**
        * Установка слушателя событий буферизованного потока.
        * 
        * @param  IO_Stream_Buffered_Listener_Interface $listener
        * @return IO_Stream_Buffered Fluent interface.
        */
        public function setListener(
            IO_Stream_Buffered_Listener_Interface $listener
        );
        
        /**
        * Возвращает объект буфера чтения.
        * 
        * @return IO_Buffer_Interface
        */
        public function getReadBuffer();
        
        /**
        * Возвращает объект буфера записи.
        * 
        * @return IO_Buffer_Interface
        */
        public function getWriteBuffer();
    }
    
?>