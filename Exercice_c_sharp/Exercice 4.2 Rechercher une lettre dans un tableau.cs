string phraseUtilisateur = " ";
char lettre = ' ' ;
int nb_lettre = 0;

Console.WriteLine("Veuillez saisir une phrase en terminant par <.> ");
phraseUtilisateur = Console.ReadLine();

Console.WriteLine("Veuillez saisir la lettre recherchée");
//lettre = Console.ReadLine().First(); 
lettre = char.Parse(Console.ReadLine());

for (int i = 0; i < phraseUtilisateur.Length; i++)
{
    if( lettre.Equals(phraseUtilisateur[i]))
    {

        nb_lettre++;
    }
}

 

Console.WriteLine("la lettre " + lettre + " est " + nb_lettre + " fois dans la phrase");






