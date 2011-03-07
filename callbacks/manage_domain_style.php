<?

$domain = Domain::find_by_id($params['id']);
event('domain_style_editor', array('domain'=>$domain));