<?
$host = $subdomain ? "$subdomain.$domain" : $domain;
$domain_settings = Domain::find_by_name($host);
if(!$domain_settings) $domain_settings = Domain::find_by_name($subdomain);
if(!$domain_settings) $domain_settings = Domain::find_by_name($domain);
if(!$domain_settings)
{
  $dn = DomainName::find_by_name($host);
  if(!$dn) $dn = DomainName::find_by_name($subdomain);
  if(!$dn) $dn = DomainName::find_by_name($domain);
  if($dn)
  {
    redirect_to("http://".$dn->domain->host);
  }
}
if(!$domain_settings) $domain_settings = Domain::find_by_name('default');

if($domain_settings->description) meta_description($domain_settings->description);
if($domain_settings->keywords) meta_keywords($domain_settings->keywords);
event('domain_selected');