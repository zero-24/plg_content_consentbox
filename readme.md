# ConsentBox Plugin

This plugin adds a consent checkbox to the Joomla Core contacts extension

## Feature

This plugin creates a single checkbox field in the joomla core contact form where you can make sure the privacy message is checked. But this works without custom fields enabled.
This plugin also allows a consent note to be appended to the email message.

## Configuration

### Initial setup the plugin

- Download & install the latest version of this plugin
- Enable the plugin from the Plugin Manager
- Create an override for the following strings foreache language you use:
  - `PLG_CONTENT_CONSENTBOX_CONSENTBOX_TEXT` => Message showed to the user in the frontend.
  - `PLG_CONTENT_CONSENTBOX_CONSENT_MESSAGE_TEXT` => Message appended to the email

### Options

There is just one option in the plugin setting where you can decide to include the message (`PLG_CONTENT_CONSENTBOX_CONSENT_MESSAGE_TEXT`) at the end of the email or not. As the language string is by default not set to anything usefull this option is disabled by default.

### Update Server

Please note that my update server only supports the latest version running the latest version of Joomla and atleast PHP 7.0.
Any other plugin version I may have added to the download section don't get updates using the update server.
