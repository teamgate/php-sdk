<?php

namespace Teamgate\Model;

class Model 
{
    protected $_uri;
    
    protected $_relations = [];

    protected $_transport;
    
    public $data = [];
    
    public function __construct($transport) 
    {
        $this->_transport = $transport;
    }
    
    public function __get($name) {
        if (isset($this->_relations[$name])) {
            return $this->_getClass($this->_relations[$name])->fetchRelation($this->_uri, $this->data['id']);
        }
    }
    
    protected function _getClass($name)
    {
        $className = '\\Teamgate\\Collection\\' . ucfirst($name);
        return new $className($this->_transport);
    }
    
    public function update($data)
    {
        return $this->_transport->request($this->_uri . '/' . (int) $this->data['id'], 'put', $data);
    }
    
    public function delete()
    {
        return $this->_transport->request($this->_uri . '/' . (int) $this->data['id'], 'delete');
    }
}