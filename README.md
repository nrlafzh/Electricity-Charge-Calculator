# PHP Mini Project: Electricity Charge Calculator  

This PHP script calculates the **electricity charge** based on user-provided values for **voltage**, **current**, and **electricity rate**.  

## Features  
- Computes **power (W)** using the formula:  
  ```math
  Power = Voltage × Current

- Calculates **energy (Wh)** assuming **1-hour usage**:
   ```math 
   Energy = Power × 1

- Determines the **total charge ($)** based on the rate per kWh:
  ```math 
  TotalCharge = Energy × (Rate/100)
