<?

add_global('domain_settings');

if(!isset($domain_style_attributes))
{
  $alignments[] = (object)(array('id'=>'left','name'=>'Left'));
  $alignments[] = (object)(array('id'=>'center','name'=>'Center'));
  $alignments[] = (object)(array('id'=>'right','name'=>'Right'));

  $floats[] = (object)(array('id'=>'left','name'=>'Left'));
  $floats[] = (object)(array('id'=>'right','name'=>'Right'));
  
  $fonts[] = (object)(array('id'=>'Times New Roman', 'name'=>'Times New Roman'));
  $fonts[] = (object)(array('id'=>'Arial', 'name'=>'Arial'));
  
  $fontsizes[] = (object)(array('id'=>10, 'name'=>10));
  $fontsizes[] = (object)(array('id'=>11,'name'=>11));
  $fontsizes[] = (object)(array('id'=>12,'name'=>12));
  $fontsizes[] = (object)(array('id'=>14,'name'=>14));
  $fontsizes[] = (object)(array('id'=>16,'name'=>16));
  $fontsizes[] = (object)(array('id'=>18,'name'=>18));
  
  $int = array('type'=>'integer', 'display'=>'required');
  $align = array('type'=>'select', 'item_array'=>$alignments, 'display'=>'required');
  $float = array('type'=>'select', 'item_array'=>$floats, 'display'=>'required');
  $optional_image = array('type'=>'image');
  $image = array('type'=>'image', 'display'=>'required');
  $text = array('type'=>'text', 'display'=>'required');
  $color = array('type'=>'color', 'display'=>'required');;
  $size = array('type'=>'select', 'item_array'=>$fontsizes, 'display'=>'required');
  $fonts =array('type'=>'select', 'item_array'=>$fonts, 'display'=>'required'); 
  $bool = array('type'=>'check');
  
  $domain_style_attributes = array(
    'layout'=>array(
      'site_width'=>$int,
      'site_alignment'=>$align,
      'site_background_image'=>$optional_image,
      'site_background_color'=>$color,
    ),
    'header'=>array(
      'header_image'=>$image,
      'header_height'=>$int,
      'header_image_link'=>$text,
      'header_background_color'=>$color,
    ),
    'left_sidebar'=>array(
      'left_sidebar_background_color'=>$color,
      'left_sidebar_width'=>$int,
      'left_sidebar_use_background_color'=>$bool,
    ),
    'above_banner_menu'=>array(
      'top_menu_alignment'=>$float,
      'top_menu_color'=>$color,
      'top_menu_background_image'=>$optional_image,
      'top_menu_background_color'=>$color,
      'top_menu_height'=>$int,
      'top_menu_size'=>$size,
      'top_menu_link_color'=>$color,
      'top_menu_link_size'=>$size,
      'top_menu_link_hover_color'=>$color,
      'top_menu_link_hover_size'=>$size,
    ),
    
    'below_banner_menu'=>array(
      'bottom_menu_background_image'=>$optional_image,
      'bottom_menu_background_color'=>$color,
      'bottom_menu_height'=>$int,
      'bottom_menu_color'=>$color,
      'bottom_menu_size'=>$size,
      'bottom_menu_link_color'=>$color,
      'bottom_menu_link_size'=>$size,
      'bottom_menu_link_hover_color'=>$color,
      'bottom_menu_link_hover_size'=>$size,

    ),
    'footer'=>array(
      'footer_text_color'=>$color,
      'footer_text_size'=>$size,
      'footer_text_link_color'=>$color,
      'footer_text_link_size'=>$size,
      'footer_text_link_hover_color'=>$color,
      'footer_text_link_size'=>$size,
      'footer_background_color'=>$color,
    ),
    'styles_and_borders'=>array(
      'site_border_left_color'=>$color,
      'site_border_left_size_px'=>$int,
      'site_border_right_color'=>$color,
      'site_border_right_size_px'=>$int,
      'site_border_top_color'=>$color,
      'site_border_top_size_px'=>$int,
      'site_border_bottom_color'=>$color,
      'site_border_bottom_size_px'=>$int,
    ),
    'body_text'=>array(
      'site_font_type'=>$fonts,
      'h1_color'=>$color,
      'h1_size'=>$size,
      'h2_color'=>$color,
      'h2_size'=>$size,
      'h3_color'=>$color,
      'h3_size'=>$size,
      'a_color'=>$color,
      'a_size'=>$size,
      'a_hover_color'=>$color,
      'a_hover_size'=>$size,
      'body_text_color'=>$color,
      'body_text_size'=>$size,
    ),
    'content_area'=>array(
      'content_background_image'=>$image,
    ),
    'tables'=>array(
      'table_heading_background_color'=>$color,
    ),
  );
}