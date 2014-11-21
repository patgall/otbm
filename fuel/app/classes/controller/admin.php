<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2014 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Admin extends Controller_Template
{

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->link_header = '/';
		$this->template->title = 'Accueil';
		$this->template->main_title = 'OTBM';
		$this->template->sub_title = 'Accueil';
		$this->template->index = 'index';
		$this->template->content = View::forge('admin', $data);
	}
}
