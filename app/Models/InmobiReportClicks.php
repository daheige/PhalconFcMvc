<?php
namespace App\Models;
/**
 * Inmobi上报点击
 * author: flycorn
 * email: ym1992it@163.com
 * time: 16/12/7 上午11:58
 */
use Phalcon\Mvc\Model;
class InmobiReportClicks extends Model
{
    public function initialize()
    {
        $this->setSource("inmobi_report_clicks");
    }
}