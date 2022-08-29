
// var crosses = {
// 	c_1: {
// 		size: 100,
// 		pos_1: "top",
// 		pos_2: "left",
// 		flip_1: false,
// 		flip_2: false
// 	},
// 	c_2: {
// 		size: 170,
// 		pos_1: "top",
// 		pos_2: "right",
// 		flip_1: false,
// 		flip_2: false
// 	},
// 	c_3: {
// 		size: 130,
// 		pos_1: "bottom",
// 		pos_2: "right",
// 		flip_1: false,
// 		flip_2: false
// 	},
// 	c_4: {
// 		size: 145,
// 		pos_1: "bottom",
// 		pos_2: "left",
// 		flip_1: false,
// 		flip_2: false
// 	}
// }

// var cross_container = document.createElement("div");
// cross_container.id = "c_container";
// cross_container.classList.add("cross_container");
// document.body.appendChild(cross_container);

// for (var i = 0; i < 4; i++) {
// 	var cross = crosses[("c_" + (i + 1))];
// 	var img = document.createElement("img");
// 	img.classList.add("cross");
// 	img.classList.add("table_exclude");
// 	img.src = "./assets/img/cross.png";
// 	img.style = cross.pos_1 + ": 0;" + cross.pos_2 + ": 0;";
// 	img.width = cross.size;
// 	img.id = "cross_" + (i + 1);
// 	cross_container.appendChild(img);
// }

// var rotate = 0;

// setInterval(function() {
// 	var w_height = window.innerHeight;
// 	var w_width = window.innerWidth;
// 	for (var i = 0; i < 4; i++) {
// 		var cross = crosses[("c_" + (i + 1))];
// 		var c = document.getElementById("cross_" + (i + 1));

// 		var pos_1 = 0;
// 		var pos_2 = 0;

// 		if (parseInt(c.style[cross.pos_1]) + cross.size >= w_height - 0) {
// 			cross.flip_1 = true;
// 		} else if (parseInt(c.style[cross.pos_1]) <= 0) {
// 			cross.flip_1 = false;
// 		}
// 		if (parseInt(c.style[cross.pos_2]) + cross.size >= w_width - 0) {
// 			cross.flip_2 = true;
// 		} else if (parseInt(c.style[cross.pos_2]) <= 0) {
// 			cross.flip_2 = false;
// 		}

// 		if (cross.flip_1 == true) {
// 			pos_1 = (parseInt(c.style[cross.pos_1]) - 5);
// 		} else {
// 			pos_1 = (parseInt(c.style[cross.pos_1]) + 5);
// 		}
// 		if (cross.flip_2 == true) {
// 			pos_2 = (parseInt(c.style[cross.pos_2]) - 5);
// 		} else {
// 			pos_2 = (parseInt(c.style[cross.pos_2]) + 5);
// 		}

// 		if (rotate >= 360) {
// 			rotate = 0;
// 		}
// 		rotate += 1;

// 		c.style = cross.pos_1 + ":" + pos_1 + "px;" + cross.pos_2 + ":" + pos_2 + "px; transform: rotate("+ rotate +"deg);";

// 		if (i % 2 == 0) {
// 			c.style = cross.pos_1 + ":" + pos_1 + "px;" + cross.pos_2 + ":" + pos_2 + "px; transform: rotate("+ rotate +"deg);";
// 		} else {
// 			c.style = cross.pos_1 + ":" + pos_1 + "px;" + cross.pos_2 + ":" + pos_2 + "px; transform: rotate(-"+ rotate +"deg);";
// 		}
// 	}
// }, 50);
