namespace ChessAPI
{
    public class Movement
    {
        private BoardPosition _fromBoardPosition;
        private BoardPosition _toBoardPosition;

        public Movement(BoardPosition fromBoardPosition, BoardPosition toBoardPosition)
        {
            _fromBoardPosition = fromBoardPosition;
            _toBoardPosition = toBoardPosition;
        }

        // Código para la Practica 02_3
        public BoardPosition GetFromPosition()
        {
            return _fromBoardPosition;
        }
        public BoardPosition GetToPosition()
        {
            return _toBoardPosition;
        }

       
        public bool IsValid()
        {
            if(BoardPosition.ValidateBoardPosition(_fromBoardPosition) && BoardPosition.ValidateBoardPosition(_toBoardPosition))
            {
                return true;
            } else {
                return false;
            }
        }
    }
}
