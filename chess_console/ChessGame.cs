using ChessAPI.Model;

namespace ChessAPI
{
    internal class ChessGame
    {
        private Board board;


        public ChessGame()
        {
            board = new Board();
        }

        public void DrawBoard()
        {
            this.board.Draw();
        }

        public void TryToMove()
        {
            // TODO Practica 02_6
            //Instancia un movimiento dentro del tablero, desde una posición
            //en la que haya una pieza hasta otro. De momento no se realizan
            //validaciones salvo que sea una posición que esté dentro del tablero.
            BoardPosition fromBoardPosition = new BoardPosition(0,0);
            BoardPosition toBoardPosition = new BoardPosition(2,1);
            Movement movement = new Movement(fromBoardPosition,toBoardPosition);
            this.board.Move(movement);
        }

        public string GetBoardAsStringToChessWeb()
        {
            return board.GetBoardState();
        }

    }
}
