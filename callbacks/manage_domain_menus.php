<?

$d = Domain::find_by_id($params['id']);

$d->superlist_for('menu_items');
