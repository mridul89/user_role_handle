<?php

class AnattaDesign_UserRoleHandle_Model_Observer {

	public function addUserRoleHandle( $observer ) {
		$role = Mage::getSingleton( 'admin/session' )->getUser()->getRole();
		$observer->getLayout()->getUpdate()->addHandle( 'admin_user_role_' . $role->getRoleName() );
	}
}