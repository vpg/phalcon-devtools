<?php 

namespace Phalcon\Paginator {    interface AdapterInterface
        {

        public function __construct($config);


        public function setCurrentPage($page);


        public function getPaginate();

    }
}
