<?php
/**
 * @version     $Id: extensionbatch.php 010 2013-06-13 11:00:00Z Anton Wintergerst $
 * @package     JiExtensionServer for Joomla 2.5-3.0
 * @copyright   Copyright (C) 2013 Jinfinity. All rights reserved.
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * @website     www.jinfinity.com
 * @email       support@jinfinity.com
 */
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

abstract class JHtmlExtensionBatch
{
    /**
     * Displays a batch widget for moving or copying items.
     *
     * @param   string  $extension  The extension that owns the context.
     *
     * @return  string  The necessary HTML for the widget.
     *
     * @since   1.7
     */
    public static function item($extension)
    {
        // Create the copy/move options.
        $options = array(JHtml::_('select.option', 'c', JText::_('JLIB_HTML_BATCH_COPY')),
            JHtml::_('select.option', 'm', JText::_('JLIB_HTML_BATCH_MOVE')));

        // Create the batch selector to change select the context by which to move or copy.
        $lines = array('<label id="batch-choose-action-lbl" for="batch-choose-action">', JText::_('COM_JIEXTENSIONSERVER_BATCH_SELECTACTION'), '</label>',
            '</div>', '<div id="batch-move-copy" class="control-group radio">',
            JHtml::_('select.radiolist', $options, 'batch[move_copy]', '', 'value', 'text', 'm'), '</div><hr />');

        return implode("\n", $lines);
    }
}