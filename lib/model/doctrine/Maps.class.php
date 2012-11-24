<?php

/**
 * Maps
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    PhpProject1
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Maps extends BaseMaps {

    public function getImagePath() {
        switch ($this->getMapName()) {
            case "de_dust2_se":
            case "de_dust2":
                return "/images/maps/csgo/de_dust2_se.jpg";
            case "de_inferno_se":
            case "de_inferno":
                return "/images/maps/csgo/de_inferno_se.png";
            case "de_nuke_se":
            case "de_nuke":
                return "/images/maps/csgo/de_nuke_se.jpg";
            case "de_nuke_ve":
                return "/images/maps/csgo/de_nuke_ve.png";
            case "de_mirage_csgo":
                return "/images/maps/csgo/de_mirage_csgo.jpg";
            case "de_train_se":
            case "de_train":
                return "/images/maps/csgo/de_train_se.jpg";
            case "de_mill_b1":
                return "/images/maps/csgo/mill_b1.png";
        }
    }
    
    public function getPlayer() {
        return PlayersTable::getInstance()->createQuery()->where("map_id = ?", $this->getId())->orderBy("team")->execute();
    }

}