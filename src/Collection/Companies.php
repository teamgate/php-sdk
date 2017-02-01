<?php

namespace Teamgate\Collection;

class Companies extends Collection
{
   protected $_model = 'company';
   
   public function fetchRelation($objectUri, $id) 
   {
        $this->_uri = $objectUri . '/' . (int) $id . '/' . 'companies';
        return $this;
   }

}