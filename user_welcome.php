<?php

// Add a personalised welcome message to logged in user.

// Current user data
$current_user_data = wp_get_current_user();

// Current user ID
$current_user_id = $current_user_data->ID;

// Set users first & last name
$first_name = get_user_meta($current_user_id, 'first_name', true);
$last_name = get_user_meta($current_user_id, 'last_name', true);

// Output welcome message
echo 'Welcome, '.$first_name.' '.$last_name;

?>