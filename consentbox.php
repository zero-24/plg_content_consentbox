<?php
/**
 * ConsentBox Plugin
 *
 * @copyright  Copyright (C) 2018 Tobias Zulauf All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

defined('_JEXEC') or die;

/**
 * A consent box plugin
 *
 * @since  1.0
 */
class PlgContentConsentBox extends JPlugin
{
	/**
	 * @var JApplicationSite $app
	 */
	protected $app;

	/**
	 * Load the language file on instantiation.
	 *
	 * @var    boolean
	 * @since  1.0
	 */
	protected $autoloadLanguage = true;

	/**
	 * Constructor
	 *
	 * @param   object  &$subject  The object to observe
	 * @param   array   $config    An array that holds the plugin configuration
	 *
	 * @since   1.0
	 */
	public function __construct(& $subject, $config)
	{
		parent::__construct($subject, $config);

		// Get the application if not done by JPlugin. This will happen with Joomla 2.5.
		if (!$this->app)
		{
			$this->app = JFactory::getApplication();
		}

		JFormHelper::addFieldPath(__DIR__ . '/field');
	}

	/**
	 * Adds additional fields to the user editing form
	 *
	 * @param   JForm  $form  The form to be altered.
	 * @param   mixed  $data  The associated data for the form.
	 *
	 * @return  boolean
	 *
	 * @since   1.0
	 */
	public function onContentPrepareForm($form, $data)
	{
		if ($this->app->isAdmin() || $form->getName() !== 'com_contact.contact')
		{
			return true;
		}

		// Add the registration fields to the form.
		JForm::addFormPath(__DIR__ . '/forms');
		$form->loadFile('consentbox');

		return true;
	}

	/**
	 * onSubmitContact
	 *
	 * @param   object   $contact   contact
	 * @param   array    &$data     Data from the form
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onSubmitContact(&$contact, &$data)
	{
		if ($this->params->get('consent_message', 0) == 1)
		{
			$data['contact_message'] .= "\r\n\r\n";
			$data['contact_message'] .= '--------';
			$data['contact_message'] .= "\r\n\r\n";
			$data['contact_message'] .= JText::_('PLG_CONTENT_CONSENTBOX_CONSENT_MESSAGE_TEXT');
		}
	}
}
