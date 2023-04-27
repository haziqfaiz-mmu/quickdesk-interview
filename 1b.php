<?php
interface IQueuable  {
  public function enqueue($value);
  public function dequeue():string;
  public function getQueue():array;
  public function size():int;
}

function haziq_array_add_first(&$items, $value){
  $temp = array();
  $temp[0] = $value;
  for($i=0;$i<sizeof($items);$i++){
    $temp[$i+1] = $items[$i];
  }
  $items = $temp;
}

function haziq_array_add_last(&$items, $value){
  $items[sizeof($items)] = $value;
}

function haziq_array_remove_first(&$items):string{
  $temp = array();
  $ele = $items[0];
  
  //if(sizeof($items)!=0){
    for($i=0;$i<sizeof($items);$i++){
      $temp[$i] = $items[$i+1];
    }
    $items = $temp;
  //}
  return $ele;
}

function haziq_array_remove_last(&$items): string{
  $ele = $items[sizeof($items)-1];
  $items[sizeof($items)-1] = null;
  return $ele;
}
function haziq_push(&$items, $value){
  $items[sizeof($items)] = $value;
}

function haziq_pop(&$items): string{
  $ele = $items[sizeof($items)-1];
  $items[sizeof($items)-1] = null;
  return $ele;
}

function haziq_pop_first(&$items):string{
  $temp = array();
  $ele = $items[0];
  
  //if(sizeof($items)!=0){
    for($i=0;$i<sizeof($items);$i++){
      $temp[$i] = $items[$i+1];
    }
    $items = $temp;
  //}
  return $ele;
}
class QUEUE implements IQueuable
{
    private $_items = array();

    public function enqueue($value = NULL){
        //array_unshift($this->_items, $value);
        //echo "First element: ".$this->_items[0];
        haziq_push($this->_items, $value);
    }

    public function dequeue():string {
        //return array_shift($this->_items);
        return haziq_pop_first($this->_items);
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
        //array_push($this->_items, $value);
        haziq_push($this->_items, $value);
    }

    public function dequeue():string {
        //return array_pop($this->_items);
        return haziq_pop($this->_items);
    }

    public function getQueue():array {
        return $this->_items;
    }

	public function size():int {
		return count($this->_items);
	}

}

?>