<?php 

use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\Agenda;

$imgPath = Yii::getAlias('@root').'/imagesfrontend';
$root_folder = Yii::getAlias('@root');

?>


<div class="col-md-4 wow fadeInRight animated">
            <h3 class="text-uppercase small-line mb20">Jam <span class="text-theme-color"> Layanan</span></h3>
            <div class="latest-project">
              <ul class="hours_wigdet">
                <li>Senin<span>08:00-12:00</span></li>
                <li>Selasa<span>08:00-12:00</span></li>
                <li>Rabu<span>08:00-12:00</span></li>
                <li>Kamis<span>08:00-12:00</span></li>
                <li>Jumat<span>08:00-10:30</span></li>
                <li>Sabtu<span>08:00-11:00</span></li>
              </ul>
            </div>
          </div>