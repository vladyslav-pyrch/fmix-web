<?php
function includeComponent($filePath, $variables = array())
{
    // Extract the variables to a local namespace
    extract($variables);

    // Start output buffering
    ob_start();

    // Include the template file
    include $filePath;

		ob_end_flush();
}

