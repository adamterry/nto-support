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

// Get the current month to filter results based on table column name
$month = date('F');

// Set the current month column names for budget & sales
$month_column_budget = strtolower($month) . '_budget';
$month_column_sales = strtolower($month) . '_sales';

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
                    <!-- Current month data -->
                    <td>
                        <center>
                            <h2><?php echo $month; ?></h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->$month_column_budget); ?></h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->$month_column_sales); ?></h2>
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

    echo 'No available data found. Please import an updated .csv file.';
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
                    <!-- Current month data -->
                    <td>
                        <center>
                            <h2><?php echo $month; ?></h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->$month_column_budget); ?></h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->$month_column_sales); ?></h2>
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

    echo 'No available data found. Please import an updated .csv file.';
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
                    <!-- Current month data -->
                    <td>
                        <center>
                            <h2><?php echo $month; ?></h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->$month_column_budget); ?></h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->$month_column_sales); ?></h2>
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

    echo 'No available data found. Please import an updated .csv file.';
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
                    <!-- Current month data -->
                    <td>
                        <center>
                            <h2><?php echo $month; ?></h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->$month_column_budget); ?></h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->$month_column_sales); ?></h2>
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

    echo 'No available data found. Please import an updated .csv file.';
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
                    <!-- Current month data -->
                    <td>
                        <center>
                            <h2><?php echo $month; ?></h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->$month_column_budget); ?></h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->$month_column_sales); ?></h2>
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

    echo 'No available data found. Please import an updated .csv file.';
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
                    <!-- Current month data -->
                    <td>
                        <center>
                            <h2><?php echo $month; ?></h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->$month_column_budget); ?></h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->$month_column_sales); ?></h2>
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

    echo 'No available data found. Please import an updated .csv file.';
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
                    <!-- Current month data -->
                    <td>
                        <center>
                            <h2><?php echo $month; ?></h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->$month_column_budget); ?></h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->$month_column_sales); ?></h2>
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

    echo 'No available data found. Please import an updated .csv file.';
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
                    <!-- Current month data -->
                    <td>
                        <center>
                            <h2><?php echo $month; ?></h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->$month_column_budget); ?></h2>
                        </center>
                    </td>
                    <td>
                        <center>
                            <h2><?php echo '$' . number_format($data->$month_column_sales); ?></h2>
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

    echo 'No available data found. Please import an updated .csv file.';
} // end else 

?>