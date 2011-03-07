<?

query("delete from domain_names where domain_id = ?", $domain->id);

$names = split(',', $domain->other_names);

foreach($names as $name)
{
  $name = trim($name);
  if(!$name) continue;
  DomainName::find_or_create_by( array(
    'conditions'=>array('name = ?', $name),
    'attributes'=>array(
      'domain_id'=>$domain->id,
      'name'=>$name,
    )
  ));
}
