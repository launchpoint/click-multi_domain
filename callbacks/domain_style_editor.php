<?
global $domain_style_attributes;
$domain->superform_sections = $domain_style_attributes;    
    
if(is_postback())
{
  $domain->update_attributes($params['domain']);
  if($domain->is_valid)
  {
    flash("Style settings saved.");
  }
}

$domain->superform();