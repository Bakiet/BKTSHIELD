using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using BusinessObjects;
using DataObjects;

namespace Controllers
{
    public class CheatController
    {

        public IList<cheat> ObtenerCheats()
        {
            ControllerResult resultado = new ControllerResult();

            IList<cheat> Cheat = CheatDao.ObtenerCheats();

            return Cheat;

        }

        
    }
}
