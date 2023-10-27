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


        /// notTODO Practica 02_1
        /// Ha de validar el rango de los 2 objetos BoardPosition encapsulados
        /// en esta clase.
        public bool IsValid()
        {
            if((_fromBoardPosition.Column >= 0 && _fromBoardPosition.Column <= 7) && (_fromBoardPosition.Row >= 0 && _fromBoardPosition.Row <= 7))
            {
                return true;
            } else {
                return false;
            }
        }
    }
}
