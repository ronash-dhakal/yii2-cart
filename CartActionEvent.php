<?php
/**
 * @link https://www.github.com/ronash-dhakal/yii2-cart
 * @copyright Copyright (c) 2016 ronash.com.np
 * @license http://www.yiiframework.com/license/
 */

namespace ronashDhakal\cart;
use yii\base\Event;


/**
 * Class CartActionEvent
 */
class CartActionEvent extends Event
{
    const ACTION_UPDATE = 'update';
    const ACTION_ITEM_PUT = 'itemPut';
    const ACTION_BEFORE_REMOVE = 'beforeRemove';
    const ACTION_REMOVE_ALL = 'removeAll';
    const ACTION_SET_ITEMS = 'setItems';

    /**
     * Name of the action taken on the cart
     * @var string
     */
    public $action;
    /**
     * Item of the cart that was affected. Could be null if action deals with all items of the cart
     * @var ItemInterface
     */
    public $item;
}
