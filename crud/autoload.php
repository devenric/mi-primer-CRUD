<?php
spl_autoload_register(function ($clase) {
	$archivo = __DIR__ . '/src/' . $clase . '.php';
	if (file_exists($archivo)) {
		require $archivo;
	}
});
?>