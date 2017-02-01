<?php

namespace Teamgate\Collection;

class CustomFields extends Collection
{
    public function fetchRelation($objectUri, $id)
    {
        $this->_uri = $objectUri . '/' . (int) $id . '/' . 'customFields';
        return $this;
    }
}