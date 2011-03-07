<?

MenuItem::$attribute_types['location'] = array('type'=>'select', 'item_array'=>'top,bottom');

function menu_item_get_name__d($m)
{
  return $m->title;
}