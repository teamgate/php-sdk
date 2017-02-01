<?php

namespace Teamgate\Collection;

class People extends Collection
{
   protected $_model = 'person';
   
   public function fetchRelation($objectUri, $id) 
   {
        $this->_uri = $objectUri . '/' . (int) $id . '/' . 'people';
        return $this;
   }
}