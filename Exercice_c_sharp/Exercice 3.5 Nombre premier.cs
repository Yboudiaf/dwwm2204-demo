using System;

namespace Exercice_3._5_Nombre_premier_yacine
{
    internal class Program
    {
        static void Main(string[] args)
        {


            int user;


            String Resultat = "Est un nombre premier";



            Console.WriteLine("Entrer un nombre utilisateur");
            user = int.Parse( Console.ReadLine());


            for(int i = 2; i < user; i++)  
                if(user % i == 0)
                {
                    Resultat = user + " n'est pas un nombre premier";
                }
            Console.WriteLine(Resultat);
        }
    }
}


