<?php
/*
 * @version $Id: HEADER 15930 2011-10-30 15:47:55Z tsmr $
 -------------------------------------------------------------------------
 badges plugin for GLPI
 Copyright (C) 2009-2016 by the badges Development Team.

 https://github.com/InfotelGLPI/badges
 -------------------------------------------------------------------------

 LICENSE

 This file is part of badges.

 badges is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 badges is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with badges. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */


if (!defined('GLPI_ROOT')) {
   die("Sorry. You can't access directly to this file");
}


class PluginBadgesServicecatalog extends CommonGLPI {

   static $rightname = 'plugin_badges';

   var $dohistory = false;

   static function canUse() {
      return Session::haveRight(self::$rightname, READ);
   }

   static function getMenuLogo() {
      global $CFG_GLPI;

      return "<a class='bt-badges' href='" . $CFG_GLPI['root_doc'] . "/plugins/badges/front/wizard.php'></a>";

   }

   static function getMenuTitle() {
      global $CFG_GLPI;

      return "<a href='" . $CFG_GLPI['root_doc'] . "/plugins/badges/front/wizard.php' class='de-em'>
      <span class='de-em'>" . __('Manage', 'servicecatalog') . " </span><span class='em'>" . __('Temporary badges', 'badges') . "</span></a>";

   }


   static function getMenuComment() {

      echo __('Manage temporary badges', 'badges');
   }

   static function getLinkList() {
      return "";
   }

   static function getList() {
      return "";
   }
}
