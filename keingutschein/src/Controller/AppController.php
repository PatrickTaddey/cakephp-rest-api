<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	use \Crud\Controller\ControllerTrait;

	public $components = [
		'RequestHandler',
		'Crud.Crud' => [
			'actions' => [
				'Crud.Index',
				'Crud.View',
				'Crud.Add',
				'Crud.Edit',
				'Crud.Delete',
			],
			'listeners' => [
				'Crud.Api',
				'Crud.ApiPagination',
				'Crud.ApiQueryLog',
			],
		],
	];

	/**
	 * Initialization hook method.
	 *
	 * Use this method to add common initialization code like loading components.
	 *
	 * @return void
	 */
	public function initialize() {
		parent::initialize();
		$this->loadComponent('Flash');
	}

	/**
	 * overwrite beforeFilter to enable CORS
	 *
	 * @param Event $event
	 * @return void
	 */
	public function beforeFilter(Event $event) {

		/* allow all origins */
		$allowed_origin = $this->request->header("Origin");
		header("Access-Control-Allow-Origin: " . $allowed_origin);
		header("Access-Control-Allow-Credentials: true");
		header("Access-Control-Allow-Headers: X-CSRF-Token,X-Requested-With,Content-Type");

		/* handle options */
		if ($_SERVER["REQUEST_METHOD"] == "OPTIONS") {
			header("Access-Control-Allow-Methods: GET,PUT,POST,DELETE,OPTIONS");
			exit;
		}
	}
}
