using System;

namespace jeux_de_la_fourchette
{
    internal class Program
    {
        static void Main(string[] args)
        {
              Random rnd = new Random();
            int numberUser;
            int random = rnd.Next(0, 100);
            int fork =0;
            int test =1;


          
            Console.WriteLine("Saisisez un nombre entier entre 0 et 100");

            do
            {
                numberUser = int .Parse(Console.ReadLine());
                if(random < numberUser)
                {
                    fork = numberUser;
                    test++;
                    Console.WriteLine("le nombre rechercher est plus petit que "+fork);
                }else if(random > numberUser)
                {
                    fork = numberUser;
                    test++;
                    Console.WriteLine("le nombre rechercher est plus grand que " + fork);
                }
                else
                {
                     Console.WriteLine("bravo vous avez trouvé en " + test + " essai");
                }
           
            } while (numberUser != random);



        }
    }
}
