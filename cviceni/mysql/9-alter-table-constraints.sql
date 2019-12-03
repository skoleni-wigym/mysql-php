-- změníme sloupec "číslo" tak, aby se sám navyšoval o 1
ALTER TABLE `pokedex_johto`
MODIFY `number` INT AUTO_INCREMENT;