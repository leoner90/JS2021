function changeColor() {
	let newColor = '#';
	let colorRange = ["0", "1", "2","3","4","5","6","7","8","9","a","b","c","d","e","f"];
	for(let i = 0 ; i < 6; i++) {
		let newColorPart = Math.floor(Math.random() * 16);
		newColor = newColor + colorRange[newColorPart];
	}
	let headerDiv = document.getElementById('header');
	headerDiv.style.backgroundColor = newColor;
}
