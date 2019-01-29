<?php
/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2019 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace eluhr\sortablejs\assets;

use yii\web\AssetBundle;

/**
 * Class SortableJsAssetBundle
 * @package eluhr\sortablejs\assets
 * @author Elias Luhr <elias.luhr@gmail.com>
 */
class SortableJsAssetBundle extends AssetBundle
{
    public $sourcePath = '@vendor/npm/sortablejs';

    public $js = [
        'Sortable.min.js'
    ];
}
