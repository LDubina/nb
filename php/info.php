<?php
@Str_val='ggg';
echo @Str_val.'Привет';
// Показывать всю информацию, по умолчанию INFO_ALL
phpinfo();
// Показывать информацию только о загруженных модулях.
// phpinfo(8) выдает тот же результат.
phpinfo(INFO_MODULES);
?>