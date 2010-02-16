<?php

    /**
    * Класс-обёртка для работы с потоками. Инкапсулирует общие функции (чтение,
    * запись, смена режима блокировки, закрытие). Функции, специфичные для
    * разных типов потоков, помещаются в искры (IO_Stream_Spark_*).
    * 
    * @todo Remix to IO_Stream_Simple, IO_Stream_Buffered, IO_Selector, 
    * IO_Spark_*?
    */
    class IO_Stream extends IO_Stream_Abstract implements IO_Stream_Interface {
        /**
        * Создание нового объекта потока.
        * 
        * @param  IO_Stream_Context_Interface $context Контекст потока.
        * @return IO_Stream
        */
        public static function create() {
            return new self();
        }
        
        /**
        * Установка контекста потока.
        * 
        * @param  IO_Stream_Context_Interface $ctx
        * @return IO_Stream Fluent interface.
        */
        public function setContext(IO_Stream_Context_Interface $ctx) {
            $this->reallySetContext($ctx);
            $this->_init();
        }
        
        /**
        * Установка слушателя событий потока.
        * 
        * @param  IO_Stream_Listener_Interface $listener
        * @return IO_Stream Fluent interface.
        */
        public function setListener(IO_Stream_Listener_Interface $listener) {
            return $this->reallySetListener($listener);
        }
    }

?>