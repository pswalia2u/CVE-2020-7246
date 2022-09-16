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
<h3 class="page-title"><?php echo __('Projects Status') ?></h1>

<?php
$lc = new cfgListingController($sf_context->getModuleName());
echo $lc->insert_button() . ' ' .  $lc->sort_button();
?>


<div class="table-scrollable">
	<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th><?php echo __('Action') ?></th>
      
      <th width="100%"><?php echo __('Name') ?></th>            
      <th><?php echo __('Default?') ?></th>      
      
      <th><?php echo __('Sort Order') ?></th>
      <th><?php echo __('Active?') ?></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($projects_statuss as $projects_status): ?>
    <tr>      
      <td><?php echo $lc->action_buttons($projects_status->getId()) ?></td>      
      <td><?php echo $projects_status->getName() ?></td>          
      <td><?php echo renderBooleanValue($projects_status->getDefaultValue()) ?></td>            
      <td><?php echo $projects_status->getSortOrder() ?></td>
      <td><?php echo renderBooleanValue($projects_status->getActive()) ?></td>
    </tr>
    <?php endforeach; ?>    
  </tbody>
</table>
</div>


<?php echo $lc->insert_button(); ?>


