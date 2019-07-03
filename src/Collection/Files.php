<?php

namespace Teamgate\Collection;

class Files extends Collection
{
	protected $_model = 'file';
	
    protected $_uri = 'files';
	
    public function fetchRelation($objectUri, $id) 
    {
        $this->_uri = $objectUri . '/' . (int) $id . '/' . 'files';
        return $this;
    }
	
    public function attach($fileIds)
    {
        return $this->_transport->request($this->_uri, 'patch', [
        	'value' => $fileIds
        ]);
    }
}