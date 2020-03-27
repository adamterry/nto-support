<?php

global $wpdb;

// Query `nto_state_budget_sales` table to retrieve data
// We will be running a separate query for each state

// WA query
$wa_ms_data = $wpdb->get_results("SELECT * FROM nto_state_budget_sales WHERE state = 'WA' ORDER BY report_created_date DESC LIMIT 1");

// Get the current month to filter results based on table column name
$month = date('F');

// Set the current month column names for budget & sales
$month_column_budget = strtolower($month) . '_budget';
$month_column_sales = strtolower($month) . '_sales';

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

    // WA table

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