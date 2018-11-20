var circle;
var circle_sprite;
var circle_test = [];
var score = 0;

var screen = 'options';

function preload() {
	player_image = loadImage('https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Twemoji2_1f962.svg/512px-Twemoji2_1f962.svg.png');
	circle_image = loadImage('https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Android_Emoji_1f35c.svg/512px-Android_Emoji_1f35c.svg.png');
}

function setup() {
	createCanvas(1250, 575);
	player = createSprite(400,400);
	//circle = createSprite(850, 400);
	circle_sprite = createSprite(850,400);
	player.addImage(player_image);
	circle_sprite.addImage(circle_image);
}

function draw() {
	background(255);
	//frameRate(60);
	noCursor();
	scoreCounter();
	drawCircles();
	check();
	/*
	if (screen=='menu') {
		menu();
	}
	if (screen=='game') {
		game();
	}
	if (screen=='options') {
		options();
	}*/
	drawSprites();
}
/*
function menu() {
	textSize(40);
	fill('Black');
	text('Start', 150, 700);
}

function options() {
	createCanvas(windowWidth, windowHeight)
}

function game() {
	//createCanvas(windowWidth, windowHeight);
	noCursor();
	scoreCounter();
	drawCircles();
	check();
}*/

function drawCircles() {
	player.scale = 0.05;
	circle_sprite.scale = 0.1;
	player.position.x = mouseX;
	player.position.y = mouseY;
	//circle.position.x = 500;
	//circle.position.y = 500;
	
	for (var i=0; i<25;i++){
		var circle_obs = {
			x: random(width-100),
			y: random(height-100),
			r: 32		
		}
		circle_test.push(circle_obs);
	}
	//ellipse(circle_test[0].x, circle_test[0].y, 64,64);
	//circle_sprite.position.x = circle_test[0].x;
	//circle_sprite.position.y = circle_test[0].y;
}


function check() {
	randomNum = round(random(5));	
	if (mouseIsPressed) {
		if (mouseButton == LEFT) {
			if (player.overlap(circle_sprite)) {
				score += 1;			
				circle_sprite.position.x = circle_test[randomNum].x;
				circle_sprite.position.y = circle_test[randomNum].y;	
			}
		}
	}
}

function scoreCounter() {
	fill('Red');
	text(score, 50,50);
}