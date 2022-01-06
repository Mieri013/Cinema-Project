using System;
using Xunit;

namespace Tests
{
    public class ZakupioneBiletyTest
    {
        // nowy spis ma 0 biletów
        [Fact]
        public void NowySpisMaZeroBiletow()
        {
            SpisBiletow spisbiletow = new SpisBiletów();
            var size = spisbiletow.Size;
            Assert.Equal(0, size);
        }

        // do spisu można dodać bilet
        [Fact]
        public void PoDodaniuBiletuDoNowegoSpisuPowinienOnZawieracJedenBilet()
        {
            SpisBiletow spisbiletow = new SpisBiletów();
        	Bilet bilet = new Bilet ("ulgowy", 1, 1);

            spisbiletow.AddTicket(bilet);
            Assert.Equal(1, spisbiletow.Size);
        }

        // z spisu można usunąć bilet
        [Fact]
        public void PoUsunieciuBiletuZNowegoSpisuPowinienOnZawieracZeroBiletow()
        {
        	
        	SpisBiletow spisbiletow = new SpisBiletów();
        	Bilet bilet = new Bilet ("ulgowy", 1, 1);
        	int toremove = 0;
        	spisbiletow.RemoveTicket(toremove);

            var size = spisbiletow.Size;
            Assert.Equal(0, size);
        }
    }
}