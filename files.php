<?php
//files

file_put_contents("data.txt","\nClinton", FILE_APPEND);

echo file_get_contents("data.txt");