<?php

namespace Teamgate\Collection;

class Collection implements \IteratorAggregate 
{
    protected $_model;

    private $_transport;
    
    protected $_stream;
    
    protected $_uri;

    public function __construct($transport) 
    {
        $this->_transport = $transport;
        $this->_uri = strtolower($this->_getShortClassName());
    }
    
    public function __get($name) 
    {
        if (!empty($this->_stream->$name)) {
            return $this->_stream->$name;
        }
    }

    public function getIterator() 
    {
        return new \ArrayIterator(array_map([$this, '_itemToObject'], $this->_stream->data));
    }
    
    private function _itemToObject($item) 
    {
        $className = '\\Teamgate\\Model\\' . ucfirst($this->_model);
        $object = new $className($this->_transport);
        $object->data = get_object_vars($item);
//        if (!empty($item['success'])) {
//            $object->success = $item['success'];
//        }
        return $object;
    }
    
    public function get($arguments = []) 
    {
        if (is_array($arguments)) {
            $this->_stream = $this->_transport->request($this->_uri, 'get', $arguments);
            return $this;
        }
        $this->_stream = $this->_transport->request($this->_uri . '/' . (int) $arguments, 'get');
        return $this->_itemToObject($this->_stream->data);
    }
    
    public function create($arguments = [])
    {
        return $this->_transport->request($this->_uri, 'post', $arguments);
    }
    
    public function update($id, $arguments = [])
    {
        return $this->_transport->request($this->_uri . '/' . (int) $id, 'put', $arguments);
    }
    
    public function delete($id)
    {
        return $this->_transport->request($this->_uri . '/' . (int) $id, 'delete');
    }
    
    protected function _getShortClassName()
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}