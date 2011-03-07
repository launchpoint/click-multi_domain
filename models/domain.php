<?

Domain::$attribute_types['other_names'] = array('type'=>'textarea', 'required'=>false);


function domain_has_ancestor($d, $a)
{
  while($d->id != $a->id)
  {
    $d = $d->parent_domain;
    if (!$d) break;
  }
  return $d;
}

function domain_get_url__d($d)
{
  return "http://{$d->host}";
}

function domain_get_host__d($d)
{
  global $__core;
  if(endswith($d->name, ".com", ".org", ".edu", ".mobi", ".me", ".gov")) return $d->name;
  return "{$d->name}.{$__core['domain']}";
}

function domain_get_hosts__d($d)
{
  $hosts = array($d->host);
  foreach($d->domain_names as $dn)
  {
    $hosts[] = $dn->host;
  }
  return $hosts;
}