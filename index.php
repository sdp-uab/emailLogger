<?php
/**
 * @file index.php
 *
 * Copyright (c) 2013 Simon Fraser University Library
 * Copyright (c) 2003-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Wrapper for email logger plugin.
 * @package plugins.generic.emailLogger
 *
 */
require_once('plugins/generic/emailLogger/EmailLoggerPlugin.inc.php');

return new EmailLoggerPlugin();

?>
