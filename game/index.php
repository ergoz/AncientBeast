<?php
/* Ancient Beast - Free Open Source Online PvP TBS: card game meets chess, with creatures.
 * Copyright (C) 2007-2012  Valentin Anastase (a.k.a. Dread Knight)
 *
 * This file is part of Ancient Beast.
 *
 * Ancient Beast is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * Ancient Beast is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * http://www.AncientBeast.com
 * https://github.com/FreezingMoon/AncientBeast
 * DreadKnight@FreezingMoon.org
 */
$style = '
.strike {
	text-decoration: line-through;
}';

$page_title = "Ancient Beast - Game";
require_once("../header.php");
require_once("../global.php");
?>


<iframe id="game" name="game" src="launcher/" style="margin-top:-45px; width:950px; height:566px;" seamless webkitAllowFullScreen mozAllowFullScreen allowFullScreen></iframe>
<?php start_segment("info"); ?>
<div class="center"><a href="#comment-939192362"><b>Version 0.2 (released 15th June 2013)</b></a> - <a href="https://github.com/FreezingMoon/AncientBeast/issues/" target="_blank"><b>You can report all issues on Github</b></a> - <a href="https://github.com/FreezingMoon/AncientBeast/issues/milestones" target="_blank"><b>v0.3 ETA: 14th December 2013</b></a>
There's no online multiplayer for now, but you can still play with friends by using a <b><a href="http://teamviewer.com" target="_blank">Screen Sharing Software</a></b>.
<a href="<?php echo $site_root; ?>game/AncientBeast.html" download><b>Click here if you would like to download a desktop shortcut for this awesome game. Limited time offer!</b></a></div>
<!-- <?php separate_segment(); ?>
<div class="center">Arcade mode<br>1vs1/2vs2/spectate(watch others play or sign up to get notified of important scheduled matches); casual mode (fixed lvl 50, all creatures available but in common, no account required, no rewards, no items, no stats, no Godlet configuration), sinner mode (fixed lvl 50, full stack of creatures from a sin, no accoutn required, no rewards, no items, no stats, no Godlet configuration), trivia mode(fixed lvl 50, all creatures available but in common, no account required, no rewards, no items, no stats, no Godlet configuration); gambling (bet bitcoins on scheduled matches); Advanced mode<br>Ladder (rankings, normal exp and gold), Hardcore (one life, bonus exp and gold; if defeated, must purchase new life); Expert mode<br>Tournament (entry fee, estimated prize, status, rankings, scheduled matches, previous champions), Rankings (charts with classifications and scheduled matches; also previous champions listed), Challenge (fight the Sins and Ancient Beast)</div>
TODO: move stuff above to just a pre-match screen; login box; provide video tutorial and showcase/explain various display modes and such, like braile/2d-static/2d-animated/3d/augmented-reality/virtual-reality/holographic/etc; link/QR code smartphone gamepad (image with smartphone = gamepad) as instalable app (it would need to be powered up by scanning a QR code); rankings; tournament planification; invite friends for rewards?; include recent change log? -->
<?php separate_segment("requirements"); ?>
<h3 class="indexheader"><a href="#requirements">Requirements</a></h3>

<ul>
<li>internet connection (offline version available soon)</li>
<li>a modern browser, <a href="https://www.google.com/chrome" target="_blank"><b>Google Chrome</b></a> recommended</li>
<li>16:9 full HD display recommended (game will adapt otherwise)
<li>stereo speakers (optional)</li>
<li>500 MHz Processor</li>
<li>256 MB RAM</li>
<li>200 MB HDD</li>
<li>64 MB Video Card</li>
<li>controller (keyboard, mouse, <span class='strike'>gamepad</span>, touch screen, <span class='strike'>smartphone</span> or <span class='strike'>tablet</span>)</li>
</ul>
<?php end_segment();
disqus();	
end_page(); ?>
