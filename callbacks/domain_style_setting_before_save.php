<?

if (is_file_upload($domain_style_setting->sitebackgroundimage_data))
{
  if(strpos($domain_style_setting->sitebackgroundimage_data['type'],'image/') === 0)
  {
    associate_attachment($domain_style_setting, 'sitebackgroundimage');
  }
  else
  {
    flash('Specified site background image is not a recognized image format, ignoring.');
  }
}
if (is_file_upload($domain_style_setting->topmenubackgroundimage_data))
{
  if(strpos($domain_style_setting->topmenubackgroundimage_data['type'],'image/') === 0)
  {
    associate_attachment($domain_style_setting, 'topmenubackgroundimage');
  }
  else
  {
    flash('Specified top menu background image is not a recognized image format, ignoring.');
  }
}
if (is_file_upload($domain_style_setting->bottommenubackgroundimage_data))
{
  if(strpos($domain_style_setting->bottommenubackgroundimage_data['type'],'image/') === 0)
  {
    associate_attachment($domain_style_setting, 'bottommenubackgroundimage');
  }
  else
  {
    flash('Specified bottom menu background image is not a recognized image format, ignoring.');
  }
}
if (is_file_upload($domain_style_setting->headerimage_data))
{
  if(strpos($domain_style_setting->headerimage_data['type'],'image/') === 0)
  {
    associate_attachment($domain_style_setting, 'headerimage');
  }
  else
  {
    flash('Specified header image is not a recognized image format, ignoring.');
  }
}