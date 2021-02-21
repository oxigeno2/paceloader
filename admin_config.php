<?php

// Generated e107 Plugin Admin Area 

require_once('../../class2.php');
if (!getperms('P')) 
{
	e107::redirect('admin');
	exit;
}

// e107::lan('paceloader',true);


class paceloader_adminArea extends e_admin_dispatcher
{

	protected $modes = array(	
	
		'main'	=> array(
			'controller' 	=> 'paceloader_ui',
			'path' 			=> null,
			'ui' 			=> 'paceloader_form_ui',
			'uipath' 		=> null
		),
		

	);	
	
	
	protected $adminMenu = array(
			
		'main/prefs' 		=> array('caption'=> LAN_PREFS, 'perm' => 'P'),	

		// 'main/div0'      => array('divider'=> true),
		// 'main/custom'		=> array('caption'=> 'Custom Page', 'perm' => 'P'),
		
	);

	protected $adminMenuAliases = array(
		'main/edit'	=> 'main/list'				
	);	
	
	protected $menuTitle = 'Pace Loader';
}




				
class paceloader_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Pace Loader';
		protected $pluginName		= 'paceloader';
	//	protected $eventName		= 'paceloader-'; // remove comment to enable event triggers in admin. 		
		protected $table			= '';
		protected $pid				= '';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
		protected $batchExport     = true;
		protected $batchCopy		= true;

	//	protected $sortField		= 'somefield_order';
	//	protected $sortParent      = 'somefield_parent';
	//	protected $treePrefix      = 'somefield_title';

	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= ' DESC';
	
		protected $fields 		= array (
		);		
		
		protected $fieldpref = array();
		

	//	protected $preftabs        = array('General', 'Other' );
		protected $prefs = array(
			'paceloader_theme'		=> array('title'=> LAN_PACE_ADMIN_001, 'tab'=>0, 'type'=>'dropdown', 'data' => 'str', 'help'=>'', 'writeParms' => array()),
			'paceloader_color'		=> array('title'=> LAN_PACE_ADMIN_002, 'tab'=>0, 'type'=>'dropdown', 'data' => 'str', 'help'=>'', 'writeParms' => array()),
		); 

	
		public function init()
		{
			// This code may be removed once plugin development is complete. 
			if(!e107::isInstalled('paceloader'))
			{
				e107::getMessage()->addWarning("This plugin is not yet installed. Saving and loading of preference or table data will fail.");
			}
			
			// Set drop-down values (if any). 
		$this->theme = array(
		'barber-shop' => LAN_PACE_ADMIN_003, 
		'big-counter' => LAN_PACE_ADMIN_004, 
		'bounce' => LAN_PACE_ADMIN_005, 
		'center-atom' => LAN_PACE_ADMIN_006, 
		'center-circle' => LAN_PACE_ADMIN_007, 
		'center-radar' => LAN_PACE_ADMIN_008, 
		'center-simple' => LAN_PACE_ADMIN_009, 
		'corner-indicator' => LAN_PACE_ADMIN_010, 
		'fill-left' => LAN_PACE_ADMIN_011, 
		'flash' => LAN_PACE_ADMIN_012, 
		'flat-top' => LAN_PACE_ADMIN_013, 
		'loading-bar' => LAN_PACE_ADMIN_014, 
		'mac-osx' => LAN_PACE_ADMIN_015, 
		'minimal' => LAN_PACE_ADMIN_016, 
		'material' => LAN_PACE_ADMIN_017 
		);
		$this->prefs['paceloader_theme']['writeParms'] = $this->theme;
		
		$this->color = array(
		'black' => LAN_PACE_ADMIN_018,
		'blue' => LAN_PACE_ADMIN_019, 
		'green' => LAN_PACE_ADMIN_020, 
		'orange' => LAN_PACE_ADMIN_021, 
		'pink' => LAN_PACE_ADMIN_022, 
		'purple' => LAN_PACE_ADMIN_023, 
		'red' => LAN_PACE_ADMIN_024, 
		'silver' => LAN_PACE_ADMIN_025, 
		'white' => LAN_PACE_ADMIN_026, 
		'yellow' => LAN_PACE_ADMIN_027
		);
		$this->prefs['paceloader_color']['writeParms'] = $this->color;
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
		
		// left-panel help menu area. (replaces e_help.php used in old plugins)
		public function renderHelp()
		{


		}
			
	/*	
		// optional - a custom page.  
		public function customPage()
		{
			$text = 'Hello World!';
			$otherField  = $this->getController()->getFieldVar('other_field_name');
			return $text;
			
		}
		
	
		
		
	*/
			
}
				


class paceloader_form_ui extends e_admin_form_ui
{

}		
		
		
new paceloader_adminArea();

require_once(e_ADMIN."auth.php");
e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;

