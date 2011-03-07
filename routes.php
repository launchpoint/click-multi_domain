<?

map('content', 'admin/domains', 'manage_domains', 'manage_domains');
map('content', 'admin/domains/:id/menus', 'manage_domain_menus', 'manage_domain_menus');
map('content', 'admin/domains/:id/style', 'manage_domain_style', 'manage_domain_style');


map('content', 'domains/list_menus', 'admin_menu_list', 'admin_menu_list');
map ('content', 'domains/create_menu_item', 'admin_create_menu_item', 'admin_create_menu_item');
map ('content', 'domains/edit_menu_item/:id', 'admin_edit_menu_item', 'admin_edit_menu_item');

map('content', 'domains/list','admin_domain_list', 'admin_domain_list');
map('content', 'domains/add','admin_domain_edit', 'admin_domain_add');
map('content', 'domains/:id/edit','admin_domain_edit', 'admin_domain_edit');
map('content', 'domains/:id/edit_style','edit_domain_style', 'edit_domain_style');
