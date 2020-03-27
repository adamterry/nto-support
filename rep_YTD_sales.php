<?php

global $wpdb;

// Current user data
$current_user_data = wp_get_current_user();
// Current user username (matches rep code)
$current_user_username = $current_user_data->user_login;

// Query `sales_rep_reports` table to retrieve data regarding the logged in sales rep account
$user_data = $wpdb->get_results("SELECT * FROM sales_rep_reports WHERE rep_code = '$current_user_username' ORDER BY report_created_date DESC LIMIT 1");

?>

<?php

if (count($user_data) > 0) {

    // Sales data found for this user!

    // Get / set year as per table data
    $year = '';

    foreach ($user_data as $data) {
        $year = $data->year;
    }

    // Set financial yer end
    $fy_end = $year + 1;

    // Set financial year full text
    $fy = $year . ' / ' . $fy_end;

    echo '<p class="et_pb_text_align_right">Financial year ' . $fy . '</p>';

?>

    <table class="responsive-table">
        <thead>
            <tr>
                <td>
                    <center>
                        <h2><strong>YTD Sales</strong></h2>
                    </center>
                </td>
            </tr>
        </thead>
        <tbody>

            <?php

            foreach ($user_data as $data) {

            ?>
                <tr>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->yearly_total_sales); ?></h2>
                        </center>
                    </td>
                </tr>

            <?php

            } // end foreach 

            ?>

        </tbody>
    </table>

<?php

} else {

    // No sales data found for this user

    echo 'You do not have any available data';
} // end else 

?>