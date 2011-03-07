<?

function domain_name_get_host__d($d)
{
  if(endswith($d->name, ".com", ".org", ".edu", ".mobi", ".me", ".gov")) return $d->name;
  return "{$d->name}.painlessprogramming.com";
}