<?php
/*
 * @package AJAX_Chat
 * @author Sebastian Tschan
 * @copyright (c) Sebastian Tschan
 * @license GNU Affero General Public License
 * @link https://blueimp.net/ajax/
 */

// List containing the registered chat users:
$users = array();
$i=0;
// Default guest user (don't delete this one):
$users[$i] = array();
$users[$i]['userRole'] = AJAX_CHAT_USER;
$users[$i]['userName'] = null;
$users[$i]['password'] = null;
$users[$i]['channels'] = array(0);
$i++;
// Sample admin user:
$users[$i] = array();
$users[$i]['userRole'] = AJAX_CHAT_ADMIN;
$users[$i]['userName'] = 'admin';
$users[$i]['password'] = 'admin';
$users[$i]['channels'] = array(0,1);
$i++;
// Sample moderator user:
$users[$i] = array();
$users[$i]['userRole'] = AJAX_CHAT_MODERATOR;
$users[$i]['userName'] = 'moderator';
$users[$i]['password'] = 'moderator';
$users[$i]['channels'] = array(0,1);
$i++;
// Sample registered user:
$users[$i] = array();
$users[$i]['userRole'] = AJAX_CHAT_USER;
$users[$i]['userName'] = 'user';
$users[$i]['password'] = 'user';
$users[$i]['channels'] = array(0,1);
$i++;
//new user
$users[$i] = array();
$users[$i]['userRole'] = AJAX_CHAT_USER;
$users[$i]['userName'] = 'ohlala';
$users[$i]['password'] = 'ohlala';
$users[$i]['channels'] = array(0,1);
?>
