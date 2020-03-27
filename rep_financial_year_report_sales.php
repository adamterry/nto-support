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

    echo '<p class="et_pb_text_align_right">'.$fy.'</p>';

?>

    <table class="responsive-table">
        <thead>
            <tr>
                <td>
                    <center>
                        <h2><strong>MONTH</strong></h2>
                    </center>
                </td>
                <td>
                    <center>
                        <h2><strong>SALES</strong></h2>
                    </center>
                </td>
            </tr>
        </thead>
        <tbody>

            <?php

            foreach ($user_data as $data) {

            ?>
                <tr>
                    <!-- July data -->
                    <td>
                        <center>
                            <h2>July</h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->july_sales); ?></h2>
                        </center>
                    </td>
                </tr>
                <tr>
                    <!-- August data -->
                    <td>
                        <center>
                            <h2>August</h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->august_sales); ?></h2>
                        </center>
                    </td>
                </tr>
                <tr>
                    <!-- September data -->
                    <td>
                        <center>
                            <h2>September</h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->september_sales); ?></h2>
                        </center>
                    </td>
                </tr>
                <tr>
                    <!-- October data -->
                    <td>
                        <center>
                            <h2>October</h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->october_sales); ?></h2>
                        </center>
                    </td>
                </tr>
                <tr>
                    <!-- November data -->
                    <td>
                        <center>
                            <h2>November</h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->november_sales); ?></h2>
                        </center>
                    </td>
                </tr>
                <tr>
                    <!-- December data -->
                    <td>
                        <center>
                            <h2>December</h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->december_sales); ?></h2>
                        </center>
                    </td>
                </tr>
                <tr>
                    <!-- January data -->
                    <td>
                        <center>
                            <h2>January</h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->january_sales); ?></h2>
                        </center>
                    </td>
                </tr>
                <tr>
                    <!-- February data -->
                    <td>
                        <center>
                            <h2>February</h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->february_sales); ?></h2>
                        </center>
                    </td>
                </tr>
                <tr>
                    <!-- March data -->
                    <td>
                        <center>
                            <h2>March</h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->march_sales); ?></h2>
                        </center>
                    </td>
                </tr>
                <tr>
                    <!-- April data -->
                    <td>
                        <center>
                            <h2>April</h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->april_sales); ?></h2>
                        </center>
                    </td>
                </tr>
                <tr>
                    <!-- May data -->
                    <td>
                        <center>
                            <h2>May</h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->may_sales); ?></h2>
                        </center>
                    </td>
                </tr>
                <tr>
                    <!-- June data -->
                    <td>
                        <center>
                            <h2>June</h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->june_sales); ?></h2>
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