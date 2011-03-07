<?

$domains = Domain::find_all(array(
  'order'=>'name'
));

global $domain_sections;


$new_object = Domain::find_by_name('default');
$new_object->id = null;
$new_object->is_new = true;
$new_object->name = uniqid();
$new_object->title = $new_object->name;
$new_object->superform_sections = $domain_sections;

$meta = array(
  'objects'=>$domains,
  'klass'=>'Domain',
  'list'=>array('title', 'name'),
  'new_object'=>$new_object,
  'sections'=>$domain_sections,
);

superlist($meta);  
