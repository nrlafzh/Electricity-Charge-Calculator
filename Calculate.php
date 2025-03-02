<?php
function calculateElectricityCharge($voltage, $current, $currentRate) {
    $power = $voltage * $current; // Calculate power in watts
    $energy = $power * 1 * 1000; // Calculate energy in watt-hours (assuming 1 hour)
    $totalCharge = $energy * ($currentRate / 100); // Calculate total charge
    
    return [
        'power' => $power,
        'energy' => $energy,
        'totalCharge' => $totalCharge
    ];
}

// Example usage:
$voltage = 220; // User input: voltage in volts
$current = 5; // User input: current in amperes
$currentRate = 0.15; // User input: current rate in dollars per kilowatt-hour

$result = calculateElectricityCharge($voltage, $current, $currentRate);

echo "Power: " . $result['power'] ;
echo "\n" ;
echo "Energy: " . $result['energy'] ;
echo "\n" ;
echo "Total Charge: $" . $result['totalCharge'] ;
?>