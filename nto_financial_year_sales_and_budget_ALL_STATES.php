<?php

global $wpdb;

// Query `nto_state_budget_sales` table to retrieve data
// We will be running a separate query for each state

// ACT query
$act_ms_data = $wpdb->get_results("SELECT * FROM nto_state_budget_sales WHERE state = 'ACT' ORDER BY report_created_date DESC LIMIT 1");

// NSW query
$nsw_ms_data = $wpdb->get_results("SELECT * FROM nto_state_budget_sales WHERE state = 'NSW' ORDER BY report_created_date DESC LIMIT 1");

// SA query
$sa_ms_data = $wpdb->get_results("SELECT * FROM nto_state_budget_sales WHERE state = 'SA' ORDER BY report_created_date DESC LIMIT 1");

// WA query
$wa_ms_data = $wpdb->get_results("SELECT * FROM nto_state_budget_sales WHERE state = 'WA' ORDER BY report_created_date DESC LIMIT 1");

// NT query
$nt_ms_data = $wpdb->get_results("SELECT * FROM nto_state_budget_sales WHERE state = 'NT' ORDER BY report_created_date DESC LIMIT 1");

// QLD query
$qld_ms_data = $wpdb->get_results("SELECT * FROM nto_state_budget_sales WHERE state = 'QLD' ORDER BY report_created_date DESC LIMIT 1");

// VIC query
$vic_ms_data = $wpdb->get_results("SELECT * FROM nto_state_budget_sales WHERE state = 'VIC' ORDER BY report_created_date DESC LIMIT 1");

// TAS query
$tas_ms_data = $wpdb->get_results("SELECT * FROM nto_state_budget_sales WHERE state = 'TAS' ORDER BY report_created_date DESC LIMIT 1");

// ACT DATA ------------

// If data found
if (count($act_ms_data) > 0) {

    // Monthly state data found for this user!

    // Get / set year as per table data
    $year = '';

    foreach ($act_ms_data as $data) {
        $year = $data->year;
    }

    // Set financial yer end
    $fy_end = $year + 1;

    // Set financial year full text
    $fy = $year . ' / ' . $fy_end;

    // ACT table

    // Table headings and FY indicators
    echo '<h3><strong>Australian Capital Territory</strong></h3><p class="et_pb_text_align_right">Financial year ' . $fy . '</p>';

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
                        <h2><strong>BUDGET</strong></h2>
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

            foreach ($act_ms_data as $data) {

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
                            <h2><?php echo '$' . number_format($data->july_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->august_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->september_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->october_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->november_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->december_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->january_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->february_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->march_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->april_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->may_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->june_budget); ?></h2>
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
    </table><br><hr>

<?php

} else {

    // No sales data found for this user

    echo 'No available data found';
} // end else

// NSW DATA -------------

// If data found
if (count($nsw_ms_data) > 0) {

    // Monthly state data found for this user!

    // Get / set year as per table data
    $year = '';

    foreach ($nsw_ms_data as $data) {
        $year = $data->year;
    }

    // Set financial yer end
    $fy_end = $year + 1;

    // Set financial year full text
    $fy = $year . ' / ' . $fy_end;

    // New South Wales table

    // Table headings and FY indicators
    echo '<br><h3><strong>New South Wales</strong></h3><p class="et_pb_text_align_right">Financial year ' . $fy . '</p>';

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
                        <h2><strong>BUDGET</strong></h2>
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

            foreach ($nsw_ms_data as $data) {

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
                            <h2><?php echo '$' . number_format($data->july_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->august_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->september_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->october_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->november_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->december_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->january_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->february_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->march_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->april_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->may_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->june_budget); ?></h2>
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
    </table><br><hr>

<?php

} else {

    // No sales data found for this user

    echo 'No available data found';
} // end else 

// NT DATA ------------

// If data found
if (count($nt_ms_data) > 0) {

    // Monthly state data found for this user!

    // Get / set year as per table data
    $year = '';

    foreach ($nt_ms_data as $data) {
        $year = $data->year;
    }

    // Set financial yer end
    $fy_end = $year + 1;

    // Set financial year full text
    $fy = $year . ' / ' . $fy_end;

    // NT table

    // Table headings and FY indicators
    echo '<br><h3><strong>Northern Territory</strong></h3><p class="et_pb_text_align_right">Financial year ' . $fy . '</p>';

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
                        <h2><strong>BUDGET</strong></h2>
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

            foreach ($nt_ms_data as $data) {

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
                            <h2><?php echo '$' . number_format($data->july_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->august_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->september_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->october_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->november_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->december_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->january_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->february_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->march_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->april_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->may_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->june_budget); ?></h2>
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
    </table><br><hr>

<?php

} else {

    // No sales data found for this user

    echo 'No available data found';
} // end else

// QLD DATA ------------

// If data found
if (count($qld_ms_data) > 0) {

    // Monthly state data found for this user!

    // Get / set year as per table data
    $year = '';

    foreach ($qld_ms_data as $data) {
        $year = $data->year;
    }

    // Set financial yer end
    $fy_end = $year + 1;

    // Set financial year full text
    $fy = $year . ' / ' . $fy_end;

    // ACT table

    // Table headings and FY indicators
    echo '<br><h3><strong>Queensland</strong></h3><p class="et_pb_text_align_right">Financial year ' . $fy . '</p>';

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
                        <h2><strong>BUDGET</strong></h2>
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

            foreach ($qld_ms_data as $data) {

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
                            <h2><?php echo '$' . number_format($data->july_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->august_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->september_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->october_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->november_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->december_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->january_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->february_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->march_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->april_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->may_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->june_budget); ?></h2>
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
    </table><br><hr>

<?php

} else {

    // No sales data found for this user

    echo 'No available data found';
} // end else

// SA DATA --------------

// If data found
if (count($sa_ms_data) > 0) {

    // Monthly state data found for this user!

    // Get / set year as per table data
    $year = '';

    foreach ($sa_ms_data as $data) {
        $year = $data->year;
    }

    // Set financial yer end
    $fy_end = $year + 1;

    // Set financial year full text
    $fy = $year . ' / ' . $fy_end;

    // South Australia table

    // Table headings and FY indicators
    echo '<br><h3><strong>South Australia</strong></h3><p class="et_pb_text_align_right">Financial year ' . $fy . '</p>';

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
                        <h2><strong>BUDGET</strong></h2>
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

            foreach ($sa_ms_data as $data) {

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
                            <h2><?php echo '$' . number_format($data->july_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->august_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->september_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->october_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->november_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->december_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->january_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->february_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->march_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->april_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->may_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->june_budget); ?></h2>
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
    </table><br><hr>

<?php

} else {

    // No sales data found for this user

    echo 'No available data found';
} // end else

// TAS DATA -------------

// If data found
if (count($tas_ms_data) > 0) {


    // Monthly state data found for this user!

    // Get / set year as per table data
    $year = '';

    foreach ($tas_ms_data as $data) {
        $year = $data->year;
    }

    // Set financial yer end
    $fy_end = $year + 1;

    // Set financial year full text
    $fy = $year . ' / ' . $fy_end;

    // Tasmania table

    // Table headings and FY indicators
    echo '<br><h3><strong>Tasmania</strong></h3><p class="et_pb_text_align_right">Financial year ' . $fy . '</p>';

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
                        <h2><strong>BUDGET</strong></h2>
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

            foreach ($tas_ms_data as $data) {

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
                            <h2><?php echo '$' . number_format($data->july_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->august_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->september_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->october_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->november_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->december_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->january_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->february_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->march_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->april_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->may_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->june_budget); ?></h2>
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
    </table><br><hr>

<?php

} else {

    // No sales data found for this user

    echo 'No available data found';
} // end else

// VIC DATA -------------

// If data found
if (count($vic_ms_data) > 0) {

    // Monthly state data found for this user!

    // Get / set year as per table data
    $year = '';

    foreach ($vic_ms_data as $data) {
        $year = $data->year;
    }

    // Set financial yer end
    $fy_end = $year + 1;

    // Set financial year full text
    $fy = $year . ' / ' . $fy_end;

    // New South Wales table

    // Table headings and FY indicators
    echo '<br><h3><strong>Victoria</strong></h3><p class="et_pb_text_align_right">Financial year ' . $fy . '</p>';

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
                        <h2><strong>BUDGET</strong></h2>
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

            foreach ($vic_ms_data as $data) {

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
                            <h2><?php echo '$' . number_format($data->july_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->august_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->september_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->october_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->november_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->december_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->january_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->february_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->march_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->april_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->may_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->june_budget); ?></h2>
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
    </table><br><hr>

<?php

} else {

    // No sales data found for this user

    echo 'No available data found';
} // end else

// WA DATA -------------

// If data found
if (count($wa_ms_data) > 0) {

    // Monthly state data found for this user!

    // Get / set year as per table data
    $year = '';

    foreach ($wa_ms_data as $data) {
        $year = $data->year;
    }

    // Set financial yer end
    $fy_end = $year + 1;

    // Set financial year full text
    $fy = $year . ' / ' . $fy_end;

    // New South Wales table

    // Table headings and FY indicators
    echo '<br><h3><strong>Western Australia</strong></h3><p class="et_pb_text_align_right">Financial year ' . $fy . '</p>';

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
                        <h2><strong>BUDGET</strong></h2>
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

            foreach ($wa_ms_data as $data) {

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
                            <h2><?php echo '$' . number_format($data->july_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->august_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->september_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->october_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->november_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->december_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->january_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->february_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->march_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->april_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->may_budget); ?></h2>
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
                            <h2><?php echo '$' . number_format($data->june_budget); ?></h2>
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

    echo 'No available data found';
} // end else 

?>