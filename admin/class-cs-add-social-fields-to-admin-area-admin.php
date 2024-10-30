<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://chetansatasiya.com/blog
 * @since      1.0.0
 *
 * @package    Cs_Add_Social_Fields_To_Admin_Area
 * @subpackage Cs_Add_Social_Fields_To_Admin_Area/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Cs_Add_Social_Fields_To_Admin_Area
 * @subpackage Cs_Add_Social_Fields_To_Admin_Area/admin
 * @author     Chetan Satasiya <chetansatasiya88@gmail.com>
 */
class Cs_Add_Social_Fields_To_Admin_Area_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cs_Add_Social_Fields_To_Admin_Area_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cs_Add_Social_Fields_To_Admin_Area_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/cs-add-social-fields-to-admin-area-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cs_Add_Social_Fields_To_Admin_Area_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cs_Add_Social_Fields_To_Admin_Area_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/cs-add-social-fields-to-admin-area-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * @param $user
	 *
	 * @since 1.0.0
	 * @author Chetan Satasiya
	 */
	public function cs_profile_fields( $user ) {
		?>

		<h3>Social Sites</h3>

		<table class="form-table">

			<tr>
				<th><label for="cs_twitter">Twitter</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_twitter" id="cs_twitter" value="<?php echo esc_attr( get_the_author_meta( 'cs_twitter', $user->ID ) ); ?>" /><br />
					<span class="description">Your Twitter Username</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_facebook">Facebook</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_facebook" id="cs_facebook" value="<?php echo esc_attr( get_the_author_meta( 'cs_facebook', $user->ID ) ); ?>" /><br />
					<span class="description">Your Facebook Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_linkedin">Linkedin</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_linkedin" id="cs_linkedin" value="<?php echo esc_attr( get_the_author_meta( 'cs_linkedin', $user->ID ) ); ?>" /><br />
					<span class="description">Your Linkedin Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_qzone">QZONE</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_qzone" id="cs_qzone" value="<?php echo esc_attr( get_the_author_meta( 'cs_qzone', $user->ID ) ); ?>" /><br />
					<span class="description">Your QZONE Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_tumblr">TUMBLR</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_tumblr" id="cs_tumblr" value="<?php echo esc_attr( get_the_author_meta( 'cs_tumblr', $user->ID ) ); ?>" /><br />
					<span class="description">Your TUMBLR Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_instagram">INSTAGRAM</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_instagram" id="cs_instagram" value="<?php echo esc_attr( get_the_author_meta( 'cs_instagram', $user->ID ) ); ?>" /><br />
					<span class="description">Your INSTAGRAM Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_google_plus">GOOGLE+</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_google_plus" id="cs_google_plus" value="<?php echo esc_attr( get_the_author_meta( 'cs_google_plus', $user->ID ) ); ?>" /><br />
					<span class="description">Your GOOGLE+ Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_baidu_tieba">BAIDU TIEBA</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_baidu_tieba" id="cs_baidu_tieba" value="<?php echo esc_attr( get_the_author_meta( 'cs_baidu_tieba', $user->ID ) ); ?>" /><br />
					<span class="description">Your BAIDU TIEBA Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_pinterest">PINTEREST</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_pinterest" id="cs_pinterest" value="<?php echo esc_attr( get_the_author_meta( 'cs_pinterest', $user->ID ) ); ?>" /><br />
					<span class="description">Your PINTEREST Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_reddit">REDDIT</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_reddit" id="cs_reddit" value="<?php echo esc_attr( get_the_author_meta( 'cs_reddit', $user->ID ) ); ?>" /><br />
					<span class="description">Your REDDIT Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_youtube">YOUTUBE</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_youtube" id="cs_youtube" value="<?php echo esc_attr( get_the_author_meta( 'cs_youtube', $user->ID ) ); ?>" /><br />
					<span class="description">Your YOUTUBE Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_flickr">FLICKR</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_flickr" id="cs_flickr" value="<?php echo esc_attr( get_the_author_meta( 'cs_flickr', $user->ID ) ); ?>" /><br />
					<span class="description">Your FLICKR Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_meetup">MEETUP</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_meetup" id="cs_meetup" value="<?php echo esc_attr( get_the_author_meta( 'cs_meetup', $user->ID ) ); ?>" /><br />
					<span class="description">Your MEETUP Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_tout">TOUT</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_tout" id="cs_tout" value="<?php echo esc_attr( get_the_author_meta( 'cs_tout', $user->ID ) ); ?>" /><br />
					<span class="description">Your TOUT Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_meetme">MEETME</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_meetme" id="cs_meetme" value="<?php echo esc_attr( get_the_author_meta( 'cs_meetme', $user->ID ) ); ?>" /><br />
					<span class="description">Your MEETME Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_deviantart">DEVIANTART</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_deviantart" id="cs_deviantart" value="<?php echo esc_attr( get_the_author_meta( 'cs_deviantart', $user->ID ) ); ?>" /><br />
					<span class="description">Your DEVIANTART Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_buzznet">BUZZNET</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_buzznet" id="cs_buzznet" value="<?php echo esc_attr( get_the_author_meta( 'cs_buzznet', $user->ID ) ); ?>" /><br />
					<span class="description">Your BUZZNET Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_we_heart_it">WE HEART IT</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_we_heart_it" id="cs_we_heart_it" value="<?php echo esc_attr( get_the_author_meta( 'cs_we_heart_it', $user->ID ) ); ?>" /><br />
					<span class="description">Your WE HEART IT Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_friendster">FRIENDSTER</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_friendster" id="cs_friendster" value="<?php echo esc_attr( get_the_author_meta( 'cs_friendster', $user->ID ) ); ?>" /><br />
					<span class="description">Your FRIENDSTER Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_classmates">CLASSMATES</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_classmates" id="cs_classmates" value="<?php echo esc_attr( get_the_author_meta( 'cs_classmates', $user->ID ) ); ?>" /><br />
					<span class="description">Your CLASSMATES Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_vine">VINE</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_vine" id="cs_vine" value="<?php echo esc_attr( get_the_author_meta( 'cs_vine', $user->ID ) ); ?>" /><br />
					<span class="description">Your VINE Profile URL</span>
				</td>
			</tr>

			<tr>
				<th><label for="cs_wayn">WAYN</label></th>

				<td>
					<input style="width: 40%;" type="text" name="cs_wayn" id="cs_wayn" value="<?php echo esc_attr( get_the_author_meta( 'cs_wayn', $user->ID ) ); ?>" /><br />
					<span class="description">Your WAYN Profile URL</span>
				</td>
			</tr>


		</table>

		<?php
	}

	/**
	 * @param $user_id
	 *
	 * @return bool
	 *
	 * @since 1.0.0
	 * @author Chetan Satasiya
	 */
	public function cs_save_profile_fields( $user_id ) {
		if ( !current_user_can( 'edit_user', $user_id ) )
			return false;

		update_user_meta( $user_id, 'cs_twitter', $_POST['cs_twitter'] );
		update_user_meta( $user_id, 'cs_facebook', $_POST['cs_facebook'] );
		update_user_meta( $user_id, 'cs_linkedin', $_POST['cs_linkedin'] );
		update_user_meta( $user_id, 'cs_qzone', $_POST['cs_qzone'] );
		update_user_meta( $user_id, 'cs_tumblr', $_POST['cs_tumblr'] );
		update_user_meta( $user_id, 'cs_instagram', $_POST['cs_instagram'] );
		update_user_meta( $user_id, 'cs_google_plus', $_POST['cs_google_plus'] );
		update_user_meta( $user_id, 'cs_baidu_tieba', $_POST['cs_baidu_tieba'] );
		update_user_meta( $user_id, 'cs_pinterest', $_POST['cs_pinterest'] );
		update_user_meta( $user_id, 'cs_reddit', $_POST['cs_reddit'] );
		update_user_meta( $user_id, 'cs_youtube', $_POST['cs_youtube'] );
		update_user_meta( $user_id, 'cs_flickr', $_POST['cs_flickr'] );
		update_user_meta( $user_id, 'cs_meetup', $_POST['cs_meetup'] );
		update_user_meta( $user_id, 'cs_tout', $_POST['cs_tout'] );
		update_user_meta( $user_id, 'cs_meetme', $_POST['cs_meetme'] );
		update_user_meta( $user_id, 'cs_deviantart', $_POST['cs_deviantart'] );
		update_user_meta( $user_id, 'cs_buzznet', $_POST['cs_buzznet'] );
		update_user_meta( $user_id, 'cs_we_heart_it', $_POST['cs_we_heart_it'] );
		update_user_meta( $user_id, 'cs_friendster', $_POST['cs_friendster'] );
		update_user_meta( $user_id, 'cs_classmates', $_POST['cs_classmates'] );
		update_user_meta( $user_id, 'cs_vine', $_POST['cs_vine'] );
		update_user_meta( $user_id, 'cs_wayn', $_POST['cs_wayn'] );
	}
}
