<?php
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if combo_ids is set and is an array
    if (isset($_POST['combo_ids']) && is_array($_POST['combo_ids'])) {
        // Loop through the selected package IDs
        foreach ($_POST['combo_ids'] as $selected_combo_id) {
            // Process each selected package here
            // $selected_combo_id contains the ID of the selected package
            // You can perform database operations or other actions based on the selection
            echo "Selected Package ID: " . $selected_combo_id . "<br>";
        }
    } else {
        echo "No packages were selected.";
    }
} else {
    echo "Form was not submitted.";
}
?>
