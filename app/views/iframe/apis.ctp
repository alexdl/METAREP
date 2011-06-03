<!----------------------------------------------------------
  
  File: apis.ctp
  Description: Wrapps external Apis website (JCVI-only feature)
  in an iFrame.
  
  PHP versions 4 and 5

  METAREP : High-Performance Comparative Metagenomics Framework (http://www.jcvi.org/metarep)
  Copyright(c)  J. Craig Venter Institute (http://www.jcvi.org)

  Licensed under The MIT License
  Redistributions of files must retain the above copyright notice.

  @link http://www.jcvi.org/metarep METAREP Project
  @package metarep
  @version METAREP v 1.3.0
  @author Johannes Goll
  @lastmodified 2010-07-09
  @license http://www.opensource.org/licenses/mit-license.php The MIT License
  
<!---------------------------------------------------------->

<?php
echo $html->css('cake.generic.css');
echo $html->link("Back","/projects/view/$projectId",array('class'=>'button-left'));
echo("<p><iframe src=\"$link\" target=\"_blank\"  width=\"100%\"
style=\"height:805px\" marginheight=\"200px\" align=\"center\" scrolling=\"no\"
>[Your browser does <em>not</em> support <code>iframe</code>,
or has been configured not to display inline frames.]</iframe></p>");
?>
