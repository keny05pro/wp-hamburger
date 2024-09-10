<?php

//外観
function register_menu()
{
	register_nav_menu('primary', __('Primary Menu', 'theme-slug'));
}
add_action('after_setup_theme', 'register_menu');

function mytheme_custom_header_setup()
{
	add_theme_support('custom-header');
}
add_action('after_setup_theme', 'mytheme_custom_header_setup');

//ウィジェット
function widgets()
{
	register_sidebar(array(
		'name' => 'サイドバー',/* ←追加したいウィジェットの名前 */
		'description' => 'サイドバーウィジェット',/* ←追加したいウィジェットの概要 */
		'id' => 'sidebar', /* ←追加したいウィジェットのID */
	));

	register_sidebar(array(
		'name' => 'フッター',/* ←追加したいウィジェットの名前 */
		'description' => 'フッターウィジェット',/* ←追加したいウィジェットの概要 */
		'id' => 'footer', /* ←追加したいウィジェットのID */
	));
}
add_action('widgets_init', 'widgets');

//css js読み込み
function my_theme_enqueue_styles()
{
	// デフォルトのstyle.cssの読み込みを解除する
	wp_dequeue_style('theme-style');
	wp_deregister_style('theme-style');

	// 新しいCSSファイルを読み込む
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
	wp_enqueue_style('material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=swap');

}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles', 999);

function my_custom_scripts()
{
	// FontAwesomeの読み込み
	wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/675f324320.js', array(), null, true);

	// カスタムスクリプトの読み込み
	wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'my_custom_scripts');

function my_global_variables()
{
	global $imgPath;
	$imgPath = get_template_directory_uri() . '/assets/images/';
}
add_action('wp_head', 'my_global_variables');

//ダミー関数
if (! function_exists('get_field')) {
	function get_field($field_name, $post_id = false)
	{
		// 実際には何も実行しません
		return '';
	}
	
	function z_taxonomy_image_url()
	{
		// 実際には何も実行しません
		return '';
	}
	function wp_pagenavi()
	{
		// 実際には何も実行しません
		return '';
	}
}

//カテゴリー項目追加
add_action('edit_category_form_fields', 'extra_category_fields');
function extra_category_fields($tag)
{
	$t_id = $tag->term_id;
	$cat_meta = get_option("cat_$t_id");
?>
	<tr class="form-field">
		<th><label for="heading">見出し</label></th>
		<td><input type="text" name="Cat_meta[heading]" id="heading" size="25" value="<?php if (isset($cat_meta['heading'])) echo esc_html($cat_meta['heading']) ?>" /></td>
	</tr>
	
<?php
}

add_action ( 'edited_term', 'save_extra_category_fileds');
function save_extra_category_fileds( $term_id ) {
    if ( isset( $_POST['Cat_meta'] ) ) {
       $t_id = $term_id;
       $cat_meta = get_option( "cat_$t_id");
       $cat_keys = array_keys($_POST['Cat_meta']);
          foreach ($cat_keys as $key){
          if (isset($_POST['Cat_meta'][$key])){
             $cat_meta[$key] = $_POST['Cat_meta'][$key];
          }
       }
       update_option( "cat_$t_id", $cat_meta );
    }
}

