<?php
/**
 * @package		Joomla.SystemTest
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * loads each menu choice in back end
 */

require_once 'SeleniumJoomlaTestCase.php';

/**
 * @group ControlPanel
 */
class ControlPanel0002 extends SeleniumJoomlaTestCase
{

	function testMenuCheck()
	{
		$this->setUp();
		$this->gotoAdmin();
		$this->doAdminLogin();
		$this->jPrint ("Navigate to Control Panel.\n");
		$this->click("link=Control Panel");
		$this->waitForPageToLoad("30000");
		$this->jPrint ("Navigate to Global Config.\n");
		$this->click("link=Global Configuration");
		$this->waitForPageToLoad("30000");
		$this->click("//a[@href='#page-site']");
		$this->assertTrue($this->isTextPresent("Site Settings"));
		$this->click("//a[@href='#page-system']");
		$this->assertTrue($this->isTextPresent("System Settings"));
		$this->click("//a[@href='#page-server']");
		$this->assertTrue($this->isTextPresent("Server Settings"));
		$this->click("//div[@id='toolbar-cancel']/button");
		$this->waitForPageToLoad("30000");
		$this->jPrint ("Navigate to Global Check-in.\n");
		$this->click("link=Global Check-in");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("Global Check-in"));
		$this->jPrint ("Navigate to Clear Cache.\n");
		$this->click("link=Clear Cache");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("Clear Cache"));
		$this->jPrint ("Navigate to Purge Expired Cache.\n");
		$this->click("link=Purge Expired Cache");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("Purge Expired Cache"));
		$this->click("link=System Information");
		$this->waitForPageToLoad("30000");
		$this->click("//a[@href='#site']");
		$this->assertElementPresent("//div[@id='site'][@class='tab-pane active']");
		$this->click("//a[@href='#phpsettings']");
		$this->assertElementPresent("//div[@id='phpsettings'][@class='tab-pane active']");
		$this->click("//a[@href='#config']");
		$this->assertElementPresent("//div[@id='config'][@class='tab-pane active']");
		$this->click("//a[@href='#directory']");
		$this->assertElementPresent("//div[@id='directory'][@class='tab-pane active']");
		$this->click("//a[@href='#phpinfo']");
		$this->assertElementPresent("//div[@id='phpinfo'][@class='tab-pane active']");
		$this->jPrint ("Navigate to User Manager.\n");
		$this->click("link=User Manager");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("User Manager: Users"));
		$this->click("//ul[@id='submenu']/li[2]/a");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("Groups"));
		$this->click("link=Access Levels");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("Levels"));
		$this->click("link=Groups");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("Groups"));
		$this->click("link=Access Levels");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("Levels"));
		$this->jPrint ("Navigate to Add New User.\n");
		$this->click("link=User Manager");
		$this->waitForPageToLoad("30000");
		$this->click("//div[@id='toolbar-new']/button");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("User Manager: Add New User"));
		$this->click("//div[@id='toolbar-cancel']/button");
		$this->waitForPageToLoad("30000");
		$this->jPrint ("Navigate to Add New Group.\n");
		$this->click("link=User Groups");
		$this->waitForPageToLoad("30000");
		$this->click("//div[@id='toolbar-new']/button");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("User Manager: Add New User Group"));
		$this->click("//div[@id='toolbar-cancel']/button");
		$this->waitForPageToLoad("30000");
		$this->jPrint ("Navigate to Add New Access Level.\n");
		$this->click("link=Viewing Access Levels");
		$this->waitForPageToLoad("30000");
		$this->click("//div[@id='toolbar-new']/button");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("User Manager: Add New Viewing Access"));
		$this->click("//div[@id='toolbar-cancel']/button");
		$this->waitForPageToLoad("30000");
		$this->jPrint ("Navigate to Mass Mail.\n");
		$this->click("link=Mass Mail Users");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("Mass Mail"));
		$this->click("//div[@id='toolbar-cancel']/button");
		$this->waitForPageToLoad("30000");
		$this->jPrint ("Navigate to Read Private Messages.\n");
		$this->click("link=0");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("Private Messages"));
		$this->jPrint ("Navigate to New Private Message.\n");
		$this->click("//div[@id='toolbar-new']/button");
		$this->waitForPageToLoad("30000");
		$this->click("//div[@id='toolbar-cancel']/button");
		$this->waitForPageToLoad("30000");

		$this->jPrint ("Open Options modal \n");
		$this->click("//div[@id='toolbar-options']/button");
		$this->waitForPageToLoad("30000");
		$this->assertTrue(($this->isElementPresent("//li[@class='active'][contains(., 'Messaging')]")));
		$this->click("//div[@id='toolbar-cancel']/button");
		$this->waitForPageToLoad("30000");

		$this->jPrint ("Navigate to Menu Manager.\n");
		$this->click("link=Menu Manager");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("Menu Manager: Menus"));
		$this->jPrint ("Navigate to Article Manager.\n");
		$this->click("link=Article Manager");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("Article Manager: Articles"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-new']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-edit']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-publish']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-unpublish']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-archive']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-trash']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-options']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-help']/button"));
		$this->jPrint ("Navigate to Category Manager.\n");
		$this->click("link=Category Manager");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("Category Manager"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-new']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-edit']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-publish']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-unpublish']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-archive']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-trash']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-refresh']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-help']/button"));
		$this->jPrint ("Navigate to Featured Articles.\n");
		$this->click("link=Featured Articles");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("Article Manager: Featured Articles"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-new']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-edit']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-publish']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-unpublish']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-remove']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-archive']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-options']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-help']/button"));
		$this->jPrint ("Navigate to Add New Article.\n");
		$this->click("//div[@id='toolbar-new']/button");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("Article Manager: Add New Article"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-save']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-apply']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-save-new']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-cancel']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-help']/button"));
		$this->click("//div[@id='toolbar-cancel']/button");
		$this->waitForPageToLoad("30000");
		$this->jPrint ("Navigate to Add New Category.\n");
		$this->click("//a[contains(@href, 'option=com_categories&extension=com_content')]");
		$this->waitForPageToLoad("30000");
		$this->click("//div[@id='toolbar-new']/button");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("Category Manager: Add"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-save']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-apply']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-save-new']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-cancel']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-help']/button"));
		$this->click("//div[@id='toolbar-cancel']/button");
		$this->waitForPageToLoad("30000");

		$this->jPrint ("Navigate to Control Panel.\n");
		$this->gotoAdmin();

		$this->jPrint ("Navigate to Search Statistics.\n");
		$this->click("link=Search");
		$this->waitForPageToLoad("30000");
		$this->assertTrue($this->isTextPresent("Search Manager: Search Term Analysis"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-refresh']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-options']/button"));
		$this->assertTrue($this->isElementPresent("//div[@id='toolbar-help']/button"));
		$this->gotoAdmin();
		$this->doAdminLogout();
		$this->jPrint("Finish control_panel0002Test.php." . "\n");
		$this->deleteAllVisibleCookies();
	}
}

