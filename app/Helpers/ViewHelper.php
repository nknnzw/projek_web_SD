<?php
namespace App\Helpers;

class ViewHelper {
     /**
     * Gets the full month name based on a month number (1-12).
     *
     * @param int $monthNumber The month number (1 for January, 12 for December).
     * @return string|false The full month name, or false if the month number is invalid.
     */
     public static function getMonthName(int $monthNumber): string|false
    {
        // Validate the month number.
        if ($monthNumber < 1 || $monthNumber > 12) {
            return false; // Invalid month number.
        }

        // Create a DateTime object for the first day of the given month.
        try {
            $date = new \DateTime("2023-$monthNumber-01");
            return $date->format('F'); // 'F' format gives the full month name.
        } catch (\Exception $e) {
            // Handle potential exceptions.
            return false;
        }
    }
}