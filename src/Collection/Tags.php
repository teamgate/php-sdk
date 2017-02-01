<?php

namespace Teamgate\Collection;

class Tags extends Collection
{
    public function fetchRelation($objectUri, $id)
    {
        $this->_uri = $objectUri . '/' . (int) $id . '/' . 'tags';
        return $this;
    }
    
    public function replace($data)
    {
        return $this->_transport->request($this->_uri, 'patch', $data);
    }
}