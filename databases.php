<?php

ALTER TABLE 
		employees 
ADD 
	full_name
    VARCHAR(255);
SELECT 
	LastName, FirstName 
FROM 
	employees 
WHERE 
	ReportsTo = "";


?>