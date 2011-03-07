<?

if(!isset($domain_sections))
{
  $domain_sections = array(
    'basic'=>array(
      'title'=>array('display'=>'required'),
      'name'=>array('display'=>'required'),
      'other_names'=>array('display'=>'required'),
    ),
    'meta'=>array(
      'description',
      'keywords'
    ),
  );

}