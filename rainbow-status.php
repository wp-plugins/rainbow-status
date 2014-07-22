<?php

/*
Plugin Name: Rainbow Status
Version: 1.0
Description: Get different colors for posts/pages based on their current status (Draft, Pending, Published, Scheduled and Private).
Author: Kumar Abhisek
Author URI: http://increasy.com/
Plugin URI: http://increasy.com/
License: GPLv2

 Copyright 2014 Kumar Abhisek (email:meabhi[at]outlook dot com)
 
 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License version 2,
 as published by the Free Software Foundation.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
 GNU General Public License for more details.
 
 The license for this software can likely be found here:
 http://www.gnu.org/licenses/gpl-2.0.html

*/

add_action('admin_footer','rainbow_status_color');

 function rainbow_status_color(){
echo "
	<style type='text/css'>
	.status-draft{background: #E1BCF0 !important;}
    .status-pending{background: #B8EEAD !important;}
    .status-future{background: #BAF0FF !important;}
    .status-private{background: #FCF0B1;}
	}
	</style>
	";
}