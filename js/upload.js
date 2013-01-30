jQuery(document).ready(function() {

jQuery('#skyline_button').click(function() {
 formfield = jQuery('#skyline').attr('name');
 tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
 return false;
});

window.send_to_editor = function(html) {
 imgurl = jQuery('img',html).attr('src');
 jQuery('#skyline').val(imgurl);
 tb_remove();
}

});
