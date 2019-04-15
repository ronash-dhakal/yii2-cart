<?php
/**
 * @link https://www.github.com/ronash-dhakal/yii2-cart
 * @copyright Copyright (c) 2016 ronash.com.np
 * @license http://www.yiiframework.com/license/
 */

namespace ronashDhakal\cart;

/**
 * SessionStorage is extended from Storage Class
 *
 * It's specialty for handling read and write cart data into session
 *
 * Usage:
 * Configuration in block component look like this
 *		'cart' => [
 *			'class' => 'ronashDhakal\cart\Cart',
 *			'storage' => [
 *				'class' => 'ronashDhakal\cart\SessionStorage',
 *			]
 *		],
 *
 * @author Ronash Dhakal <ronashmail@gmail.com>
 * @since 1.0
 *
*/

class SessionStorage extends Storage
{
	public function read(Cart $cart)
	{
		$session = \Yii::$app->session;
		if (isset($session[$cart->id]))
			$this->unserialize($session[$cart->id],$cart);
	}

	public function write(Cart $cart)
	{
		$session = \Yii::$app->session;
		$session[$cart->id] = $this->serialize($cart);
	}

	public function lock($drop, Cart $cart)
	{
		// not implemented, only for db
	}
}
