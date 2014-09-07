<?php 

namespace Phalcon\Mvc {    interface CollectionInterface
        {

        public function __construct($dependencyInjector=null);


        public function setId($id);


        public function getId();


        public function getReservedAttributes();


        public function getSource();


        public function setConnectionService($connectionService);


        public function getConnection();


        public function readAttribute($attribute);


        public function writeAttribute($attribute, $value);


        public static function cloneResult($collection, $document);


        public function fireEvent($eventName);


        public function fireEventCancel($eventName);


        public function validationHasFailed();


        public function getMessages();


        public function appendMessage($message);


        public function save();


        public static function findById($id);


        public static function findFirst($parameters=null);


        public static function find($parameters=null);


        public static function count($parameters=null);


        public function delete();

    }
}
