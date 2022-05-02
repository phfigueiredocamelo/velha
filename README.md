# velha
Simple Tic-tac-toe game running with PHP cli

# Run the game:
* Download docker 
* Inside project folder run `docker build -t velha:1.0 .` to build image;
* Run `docker run -it velha:1.0 bash` to start container
* Run the game with `php game.php`

# How to play
* When prompt ask for "Escolha outro campo: " give each param separeted by one space;
* *  Eg.: `x 0 0` to point your choice to first line and first column
* *  Eg.: `o 2 2` to point your choice to lest line and last column
* Always use letter `x` or `o`
