<?php
/**
*qdPM
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@qdPM.net so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade qdPM to newer
* versions in the future. If you wish to customize qdPM for your
* needs please refer to http://www.qdPM.net for more information.
*
* @copyright  Copyright (c) 2009  Sergey Kharchishin and Kym Romanets (http://www.qdpm.net)
* @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/
?>
<h3 class="page-title"><?php echo $projects->getName() ?></h3>


<div class="project-short-info">
  <table>
    <tr>
      
      <?php if($projects->getProjectsStatusId()>0) echo '<td><div><span>' . __('Status') . ':</span> ' . $projects->getProjectsStatus()->getName() . '</div></td>';?>
      <?php if($projects->getProjectsTypesId()>0) echo '<td><div><span>' . __('Type') . ':</span> ' . $projects->getProjectsTypes()->getName() . '</div></td>';?>

      <td><?php echo link_to_modalbox(__('More Info'),'projects/info?id=' . $projects->getId()) ?></td>
      <td><?php if(Users::hasAccess('edit','projects',$sf_user,$projects->getId())) echo link_to_modalbox(__('Edit Details'),'projects/edit?id=' . $projects->getId() . '&redirect_to=projectsComments') ?></td>
    </tr>        
  </table>
</div>


<div id="projectMenuContainer">
  <div id="projectMenuBox"> 
    <?php $m = new projectsMenuController($sf_user,$sf_request); echo renderYuiMenu('projectMenu',$m->buildMenu($sf_context)) ?>
  </div>
</div>

<script type="text/javascript">
    YAHOO.util.Event.onContentReady("projectMenu", function () 
    {
        var oMenuBar = new YAHOO.widget.MenuBar("projectMenu", {
                                                autosubmenudisplay: true,
                                                hidedelay: 750,
                                                submenuhidedelay: 0,
                                                showdelay: 150,
                                                lazyload: false });
        oMenuBar.render();
    });
              
</script>


