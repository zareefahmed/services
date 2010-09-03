<?php

/**
 * @file
 * Hooks provided by Services for the definition of servers.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Identifies a server implementation to Services.
 *
 * @return
 *   An associative array with the following keys.
 *
 *   - name: The display name of this server.
 */
function hook_server_info() {
  return array(
    'name' => 'REST',
  );  
}

/**
 * Acts on requests to the server defined in hook_server_info().
 */
function hook_server() {
  
}