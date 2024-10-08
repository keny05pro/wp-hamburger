<?php
// アイキャッチ画像
add_theme_support('post-thumbnails');
function my_theme_setup()
{
	// テーマがタイトルタグをサポートする
	add_theme_support('title-tag');
	add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme', 'my_theme_setup');

function custom_body_class()
{
	// 特定のクラスを削除
	$classes = array_diff(array(''));
	return $classes;
}
add_filter('body_class', 'custom_body_class');

add_action('after_setup_theme', 'my_theme_setup');
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

//css js読み込み
function my_theme_enqueue_styles()
{
	// デフォルトのstyle.cssの読み込みを解除する
	wp_dequeue_style('theme-style');
	wp_deregister_style('theme-style');
	wp_dequeue_style('pagenavi-css'); 
	// 新しいCSSファイルを読み込む
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/all.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=swap');
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles', 999);

function my_custom_scripts()
{
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

	function the_score()
	{
		// 実際には何も実行しません
		return '';
	}

	function yapb_get_thumbnail()
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

add_action('edited_term', 'save_extra_category_fileds');
function save_extra_category_fileds($term_id)
{
	if (isset($_POST['Cat_meta'])) {
		$t_id = $term_id;
		$cat_meta = get_option("cat_$t_id");
		$cat_keys = array_keys($_POST['Cat_meta']);
		foreach ($cat_keys as $key) {
			if (isset($_POST['Cat_meta'][$key])) {
				$cat_meta[$key] = $_POST['Cat_meta'][$key];
			}
		}
		update_option("cat_$t_id", $cat_meta);
	}
}