namespace tests
{
    public class Bilet
    {
        public Product(string rodzaj, int rzad, int miejsce)
        {
            Rodzaj = rodzaj;
            Rzad = rzad;
			Miejsce = miejsce;
        }

        public string Rodzaj { get; }
        public int Rzad { get; }
		public int Miejsce { get; }
    }
}
