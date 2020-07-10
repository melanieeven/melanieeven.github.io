// Variable pour l'image
let flash ;

//Variable pour le morceau
let themodel;

//Variable pour le son
let volumeson;

function preload() {
flash = loadImage ('flash.jpg');
themodel= loadSound("themodel.mp3");
}

// Variable de rotation sur l'axe y
let roty = 0 ;

//Un tableau pour stocker les valeurs de luminosité des pixels de l'image
let tab = []; //je declare un tableau de luminosité

//largeur du maillage pour le nuage
let cel = 8;
//Valeur de relief
let relief= 0.1;

function setup() {
createCanvas(500, 500, WEBGL);
  
  //Instancier l'analyseur sonore
volumeson = new p5.Amplitude() ;
  
// Lancer le Mp3
themodel.play() ; 
//themodel.loop(); 

  //je charge les données dans le tableau
  for(let i=0; i < flash.width ; i++){
    //1.je crée un nouveau tableau pour chaque case 
    //du 1er tableau
    tab[i] = [];
    
    for (let j=0 ; j < flash.height; j++){
      //je recupere la couleur
      let pixel = flash.get(i, j);
      //j'extraie la luminosité et je la range dans "tab"
      tab[i][j] = int(brightness(pixel)) ; 
    }//fermeture de for j
   
    
  }//fermeture for i
  
}//fin de setup

function draw() {
background(0);
  
//Je recupére le niveau sonore
let niveau = volumeson.getLevel();
relief = map(niveau, 0, 1, 0, 8);
  
// Rotation de la scène
roty += 0.007 ;
rotateY (roty);

// Dessin d'une ellipse
// ellipse(0,0,50,50);
  
// Afficher 1 image
translate (-flash.width/2, -flash.height/2, 0); // x,y,z
//image(flash,0,0);
  
//Crayon blanc
stroke(255);
  
  //Doubleboucle pour dessiner le nuage de points
for (let i=0 ; i < flash.width - cel ; i+= cel){
  for (let j=0 ; j < flash.height - cel ; j+=cel){
    
    //Dessin
    let x = i; 
    let y = j;
    let z = tab[i][j] * relief;
    point(x,y,z);
    
}//fermeture de for j
}//fermetur de for i


//function keyPressed(){
 // if (key =='a') { relief += 0.05;}
 // if (key =='z') { relief -= 0.05;}

}