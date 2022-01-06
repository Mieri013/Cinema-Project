namespace Tests
{
    public class TicketsList
    {
        private List<Bilet> _bilet = new List<Bilet>();  

        public object Size 
            => _bilet.Count;

        public void AddTicket(Bilet bilet)
            => _bilet.Add(product);

        public void RemoveTicket(int ticketIndex)
			=> _bilet.RemoveAt(ticketIndex);
    }
}