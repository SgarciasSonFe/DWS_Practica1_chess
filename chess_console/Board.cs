using ChessAPI.Model;

namespace ChessAPI
{
    internal class Board
    {
        public Piece[,] board;

        public Board()
        {
            board = new Piece[8, 8];
              
            board[0,0] = new Rook(Piece.ColorEnum.BLACK);
            board[0,1] = new Knight(Piece.ColorEnum.BLACK);
            board[0,2] = new Bishop(Piece.ColorEnum.BLACK);
            board[0,3] = new Queen(Piece.ColorEnum.BLACK);
            board[0,4] = new King(Piece.ColorEnum.BLACK);
            board[0,5] = new Bishop(Piece.ColorEnum.BLACK);
            board[0,6] = new Knight(Piece.ColorEnum.BLACK);
            board[0,7] = new Rook(Piece.ColorEnum.BLACK);
            for (int i = 0; i <= 7; i++)
            {
                board[1,i] = new Pawn(Piece.ColorEnum.BLACK);
            }

            for (int i = 0; i <= 7; i++)
            {
                board[6,i] = new Pawn(Piece.ColorEnum.WHITE);
            }
            board[7,0] = new Rook(Piece.ColorEnum.WHITE);
            board[7,1] = new Knight(Piece.ColorEnum.WHITE);
            board[7,2] = new Bishop(Piece.ColorEnum.WHITE);
            board[7,3] = new Queen(Piece.ColorEnum.WHITE);
            board[7,4] = new King(Piece.ColorEnum.WHITE);
            board[7,5] = new Bishop(Piece.ColorEnum.WHITE);
            board[7,6] = new Knight(Piece.ColorEnum.WHITE);
            board[7,7] = new Rook(Piece.ColorEnum.WHITE);
        }
        public Piece GetPiece(int row, int column)
        {
            return board[row, column];
        }


        
        public void Move(Movement movement)
        {
            if (movement.IsValid())
            {
                _Move(movement);
            }
        }
         
        private void _Move(Movement movement)
        {
            
            BoardPosition pfrom = movement.GetFromPosition();
            BoardPosition pto = movement.GetToPosition();

            
            board[pto.Row, pto.Column] = board[pfrom.Row, pfrom.Column];
            board[pfrom.Row, pfrom.Column] = null;
            
                    
        }

        
        public void Draw()
        {
            for (int i = 0; i < 8; i++)
            {
                for (int j=0; j < 8; j++)
                {
                    if((i % 2)==0)
                    {
                        if((board[i,j] == null) && (j % 2)==0)
                        {
                            Console.Write("|0000|");
                        } else if((board[i,j] == null) && (j % 2)-1==0)
                        {
                            Console.Write("|####|");
                        } else {
                            Console.Write(board[i,j].GetCode());
                        }
                    } else if((i % 2)-1==0)
                    {
                        if((board[i,j] == null) && (j % 2)==0)
                        {
                            Console.Write("|####|");
                        } else if((board[i,j] == null) && (j % 2)-1==0)
                        {
                            Console.Write("|0000|");
                        } else {
                            Console.Write(board[i,j].GetCode());
                        }
                    }
                     
                }
                Console.Write("\n");
                
            }
        }
        
        public string GetBoardState()
        {
            string result = string.Empty;
            
            return result;

        }


    }
}
