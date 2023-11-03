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
