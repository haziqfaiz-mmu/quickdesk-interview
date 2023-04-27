<?php
interface IQueuable  {
  public function enqueue($value);
  public function dequeue():string;
  public function getQueue():array;
  public function size():int;
}

class QUEUE implements IQueuable
{
    private $_items = array();

    public function enqueue($value = NULL){
        array_push($this->_items, $value);
    }

    public function dequeue():string {
        return array_shift($this->_items);
    }

    public function getQueue():array{
        return $this->_items;
    }
    public function size() :int{
		return count($this->_items);
	}
}

class STACK implements IQueuable{

    private $_items = array();
    public function enqueue($value = NULL) {
        array_push($this->_items, $value);
    }

    public function dequeue():string {
        return array_pop($this->_items);
    }

    public function getQueue():array {
        return $this->_items;
    }

	public function size():int {
		return count($this->_items);
	}

}

?>