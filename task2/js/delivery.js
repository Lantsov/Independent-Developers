function delivery($type) {
	if ($type == 'courier') {
		document.getElementById('form-courier').classList.remove('hidden');
		document.getElementById('form-pickup').classList.add('hidden');
	} else {
		document.getElementById('form-courier').classList.add('hidden');
		document.getElementById('form-pickup').classList.remove('hidden');
	}
}