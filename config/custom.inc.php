<?php
// Generate a random 24-character key
$config['des_key'] = 'CHANGE_THIS_TO_A_RANDOM_24_CHARS';

// Security
$config['ip_check'] = true;
$config['force_https'] = true;          // Force HTTPS when behind proxy
$config['use_https'] = true;

// Session
$config['session_lifetime'] = 30;
$config['enable_installer'] = false;
