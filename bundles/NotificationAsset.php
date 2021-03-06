<?php
/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace  suxiaolin\metronic\bundles;

use yii\web\AssetBundle;

/**
 * SpinnerAsset for spinner widget.
 */
class NotificationAsset extends AssetBundle
{
    public $sourcePath = '@suxiaolin/metronic/assets';
    public $js = [
        'plugins/bootstrap-toastr/toastr.min.js',
    ];

    public $css = [
        'plugins/bootstrap-toastr/toastr.min.css',
    ];

    public $depends = [
        'suxiaolin\metronic\bundles\CoreAsset',
    ];
}
