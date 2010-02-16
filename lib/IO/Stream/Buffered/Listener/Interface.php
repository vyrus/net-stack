<?php
    
    /**
    * Интерфейс обработчика событий буферизованного потока.
    */
    interface IO_Stream_Buffered_Listener_Interface extends Class_Listener_Interface {
        /**
        * Обработчик события чтения данных из потока.
        * 
        * @param  IO_Stream_Buffered_Interface $stream Поток, для которого вызывается обработчик.
        * @param  int $bytes_read Размер считанного в буфер блока данных в байтах.
        * @return void
        */
        public function onStreamRead(
            IO_Stream_Buffered_Interface $stream, $bytes_read
        );
        
        /**
        * Обработчик события записи данных в поток.
        * 
        * @param  IO_Stream_Buffered_Interface $stream Поток, для которого вызывается обработчик.
        * @param  int $bytes_written Размер записанного блока данных из буфера в байтах.
        * @return void 
        */
        public function onStreamWrite(
            IO_Stream_Buffered_Interface $stream, $bytes_written
        );
        
        /**
        * Обработчик события закрытия потока.
        * 
        * @param  IO_Stream_Buffered_Interface $stream Поток, для которого вызывается обработчик.
        * @return void
        */
        public function onStreamClose(IO_Stream_Buffered_Interface $stream);
        
        /**
        * Обработчик события ошибки при работе с потоком.
        * 
        * @param  IO_Stream_Buffered_Interface $stream Поток, для которого вызывается обработчик.
        * @param  string $error Текст ошибки.
        * @return void
        */
        public function onStreamError(
            IO_Stream_Buffered_Interface $stream, $error
        );
    }

?>