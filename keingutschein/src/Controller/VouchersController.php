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
use App\Controller\AppController;
use Cake\Network\Email\Email;

/**
 * VoucherController only updates vouchers
 *
 */
class VouchersController extends AppController {
	/**
	 * @var array $paginate
	 *
	 * display all vouchers
	 *
	 * @return void
	 */
	public $paginate = [
		'page' => 1,
		'limit' => 24,
		'maxLimit' => 24,
		'fields' => [
			'id', 'active', 'name', 'css_icon_class', 'description', 'date_valid_until',
		],
	];

	/**
	 * edit voucher
	 *
	 * set voucher inactive & date to redeem, send mail & inform voucher provider
	 *
	 * @return void
	 */
	public function edit() {

		/* disable view & template */
		$this->autoRender = false;

		/* find voucher with given id & password */
		$query = $this->Vouchers->find("all", [
			'conditions' => [
				"id" => $this->request->data["id"],
				"password" => md5($this->request->data["password"]),
			],
		]);

		/* return first result */
		$voucher = $query->first();

		/* check if voucher exists */
		if ($query->count() == 1) {

			/* set voucher inactive & date to redeem */
			$voucher->active = 0;
			$voucher->date_to_redeem = $this->request->data["date"];
			$this->Vouchers->save($voucher);

			/* send mail & inform voucher provider */
			$this->sendMail($voucher);

			$this->response->statusCode(200);
			echo json_encode(["message" => "Danke. Der Gutschein wurde eingelöst."]);

		} else {

			/* voucher not found: error */
			$this->response->statusCode(401);
			echo json_encode(["message" => "Fehler. Das Passwort ist nicht korrekt."]);
		}
	}

	/**
	 * send mail
	 *
	 * send mail & inform voucher provider
	 * @param object $voucher
	 * @return void
	 */
	private function sendMail($voucher) {

		$email = new Email();
		$email->profile('default')
		      ->to('tooltonix@gmail.com')
		      ->from('tooltonix@gmail.com')
		      ->subject('Gutschein ' . $voucher->name . ' eingelöst')
		      ->template('voucher')
		      ->emailFormat('html')
		      ->viewVars([
			      'name' => $voucher->name,
			      'date_to_redeem' => $this->request->data["date"],
		      ])
		      ->send();
	}
}