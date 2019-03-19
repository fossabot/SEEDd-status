<?php
/**
 * SEED Status Page
 *
 * @category File
 * @package  BitcoinStatus_SEEDStatus
 * @author   Craig Watson <craig@cwatson.org>
 * @author   SEED Project <info@seednetwork.io>
 * @license  https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @link     https://github.com/craigwatson/bitcoind-status
 * @link     https://github.com/SEEDPlatform/SEEDd-status
 */

$config = array(

  // RPC
  'rpc_user'                  => 'rpcuser',
  'rpc_pass'                  => 'rpcpass',
  'rpc_host'                  => '0.0.0.0',
  'rpc_port'                  => '42421',
  'rpc_ssl'                   => false,
  'rpc_ssl_ca'                => null,

  // Donations
  'display_donation_text'     => true,
  'donation_address'          => '<SEED Address>',
  'donation_amount'           => '1.0',

  // Peers
  'display_peer_info'         => true,
  'display_peer_port'         => true,
  'hide_dark_peers'           => true,
  'ignore_unknown_ping'       => false,
  'peers_to_ignore'           => array(),

  // Cache
  'cache_geo_data'            => true,
  'geo_cache_file'            => '/var/tmp/SEEDd-geolocation.cache',
  'geo_cache_time'            => 604800,
  'use_cache'                 => true,
  'cache_file'                => '/tmp/SEEDd-status.cache',
  'max_cache_time'            => 300,
  'nocache_whitelist'         => array('127.0.0.1'),

  // Geolocation
  'geolocate_peer_ip'         => true,
  'display_ip_location'       => true,

  // UI
  'display_ip'                => false,
  'display_free_disk_space'   => true,
  'display_testnet'           => true,
  'display_version'           => true,
  'display_github_ribbon'     => true,
  'display_max_height'        => false,
  'use_bitcoind_ip'           => true,
  'intro_text'                => 'This is the SEED Node Information Site',
  'title_text'                => 'SEED Node Status',
  'display_bitnodes_info'     => false,
  'display_chart'             => true,
  'display_peer_chart'        => true,
  'node_links'                => array(),

  // Stats
  'stats_whitelist'           => array('127.0.0.1'),
  'stats_file'                => '/tmp/SEEDd-status.data',
  'stats_max_age'             => '604800',
  'stats_min_data_points'     => 5,

  // Node Count
  'peercount_whitelist'       => array('127.0.0.1'),
  'peercount_file'            => '/tmp/SEEDd-peers.data',
  'peercount_max_age'         => '2592000',
  'peercount_min_data_points' => 10,
  'peercount_extra_nodes'     => array(),

  // Uptime
  'display_bitcoind_uptime'   => true,
  'bitcoind_process_name'     => 'SEEDd',

  // System
  'date_format'               => 'H:i:s T, j F Y ',
  'disk_space_mount_point'    => '.',
  'timezone'                  => null,
  'stylesheet'                => 'v2-dark.css',
  'debug'                     => false,
  'admin_email'               => 'info@seednetwork.io',
);
